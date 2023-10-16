<?php

namespace App\Controllers;

use App\Mailer\Mailer;
use App\Models\UserModel;
use App\Validators\DataValidator;
use App\Validators\FormFieldValidator;
use Core\Auth;
use Core\Controller;
use Core\DB;
use Core\GET;
use Core\Inject;
use Core\Param;
use Core\POST;
use Core\Response;
use Core\Route;
use Core\Router;
use DateTime;

enum VerifiationCodes
{
    case ACTIVATE_ACCOUNT;
    case RESET_ACCOUNT_PWD;
};

enum UserRoles: string
{
    case RESET_PWD = "GUEST:RESET_PWD";
    case ADMIN = "ADMIN";
    case USER = "USER";
};

#[Route("auth")]
class AuthController extends Controller
{


    #[Route("/admin/login")]
    public function loginAdmin(#[Inject(DataValidator::class)] DataValidator  $validator)
    {
        $errors = [];
        $user = session()->getState()->getUser();
        if (!empty($user) && strpos($user["user_roles"], "ADMIN") !== false) {
            return Router::redirect("/admin/dashboard");
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($this->verifyCredentials($_POST, $errors, $user)) {

                if (strpos($user["user_roles"], "ADMIN") !== false) {
                    unset($user["password"]);
                    session()->getState()->setUser($user);
                    return Router::redirect('/admin/dashboard');
                } else {
                    $errors["form"] = [
                        ...(empty($errors["form"]) ? [] : $errors["form"]),
                        "forbiden" => "Accès interdit"
                    ];
                }
            } else {

                if (!empty($user)) {
                    
                    if (strpos($user["user_roles"], "ADMIN") !== false) {
                        if ($user["user_password"] === "NONE") {
                            $this->sendVerificationCodeTo($user, "Réinitialisation de mot de passe", "emails/reset-password.html.twig", VerifiationCodes::RESET_ACCOUNT_PWD->name);
                            session()->getState()->setFlash([
                                "error" => t("Ceci est votre première connexion. Nous venons de vous envoyer un mail pour réinitialiser votre compte.")
                            ]);
                            return $this->render("admin/auth/login.html.twig");
                        } else {
                            $errors["email"] = [
                                ...(empty($errors["email"]) ? [] : $errors["email"]),
                                "error" => "Erreur de connexion"
                            ];
                        }
                    } else {
                        $errors["form"] = [
                            ...(empty($errors["form"]) ? [] : $errors["form"]),
                            "forbiden" => "Accès interdit"
                        ];
                    }
                } else {
                    $errors["email"] = [
                        ...(empty($errors["email"]) ? [] : $errors["email"]),
                        "notFound" => "Email ou mot de passe invalide"
                    ];
                }

                return $this->render("admin/auth/login.html.twig", [
                    "errors" => $errors
                ]);
            }
        }

        return $this->render("admin/auth/login.html.twig", [
            "errors" => $errors
        ]);
    }

    #[Route("/reset/pwd")]
    #[Auth(["GUEST:RESET_PWD"], onErrorTo: "/login")]
    function resetAccount()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST;
            $errors = [];
            $validator = new FormFieldValidator("csrf_token",  $data["csrf_token"] ?? null);
            $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "ID de formulaire invalide");
            $validator = new FormFieldValidator("password", $data["password"] ?? null);
            $validator->validatePassword($errors);
            $validator = new FormFieldValidator("new-password", $data["new-password"] ?? null);
            $validator->validateEquals($data["password"] ?? null, $errors,  "Les mots de passes ne sont pas équivalents.");
            if (empty($errors)) {
                $user = session()->getState()->getUser();
                UserModel::update([
                    "user_id" => $user["user_id"],
                    "user_password" => password_hash($data["password"], PASSWORD_DEFAULT)
                ]);
                session()->getState()->setUser(null);
                return [
                    "message" => t("Mot de passe mise à jour."),
                    "redirectTo" => strpos($user["user_roles"], "ADMIN") !== false ? "/auth/admin/login" : "/login"
                ];
            } else {
                Response::setHttpResponseCode(400);
                return  $errors;
            }
        }
        return $this->render("client/reset.html.twig");
    }

    #[Route("/reset/request")]
    function requestResetEmail()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST;
            $validator = new FormFieldValidator("form",  $data["csrf_token"] ?? null);
            $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "ID de formulaire invalide");
            $validator = new FormFieldValidator("email", $data["email"] ?? null);
            $validator->validateEmail($errors);
            if (empty($errors)) {
                $user = UserModel::getByEmail($data["email"]);
                if ($user) {
                    $this->sendVerificationCodeTo($user, t("Réinitialisation de mot de passe"), "emails/reset-password.html.twig", VerifiationCodes::RESET_ACCOUNT_PWD->name);
                }
                return $this->render("client/verification-mail-sent.html.twig", [
                    'email' => $data["email"],
                    "resent" => true,
                    "text" => "Si votre compte existe un email de récupération a été déjà envoyé à votre email pour réinitialiser votre mot de passe.",
                    "resend" => false
                ]);
            } else {
                Response::setHttpResponseCode(400);
                return   $this->render("client/reset-req.html.twig", [
                    "errors" => $errors
                ]);
            }
        }
        return $this->render("client/reset-req.html.twig");
    }


    #[POST("/login")]
    public function loginUser()
    {
        $errors = [];
        $user = null;
        $this->verifyCredentials($_POST, $errors, $user);
        if ($errors) {
            Response::setHttpResponseCode(400);
            return $errors;
        }
        
        if (!empty($user) && strpos($user["user_roles"], "USER") !== false) {
            
            if (!empty($user["user_activated_at"])) {
                unset($user["password"]);
                session()->getState()->setUser($user);
                
                return [
                    "user" => $user['user_id']
                ];
            } else {
                $this->sendVerificationCodeTo($user);
                Response::setHttpResponseCode(400);
                return [
                    "form" => [
                        "not_activated" => t("Votre compte n'est pas encore activé. Un mail de vérification de votre compte vient de vous etre envoyé. Veillez consulter votre boite mail pour valider le compte")
                    ]
                ];
            }
        } else {
            Response::setHttpResponseCode(400);
            return $errors;
        }
    }

    #[POST("/signup")]
    function signUserUp()
    {

        $error = [];
        $this->validate($error);
        if (\count($error)) {
            Response::setHttpResponseCode(400);
            return $error;
        } else {
            try {
                if(UserModel::getByEmail($_POST["email"])){
                    Response::setHttpResponseCode(400);
                    return [
                        "form" => [
                            "failed" => t("Compte existant. Veuillez vous connecter")
                        ]
                    ];
                }
                $user = UserModel::insertUser([
                    "user_fullname" => htmlspecialchars($_POST["fullname"]),
                    "user_email" => htmlspecialchars($_POST["email"]),
                    "user_password" => password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT),
                    "user_roles" => "USER",
                ]);
                unset($user["password"]);
                //(new AuthController())->sendVerificationCodeTo($user);
                return $user;
            } catch (\PDOException $e) {
                Response::setHttpResponseCode(400);
                return [
                    "form" => [
                        "failed" => t("Erreur de création de compte. Réssayer ou contactez un administrateur")
                    ]
                ];
            }
        }
    }


    #[GET("/verify/{verificationCode}/{userEmail}/{userId}")]
    function verify(
        #[Param("verificationCode")] $verificationCode,
        #[Param("userEmail")] $userEmail,
        #[Param("userId")] $userId,
    ) {
        $userEmail=base64_decode(urldecode($userEmail));
        $user = DB::pdo()->query("SELECT * from user where user_id='$userId' and user_email ='".$userEmail."'")->fetch();
        
        if (empty($user)) {
            return $this->render("client/verification-mail-sent.html.twig", [
                "noverify" => t("Email ou Id utilisateur invalide")
            ]);
        } else {
                $values = explode(":", $user["user_verification_code"]);
                if ($verificationCode === $values[1]) {
                    $expiredAt = new DateTime($user["user_verification_expiresAt"]);
                    $now = new DateTime();
                    if ($now > $expiredAt) {
                        return $this->render("client/verification-mail-sent.html.twig", [
                            "noverify" => t("Le code de vérification a expiré.")
                        ]);
                    }

                    switch ($values[0]) {
                        case VerifiationCodes::ACTIVATE_ACCOUNT->name: {
                                if(!$user["user_activated_at"]){
                                    UserModel::update([
                                        "user_id" => $user["user_id"],
                                        "user_activated_at" => (new DateTime())->format("Y-m-d H:i:s")
                                    ]);

                                    if (strpos($user["user_roles"], "ADMIN") !== false) {
                                    } else {

                                        return Router::redirect("/login", ["success" => t("Compte confirmé. Vous pouvez maintenant vous connecter.")]);
                                    }
                                
                                }else{
                                    return Router::redirect("/login");
                                }
                                break;
                            }
                        case VerifiationCodes::RESET_ACCOUNT_PWD->name: {
                                session()->getState()->setUser([
                                    ...$user,
                                    "user_roles" => $user["user_roles"] . "," . UserRoles::RESET_PWD->value
                                ]);
                                return Router::redirect("/auth/reset/pwd");
                            }
                        default: {
                                Router::redirect(strpos($user["user_roles"], "ADMIN") !== false ? "/admin/login" : "/auth/login", ["failed" => "Code vérifier mais action indéfinie."]);
                            }
                    }
                } else {
                    return $this->render("client/verification-mail-sent.html.twig", [
                        "noverify" => "Le code de vérification renseigné est invalide."
                    ]);
                }
        }
    }


    public function sendVerificationCodeTo($user, $title = "Vérification de compte", $templace = "emails/confirm-email.html.twig", $context = null,)
    {
        $context = $context ?? VerifiationCodes::ACTIVATE_ACCOUNT->name;
        $dCode = random_int(111111, 999999);
        $code = (!empty($user["user_verification_code"]) && (new DateTime() > new DateTime($user["user_verification_expiresAt"]))) || empty($user["user_verification_code"]) ? $context . ':' . $dCode : $user["user_verification_code"];
        $currentCode = explode(":", $code)[1];
        Mailer::sendMailWithTemplace($templace, $title,  $user["user_email"], [
            "code" => $code,
            "email" => $user["user_email"],
            "expiry" => "30 minutes",
            "link" => DOMAINE . "/auth/verify/$currentCode/" . urlencode(base64_encode($user["user_email"])) . "/" . $user["user_id"]
        ]);

        $expiresAt = addMinuteToTime(30)->format('Y-m-d H:i:s');
        DB::pdo()->exec("
            UPDATE user SET  user_verification_code = '$code', user_verification_expiresAt ='$expiresAt' WHERE user_id = '" . $user["user_id"] . "'
        ");
    }


    function validate(&$errors)
    {
        $emailV = new FormFieldValidator("email", $_POST["email"]);
        $emailV->validateEmail($errors, "Email non valide");

        $passwordV = new FormFieldValidator("password", $_POST["password"] ?? null);
        $passwordV->validatePassword($errors);

        $fullnameV = new FormFieldValidator("fullname", $_POST["fullname"] ?? null);
        $fullnameV
            ->validateEmpty($errors, "Le nom ne peut etre vide")
            ->validateStringMin(3, $errors, "Le nom doit contenir au moins 3 caractère");

            $csfr_tokenV = new FormFieldValidator("form", $_POST["csrf_token"] ?? null);
        $csfr_tokenV->validateEquals(session()->getState()->getCsrfToken(),$errors,  "Formulaire invalide, veuillez rafraichir la page");
    }


    private  function verifyCredentials($redentials, &$errors, &$user)
    {
        $validator = new FormFieldValidator("email", $redentials["email"] ?? null);
        $validator->validateEmail($errors, "L'email n'est pas valide.");
        $password = new FormFieldValidator("password", $redentials["password"] ?? null);
        $password->validateEmpty($errors, "Le mot de passe ne peut etre vide.");
        $csfr = new FormFieldValidator("csrf_token", $redentials["csrf_token"] ?? null);
        $csfr->validateEquals(session()->getState()->getCsrfToken(), $errors, "Id de Formulaire invalide");
        if (\count($errors)) {
            return false;
        }
        $user = UserModel::findUserByEmail($redentials["email"]);
        if (empty($user)) {
            $errors["form"] = [t("Email ou mot de passe invalide")];
            return false;
        } else if (!password_verify($redentials['password'], $user["user_password"])) {
            $errors["password"] = $errors["password"] ?? [];
            $errors["password"][] = t("Mot de passe invalide");
            return false;
        }
        return $user;
    }

    #[GET("/disconnect")]
    function disconnect()
    {
        session()->getState()->clear();
        Router::redirect("/login");
    }
}
