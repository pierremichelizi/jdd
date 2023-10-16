<?php

namespace App\Controllers;

use App\Models\ApplicationModel;
use App\Models\JobApplicationModel;
use App\Models\ProgramModel;
use App\Models\UserModel;
use App\Validators\FormFieldValidator;
use Core\Auth;
use Core\Controller;
use Core\GET;
use Core\POST;
use Core\Response;
use Core\Route;

#[Route("user")]
class UserController extends Controller
{

    #[GET("/submissions")]
    #[Auth(onErrorTo: "/login")]
    public function admissions()
    {
        $user=session()->getState()->getUser();
        $admissions = ApplicationModel::getAllFor($user["user_id"]);
        $jobs=JobApplicationModel::getForUser($user["user_id"]);
        return $this->render("client/account-admission.html.twig", ["data"=>$admissions, "user"=>$user, "jobs"=>$jobs]);
    }

    #[Auth(onErrorTo: "/login")]
    #[GET("/notifications")]
    public function notifications()
    {
        return $this->render("client/account-notifications.html.twig", ["user"=>session()->getState()->getUser()]);
    }

    #[Auth(onErrorTo: "/login")]
    #[GET("/profile")]
    public function account()
    {
        return $this->render("client/account-profile.html.twig", [
            "user"=>session()->getState()->getUser()
        ]);
    }

    #[Auth(onErrorTo: "/login")]
    #[POST("/profile")]
    public function updatedProfile()
    {
        $user = session()->getState()->getUser();
        $data = $_POST;
        $errors = [];
        
        $fullname = new FormFieldValidator("fullname", $data["fullname"] ?? null);
        $fullname->validateRegex("/^[a-z\'\_\-\,0-9a-zàâçéèêëîïôûùüÿñæœ\s\.]{3,255}$/i",  $errors, "Le nom ne peut contenir que des caractère alphanumériques");

        $csrf = new FormFieldValidator("csrf_token", $data["csrf_token"] ?? null);
        $csrf->validateEquals(session()->getState()->getCsrfToken(),  $errors, "ID formulaire invalide");

        $email = new FormFieldValidator("email", $data["email"] ?? null);
        $email->validateEmail($errors, "Email invalide");

        if (!empty($_FILES["user_image_url"]["name"])) {
            $file = new FormFieldValidator("user_image_url", null);
            $file->validateUploadedFile($errors);
        }

        if (\count($errors)) {
            if (!empty($file)) $file->clearTmpFile();
            Response::setHttpResponseCode(400);
            return $errors;
        } else {
            $data = UserModel::update([
                "user_id"=>$user["user_id"] ,
                "user_fullname" => $data["fullname"],
                "user_email_toValidate" => $user["user_email"] !== $data["email"] ? $data["user_email"] :  null,
                "user_imgUrl" => !empty($file)  ? $file->upload()->getUploadedFilePath() : $user["user_imgUrl"]
            ]);
            session()->getState()->setUser([
                ...$user,
                ...$data
            ]);
            if(!empty($user["user_imgUrl"]) && $user["user_imgUrl"]!==$data["user_imgUrl"]){
                unlink(BASE_PUBLIC_DIR.$user["user_imgUrl"]);
            }

            return [
                "success" => t("Profile mise à jour ")
            ];
        }
    }

    #[Auth(onErrorTo: "/login")]
    #[POST("/profile/pwd")]
    public function updatedPassword()
    {
        $user = session()->getState()->getUser();
        $data = $_POST;
        $errors = [];

        if(empty($data["password"]) || empty($data["oldpassword"]) || empty($data["newpassword"])){
            return [
                "form"=>[
                    "incomplet"=>t("Veuillez remplir tous les champs du formulaire")
                ]
            ];
        }


        $csrf = new FormFieldValidator("form", $data["csrf_token"] ?? null);
        $csrf->validateEquals(session()->getState()->getCsrfToken(),  $errors, "ID de formulaire non valide");

        if(\count($errors)) {
            Response::setHttpResponseCode(400);
            return $errors;
        }

        if (password_verify($data["oldpassword"], $user["user_password"])) {

            if($data["password"] === $data["newpassword"]){
                $v = new FormFieldValidator("password", $data["password"]);
                $errors=[];
                $v->validatePassword( $errors);
                if(\count($errors)){
                    Response::setHttpResponseCode(400);
                    return $errors;
                }else{
                    UserModel::update([
                        "user_id"=>$user["user_id"],
                        "user_password"=>password_hash($data["password"], PASSWORD_DEFAULT)
                    ]);
                    return [
                        "message"=>"Mot de passe mise à jour"
                    ];
                }
                
            }else{
                Response::setHttpResponseCode(400);
                return [
                    "password" => [
                        "nonconcordant"=>t("Mot de passe non concordant")
                    ],
                    "newpassword" => [
                        "nonconcordant"=>t("Mot de passe non concordant")
                    ]
                ];
            }

            
        } else {
            Response::setHttpResponseCode(400);
            return [
                "oldpassword" => [
                    "invalide"=>t("Mot de passe invalide")
                ]
            ];
        }
    }
}
