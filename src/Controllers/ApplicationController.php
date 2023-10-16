<?php

namespace App\Controllers;

use App\Models\AdmissionGroup;
use App\Models\ApplicationModel;
use App\Models\InvoiceModel;
use App\Models\JobApplicationModel;
use App\Models\JobModel;
use App\Validators\FormFieldValidator;
use Core\Auth;
use Core\Controller;
use Core\DB;
use Core\Param;
use Core\POST;
use Core\Response;
use Core\Route;

#[Route("/submissions")]
class ApplicationController extends Controller
{
    #[Auth(onErrorTo: "/login")]
    #[POST("/student/{admissionGroupId}/{step}")]
    function studentApplications(
        #[Param()] string $admissionGroupId,
        #[Param()] string $step
    ) {
        $data = $_POST;
        if (!empty($admissionGroupId) && !empty($step) && is_numeric($step) && in_array($step, [1, 2, 3, 4, 5, 6, 7, 8, 9])) {
            $countries = getCountries();
            switch ($step) {
                    //Create new application
                case "1": {
                        $errors = [];
                        $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
                        $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "Token de formulaire invalide");

                        $validator = new FormFieldValidator("acceptConditions", intval(boolval($data["acceptConditions"] ?? false)));
                        $validator->validateEquals(1, $errors, "Vous devez accepter les conditions pour continuer.");
                        if (empty($errors)) {
                            $admission = AdmissionGroup::get($admissionGroupId);
                            if (!empty($admission)) {
                                $user = session()->getState()->getUser();
                                $invoice = empty($data["application_id"]) ?  InvoiceModel::create([
                                    "invoice_amount"=>intval($admission["admission_fees"])
                                ]) : null;
                                $application =!empty($data["application_id"]) ? ApplicationModel::get($data["application_id"]) : ApplicationModel::create([
                                    "application_user_id" => $user["user_id"],
                                    "application_group_id" => $admissionGroupId,
                                    "application_code" => strtoupper(uniqid()),
                                    "application_step" => 2,
                                    "application_invoice_id"=>$invoice["invoice_id"],
                                    "application_accept_conditions" => intval(boolval($data["acceptConditions"] ?? false))
                                ]);

                                return [
                                    "data" => $application,
                                    "form" => [
                                        "success" => "Application créé."
                                    ]
                                ];
                            } else {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "" => t("Groupe d'admission inexistant")
                                    ],
                                    "resume" => $this->getApplicationResumeTemplate($data["application_id"])
                                ];
                            }
                        } else {
                            Response::setHttpResponseCode(400);
                            return $errors;
                        }

                        break;
                    }
                case "2": {
                        $errors = [];

                        $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
                        $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "Token de formulaire invalide");

                        $validator = new FormFieldValidator("form", $data["application_id"] ?? null);
                        $validator->validateEmpty($errors, "Id candidature ne peut etre vide");

                        $validator = new FormFieldValidator("application-contact-lastname", $data["application-contact-lastname"] ?? null);
                        $validator->validateName($errors, "Nom de famille invalide")
                            ->validateStringMax(255, $errors, "Ce champ ne peut pas dépasser 255 caractères");

                        $validator = new FormFieldValidator("application-contact-firstname", $data["application-contact-firstname"] ?? null);
                        $validator->validateName($errors, "Prénom invalide")
                            ->validateStringMax(255, $errors, "Ce champ ne peut pas dépasser 255 caractères");

                        $validator = new FormFieldValidator("application-contact-orthername", $data["application-contact-orthername"] ?? null);
                        $validator->validateName($errors, "Noms invalides")
                            ->validateStringMax(255, $errors, "Ce champ ne peut pas dépasser 255 caractères");

                        if (\DateTime::createFromFormat('Y-m-d', $data["application-contact-bithday"] ?? null) == false) {
                            $errors["application-contact-bithday"] = ["invalid_date" => "Date invalide"];
                        }
                        $validator = new FormFieldValidator("application-contact-bithlocation", $data["application-contact-bithlocation"] ?? null);
                        $validator->validateEmpty($errors, "Lieu de naissance ne peut etre vide.")
                            ->validateStringMax(255, $errors, "Ce champ ne peut pas dépasser 255 caractères");

                        $validator = new FormFieldValidator("application-contact-sexe", $data["application-contact-sexe"] ?? null);
                        $validator->validateRegex("/^(M|F)$/", $errors, "Sexe invalide. Les valeurs possibles sont Masculin ou Féminin")
                            ->validateStringMax(1, $errors, "Ce champ ne peut pas dépasser 1 caractères");

                        $validator = new FormFieldValidator("application-contact-email", $data["application-contact-email"] ?? null);
                        $validator->validateEmail($errors, "Email invalide")
                            ->validateStringMax(100, $errors, "L'email ne peut pas dépasser 100 caractères");

                        $validator = new FormFieldValidator("application-contact-phone", $data["application-contact-phone"] ?? null);
                        $validator->validateEmpty($errors, "Numéro de téléphone ne peut etre vide")
                            ->validateStringMax(100, $errors, "L'email ne peut pas dépasser 100 caractères");

                        $validator = new FormFieldValidator("application-contact-baselanguage", $data["application-contact-baselanguage"] ?? null);
                        $validator->validateEmpty($errors, t("La langue couramment parlée ne peut pas etre vide"))
                            ->validateStringMax(10, $errors, "L'email ne peut pas dépasser 10 caractères");


                        if (empty($errors)) {
                            try {
                                $result = ApplicationModel::update([
                                    "application_id" => htmlspecialchars($data["application_id"]),
                                    "application_lastname" => htmlspecialchars($data["application-contact-lastname"]),
                                    "application_firstname" => htmlspecialchars($data["application-contact-firstname"]),
                                    "application_other_names" => htmlspecialchars($data["application-contact-orthername"]),
                                    "application_birthday" => htmlspecialchars($data["application-contact-bithday"]),
                                    "application_bith_location" => htmlspecialchars($data["application-contact-bithlocation"]),
                                    "application_sex" => htmlspecialchars($data["application-contact-sexe"]),
                                    "application_email" => htmlspecialchars($data["application-contact-email"]),
                                    "application_phone" => htmlspecialchars($data["application-contact-phone"]),
                                    "application_main_language" => htmlspecialchars($data["application-contact-baselanguage"]),
                                    "application_step" => 3
                                ]);
                                return [
                                    "data" => $result,
                                    "resume" => $this->getApplicationResumeTemplate($data["application_id"])
                                ];
                            } catch (\PDO $e) {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "error" => t("Erreur d'enrégistrement des modifications veuillez rééssayer")
                                    ]
                                ];
                            }
                        } else {
                            Response::setHttpResponseCode(400);
                            return $errors;
                        }

                        break;
                    }
                case "3": {
                        $errors = [];

                        $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
                        $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "Token de formulaire invalide");

                        $validator = new FormFieldValidator("form", $data["application_id"] ?? null);
                        $validator->validateEmpty($errors, "Id candidature ne peut etre vide");

                        $validator = new FormFieldValidator("application-father-fullname", $data["application-father-fullname"] ?? null);
                        $validator->validateEmpty($errors, t("Le nom du père ne peut pas etre vide"))
                            ->validateStringMax(255, $errors, "Ce champ peut pas dépasser 255 caractères");

                        $validator = new FormFieldValidator("application-father-phone", $data["application-father-phone"] ?? null);
                        $validator->validateEmpty($errors, t("Le numéro du père ne peut pas etre vide"))
                            ->validateStringMax(255, $errors, "Ce champ peut pas dépasser 255 caractères");

                        $validator = new FormFieldValidator("application-father-profession", $data["application-father-profession"] ?? null);
                        $validator->validateEmpty($errors, t("Le job du père ne peut pas etre vide"))
                            ->validateStringMax(255, $errors, "Ce champ peut pas dépasser 255 caractères");

                        $validator = new FormFieldValidator("application-mother-fullname", $data["application-mother-fullname"] ?? null);
                        $validator->validateEmpty($errors, t("Le nom de la mère ne peut pas etre vide"))
                            ->validateStringMax(255, $errors, "Ce champ peut pas dépasser 255 caractères");

                        $validator = new FormFieldValidator("application-mother-phone", $data["application-mother-phone"] ?? null);
                        $validator->validateEmpty($errors, t("Le numéro de la mère ne peut pas etre vide"))
                            ->validateStringMax(255, $errors, "Ce champ peut pas dépasser 255 caractères");

                        $validator = new FormFieldValidator("application-mother-profession", $data["application-mother-profession"] ?? null);
                        $validator->validateEmpty($errors, t("Le job de la mère ne peut pas etre vide"))
                            ->validateStringMax(255, $errors, "Ce champ peut pas dépasser 255 caractères");

                        if (empty($errors)) {
                            try {
                                $result = ApplicationModel::update([
                                    "application_id" => $data["application_id"],
                                    "application_father_fullname" => htmlspecialchars($data["application-father-fullname"]),
                                    "application_father_phone" => htmlspecialchars($data["application-father-phone"]),
                                    "application_father_job_title" => htmlspecialchars($data["application-father-profession"]),
                                    "application_mother_fullname" => htmlspecialchars($data["application-mother-fullname"]),
                                    "application_mother_phone" => htmlspecialchars($data["application-mother-phone"]),
                                    "application_mother_job_title" => htmlspecialchars($data["application-mother-profession"]),
                                    "application_step" => 4
                                ]);
                                return [
                                    "data" => $result,
                                    "resume" => $this->getApplicationResumeTemplate($data["application_id"])
                                ];
                            } catch (\PDO $e) {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "error" => t("Erreur d'enrégistrement des modifications veuillez rééssayer")
                                    ]
                                ];
                            }
                        } else {
                            Response::setHttpResponseCode(400);
                            return $errors;
                        }

                        break;
                    }
                case "4": {
                        $errors = [];
                        $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
                        $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "Token de formulaire invalide");

                        $validator = new FormFieldValidator("form", $data["application_id"] ?? null);
                        $validator->validateEmpty($errors, "Id candidature ne peut etre vide");

                        $validator = new FormFieldValidator("application-contact-country", $data["application-contact-country"] ?? null);
                        $validator->validateEmpty($errors, t("Le pays ne peut pas etre vide"))
                            ->validateStringMinMax(2, 2, $errors, "Ce champ peut contenir que 2 caractères");

                        if (!in_array($data["application-contact-country"] ?? "", array_keys($countries))) {
                            $errors["application-contact-country"] = [
                                "Pays non valide"
                            ];
                        }

                        $validator = new FormFieldValidator("application-contact-town", $data["application-contact-town"] ?? null);
                        $validator->validateEmpty($errors, t("La ville ne peut pas etre vide"))
                            ->validateStringMax(255, $errors, "Ce champ peut contenir que 255 caractères");

                        $validator = new FormFieldValidator("application-contact-postalcode", $data["application-contact-postalcode"] ?? null);
                        $validator->validateEmpty($errors, t("Le code postal ne peut etre vide"))
                            ->validateStringMax(255, $errors, "Ce champ peut contenir que 255 caractères");

                        if (empty($errors)) {
                            try {
                                $result = ApplicationModel::update([
                                    "application_id" => htmlspecialchars($data["application_id"]),
                                    "application_country" => htmlspecialchars($data["application-contact-country"]),
                                    "application_town" => htmlspecialchars($data["application-contact-town"]),
                                    "application_postal_code" => htmlspecialchars($data["application-contact-postalcode"]),
                                    "application_step" => 5
                                ]);
                                return [
                                    "data" => $result,
                                    "resume" => $this->getApplicationResumeTemplate($data["application_id"])
                                ];
                            } catch (\PDO $e) {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "error" => t("Erreur d'enrégistrement des modifications veuillez rééssayer")
                                    ]
                                ];
                            }
                        } else {
                            Response::setHttpResponseCode(400);
                            return $errors;
                        }

                        break;
                    }
                case "5":
                case "6": {
                        $type = $step == 5 ? "question" : "rule";
                        $datas = [];
                        $errors = [];
                        $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
                        $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "Token de formulaire invalide");

                        $validator = new FormFieldValidator("form", $data["application_id"] ?? null);
                        $validator->validateEmpty($errors, "Id candidature ne peut etre vide");

                        foreach ($data as $k => $d) {
                            if (strpos($k, "application-question-") !== false) {
                                $validator = new FormFieldValidator($k, $d ?? null);
                                $validator->validateEmpty($errors, t("Ce champ ne peut pas etre vide"))
                                    ->validateStringMax(1000, $errors, "Ce champ peut contenir que 1000 caractères");
                                if (empty($errors)) {
                                    $metaId = str_replace("application-question-", "", "application-question-" . $k);
                                    $meta = ApplicationModel::getMeta($metaId);
                                    if (!empty($meta)) {
                                        $datas[$meta["admission_group_meta_id"]] = [
                                            $type => $meta,
                                            "candidate_response" => $d,
                                        ];
                                    }
                                }
                            }
                        }
                        if (empty($errors)) {
                            $title = $step == 5 ? "application_questions" : "application_rules";
                            try {
                                $application = ApplicationModel::update([
                                    "application_id" => $data["application_id"],
                                    "application_step" => intval($step) + 1,
                                    $title => json_encode($datas)
                                ]);
                                return [
                                    "data" => $application,
                                    "resume" => $this->getApplicationResumeTemplate($data["application_id"])
                                ];
                            } catch (\PDO $e) {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "error" => t("Erreur d'enrégistrement des modifications veuillez rééssayer")
                                    ]
                                ];
                            }
                        } else {
                            Response::setHttpResponseCode(400);
                            return $errors;
                        }
                        break;
                    }
                case "7": {
                        $errors = [];
                        $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
                        $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "Token de formulaire invalide");

                        $validator = new FormFieldValidator("form", $data["application_id"] ?? null);
                        $validator->validateEmpty($errors, "Id candidature ne peut etre vide");

                        $validator = new FormFieldValidator("additional-note", $data["additional-note"] ?? "");
                        $validator->validateStringMinMax(2, 1000, $errors, "Ce champ doit contenir au minimum 2 caractères et au maximum 1000");

                        if (empty($errors)) {
                            try {
                                ApplicationModel::update([
                                    "application_id" => $data["application_id"],
                                    "application_note" => $data["additional-note"],
                                    "application_step" => intval($step) + 1,
                                ]);
                                return [
                                    "data" => ApplicationModel::get($data["application_id"]),
                                    "resume" => $this->getApplicationResumeTemplate($data["application_id"])
                                ];
                            } catch (\PDO $e) {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "error" => t("Erreur d'enrégistrement des modifications veuillez rééssayer")
                                    ]
                                ];
                            }
                        } else {
                            Response::setHttpResponseCode(400);
                            return $errors;
                        }
                        break;
                    }
                case "8": {
                        $errors = [];
                        $application =ApplicationModel::get($data["application_id"]);
                        $invoiceId = $application["application_invoice_id"];
                        $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
                        $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "Token de formulaire invalide");

                        $validator = new FormFieldValidator("form", $data["application_id"] ?? null);
                        $validator->validateEmpty($errors, "Id candidature ne peut etre vide");

                        if (empty($errors)) {
                            try {
                                $application = ApplicationModel::update([
                                    "application_id" => $data["application_id"],
                                    "application_step" => intval($step) + 1,
                                    "application_is_valid" => intval(boolval($data["application_is_valid"] ?? false))
                                ]);
                                return [
                                    "data" => $application,
                                    "invoice_url"=>"/payments/".$invoiceId."/resume"
                                ];
                            } catch (\PDO $e) {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "error" => t("Erreur d'enrégistrement des modifications veuillez rééssayer")
                                    ]
                                ];
                            }
                        } else {
                            Response::setHttpResponseCode(400);
                            return $errors;
                        }

                        break;
                    }
            }
        }
        Response::setHttpResponseCode(400);
        return [
            "form" => [
                "empty" => "Formulaire non valide"
            ]
        ];
    }

    #[Auth(onErrorTo: "/login")]
    #[Route("/job/{jobId?}", ["GET", "POST"])]
    function jobApplication(
        #[Param()] $jobId
    ) {
        $countries=getCountries();
        $job = empty($jobId) ?  null : JobModel::get($jobId);
        $step = isset($_GET["step"]) && is_numeric($_GET["step"]) ? $_GET["step"] : 1;
        $data = $_POST;
        $application = !empty($_GET["application_id"]) || !empty($_POST["application_id"]) ? JobApplicationModel::get(empty($_GET["application_id"]) ? $_POST["application_id"] : $_GET["application_id"]) :  null;
        $user=session()->getState()->getUser();
        $errors = [];
        if (!empty($data)) {
            switch ($step) {
                case "1": {

                        $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
                        $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "Token de formulaire invalide");


                        $validator = new FormFieldValidator("application-lastname", $data["application-lastname"] ?? null);
                        $validator->validateName($errors, "Nom de famille invalide")
                            ->validateStringMax(255, $errors, "Ce champ ne peut pas dépasser 255 caractères");
                        
                            $validator = new FormFieldValidator("application-firstname", $data["application-firstname"] ?? null);
                        $validator->validateName($errors, "Prénom(s) invalide(s)")
                            ->validateStringMax(255, $errors, "Ce champ ne peut pas dépasser 255 caractères");

                        if (\DateTime::createFromFormat('Y-m-d', $data["application-bithday"] ?? null) == false) {
                            $errors["application-bithday"] = ["invalid_date" => "Date invalide"];
                        }

                        $validator = new FormFieldValidator("application-nationality", $data["application-nationality"] ?? null);
                        $validator->validateEmpty($errors, "Votre pays d'origine ne peut etre vide.")
                            ->validateStringMax(255, $errors, "Ce champ ne peut pas dépasser 255 caractères");
                        if(empty($countries[$data["application-nationality"]])){
                            $errors["application-nationality"]=[
                                ...($errors["application-nationality"] ??[]),
                                "invalid"=>"Pays invalide"
                            ];
                        }

                        $validator = new FormFieldValidator("application-jobcountry", $data["application-jobcountry"] ?? null);
                        $validator->validateEmpty($errors, "Le pays du job ne peut etre vide.")
                            ->validateStringMax(255, $errors, "Ce champ ne peut pas dépasser 255 caractères");
                        if(empty($countries[$data["application-jobcountry"]])){
                            $errors["application-jobcountry"]=[
                                ...($errors["application-jobcountry"] ??[]),
                                "invalid"=>"Pays invalide"
                            ];
                        }

                        $validator = new FormFieldValidator("application-sexe", $data["application-sexe"] ?? null);
                        $validator->validateRegex("/^(M|F)$/", $errors, "Sexe invalide. Les valeurs possibles sont Masculin ou Féminin")
                            ->validateStringMax(1, $errors, "Ce champ ne peut pas dépasser 1 caractères");

                        $validator = new FormFieldValidator("application-email", $data["application-email"] ?? null);
                        $validator->validateEmail($errors, "Email invalide")
                            ->validateStringMax(100, $errors, "L'email ne peut pas dépasser 100 caractères");

                        $validator = new FormFieldValidator("application-phone", $data["application-phone"] ?? null);
                        $validator->validateEmpty($errors, "Numéro de téléphone ne peut etre vide")
                            ->validateStringMax(100, $errors, "Numéro de téléphone ne peut pas dépasser 100 caractères");

                        $validator = new FormFieldValidator("application-country", $data["application-country"] ?? null);
                        $validator->validateEmpty($errors, t("Votre pays de résidence ne peut pas etre vide"))
                            ->validateStringMax(10, $errors, "Votre pays de résidence peut pas dépasser 10 caractères");



                        if (empty($errors)) {
                            $applicationId = !empty($data["application_id"]) && $data["application_id"] !="null" && ($application=ApplicationModel::get($data["application_id"])) ?$data["application_id"] : null;
                            
                            try {
                                $invoice = InvoiceModel::create([
                                    "invoice_amount"=>intval($job["job_application_fees"])
                                ]);

                                $applicationData = [
                                    "job_application_firstname" => htmlspecialchars($data["application-firstname"]),
                                    "job_application_lastname" => htmlspecialchars($data["application-lastname"]),
                                    "job_application_jobcountry" => htmlspecialchars($data["application-jobcountry"]),
                                    "job_application_fullname" => htmlspecialchars($data["application-lastname"])." " .htmlspecialchars($data["application-firstname"]),
                                    "job_application_nationality" => htmlspecialchars($data["application-nationality"]),
                                    "job_application_country" => htmlspecialchars($data["application-country"]),
                                    "job_application_bithday" => htmlspecialchars($data["application-bithday"]),
                                    "job_application_sex" => htmlspecialchars($data["application-sexe"]),
                                    "job_application_email" => htmlspecialchars($data["application-email"]),
                                    "job_application_phone" => htmlspecialchars($data["application-phone"]),
                                    "job_application_adress" => htmlspecialchars($data["application-adress"]),
                                    "job_application_job_id"=>$jobId,
                                    "job_application_user_id"=>$user["user_id"],
                                    "job_application_step" => 2,
                                    "job_application_invoice_id"=>$invoice["invoice_id"]
                                ];
                                $result = empty($applicationId) ? JobApplicationModel::create($applicationData) : JobApplicationModel::update([
                                    "job_application_id" => $applicationId,
                                    ...$applicationData
                                ]);
                                return [
                                    "data" => [
                                        ...$result,
                                        "application_id"=>$result["job_application_id"]
                                    ],
                                    "resume" => $this->getJobApplicationResumeTemplate($data["application_id"])
                                ];
                            } catch (\PDO $e) {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "error" => t("Erreur d'enrégistrement des modifications veuillez rééssayer")
                                    ]
                                ];
                            }
                        } else {
                            Response::setHttpResponseCode(400);
                            return $errors;
                        }
                        break;
                    }
                case '2': {
                        if (!empty($job)) {
                            $docs = json_decode($job['job_required_documents']);

                            if (empty($application)) {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "idNotDefined" => "Le code du dossier n'est pas défini"
                                    ]
                                ];
                            }

                            $created_files = empty($application["job_application_required_documents"])?[]: json_decode($application["job_application_required_documents"], true);

                            $files = [];
                            $validators = [];

                            foreach ($docs as $k=>$doc) {
                                $d=$k;
                                if (isset($_FILES[$d])) {
                                    $validators[$k] = new FormFieldValidator($d, null);
                                    $validators[$k]->validateUploadedFile($errors, $created_files[$k] ?? "", ["application/pdf"]);
                                    if (!empty($errors)) {
                                        $validators[$k]->clearTmpFile();
                                        $formattedErrors=[];
                                        foreach($errors as $key=>$error){
                                            $formattedErrors[str_replace("_", " ", $key)]=$error;
                                        }
                                        Response::setHttpResponseCode(400);
                                        return $formattedErrors;
                                    }
                                } else {
                                    if (empty($created_files[$k]) || !file_exists(BASE_PUBLIC_DIR . $created_files[$k])) {
                                        $errors[$k] = [
                                            "notDefined" => "Le fichier n'est pas défini"
                                        ];
                                    }
                                }
                            }
                            if (empty($errors)) {
                                foreach ($docs as $k=>$doc) {
                                    $hasFileBeenAlreadyUploaded = !empty($created_files[$k]) && file_exists(BASE_PUBLIC_DIR . $created_files[$k]);
                                    if (isset($validators[$k])) {
                                        $files[$k] = $validators[$k]->upload()->getUploadedFilePath();
                                        if ($hasFileBeenAlreadyUploaded) {
                                            unlink(BASE_PUBLIC_DIR . $created_files[$k]);
                                        }
                                    } else {

                                        if ($hasFileBeenAlreadyUploaded) {
                                            $files[$k] = $created_files[$k];
                                        } else {
                                            Response::setHttpResponseCode(400);
                                            return [
                                                $k => [
                                                    "notExist" => t("Fichier inexistant")
                                                ]
                                            ];
                                        }
                                    }
                                }

                                return [
                                    "data" => JobApplicationModel::update([
                                        "job_application_id" => $data["application_id"],
                                        "job_application_required_documents" => json_encode($files),
                                        "job_application_step"=>3
                                    ]),
                                    "resume"=>$this->getJobApplicationResumeTemplate($data["application_id"]),
                                ];
                            } else {
                                Response::setHttpResponseCode(400);
                                return $errors;
                            }
                        }
                    }
                    case '3':{
                        if (!empty($job)) {
                            $docs = json_decode($job['job_required_documents']);
                            $application = !empty($data["application_id"]) ? JobApplicationModel::get($data["application_id"]) : null;
        
                            if (empty($application)) {
                                Response::setHttpResponseCode(400);
                                return [
                                    "form" => [
                                        "idNotDefined" => "Le code du dossier n'est pas défini"
                                    ]
                                ];
                            }

                            return [
                                "data" => JobApplicationModel::update([
                                    "job_application_id" => $data["application_id"],
                                    "job_application_step"=>4
                                ]),
                                "invoice_url"=>"/payments/".$application["job_application_invoice_id"]."/resume",
                                "resume"=>$this->getJobApplicationResumeTemplate($data["application_id"]),
                            ];
                        }
                    }
            }
            
        }
        return  $this->render("/client/application-job-form.html.twig", [
            "job" => $job,
            "data"=>$application,
            "resume"=>isset($application) ?$this->getJobApplicationResumeTemplate($application["job_application_id"]) : null,
            "countries" => getCountries()
        ]);
    }

    function getJobApplicationResumeTemplate($id)
    {
        $application = JobApplicationModel::get($id);
        
        global $twig;

        return $twig->render("client/job-application-resume.html.twig", [
            "data" => $application,
            "countries"=>getCountries()

        ]);
    }

    function getApplicationResumeTemplate($id)
    {
        $application = ApplicationModel::getFull($id);

        global $twig;
        
        return $twig->render("client/student-application-resume.html.twig", [
            "data" => $application,

        ]);
    }
}
