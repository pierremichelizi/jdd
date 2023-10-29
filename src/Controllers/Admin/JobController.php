<?php

namespace App\Controllers\Admin;

use App\Controllers\ApplicationController;
use App\Models\JobModel;
use App\Models\SectorModel;
use App\Validators\FormFieldValidator;
use Core\Auth;
use Core\Controller;
use Core\Inject;
use Core\Param;
use Core\Response;
use Core\Route;

#[Route("/admin/jobs")]
#[Auth(roles: ["ADMIN"], onErrorTo: "/auth/admin/login")]
class JobController extends Controller
{

    #[Route("/applications")]
    function candidatures(){
        $canditatures = JobModel::getAll("left join job_application on job_application.job_application_job_id = job.job_id left join user on user.user_id=job_application.job_application_user_id where job_application_job_id is not null ");

        return $this->render("admin/dashboard/jobs/candidature/listing.html.twig", [
            "data"=>$canditatures
        ]);
    }

    #[Route("/applications/{id}")]
    function candidature(#[Param()] $id, #[Inject(ApplicationController::class)] ApplicationController $applicationController){
        $canditatures = JobModel::getAll("left join job_application on job_application.job_application_job_id = job.job_id left join user on user.user_id=job_application.job_application_user_id left join invoice on job_application_invoice_id = invoice_id Where job_application.job_application_job_id is not null and  job_application_id = '$id'");
        if(!empty($canditatures)){
            return $this->render("admin/dashboard/jobs/candidature/application.html.twig", [
                "data"=>$canditatures[0],
                "resume"=>$applicationController->getJobApplicationResumeTemplate($id, true)
            ]);
        }
        echo "Id de dossier inexistant";
    }


    #[Route("/")]
    function programs()
    {
        $data = $_POST;
        $item_id = $_GET["item_id"] ?? null;
        $item = empty($item_id) ? null :  JobModel::get($item_id);
        $errors = [];
        if (!empty($data)) {

            $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
            $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, t("ID de formulaire invalide"));

            $validator = new FormFieldValidator("type", $data["type"] ?? null);
            $validator->validateEmpty($errors, t("Le type du job n'est pas défini"))
                ->validateRegex("/^(FULLTIME|(PARTIAL\-TIME))$/", $errors, "Le format du nom n'est pas valide");

            $validator = new FormFieldValidator("flexibility", $data["flexibility"] ?? null);
            $validator->validateEmpty($errors, t("Le type du job n'est pas défini"))
                ->validateRegex("/^(PRESENTIAL|(ONLINE\-PRESENTIAL)|ONLINE)$/", $errors, "L'option choisi n'est pas valide");
            
                $validator = new FormFieldValidator("title", $data["title"] ?? null);
            $validator->validateEmpty($errors, t("Le titre du poste n'est pas défini"))
                ->validateName($errors, "Le format du titre n'est pas valide");

            $validator = new FormFieldValidator("description", $data["description"] ?? null);
            $validator->validateEmpty($errors, t("La description du job ne peut pas etre vide"));

            $validator = new FormFieldValidator("required_competences", $data["required_competences"] ?? null);
            $validator->validateEmpty($errors, t("Les compétences requises ne sont pas définis"));

            $validator = new FormFieldValidator("required_documents", $data["required_documents"] ?? null);
            $validator->validateEmpty($errors, t("Les compétences requises ne sont pas définis"));

            $validator = new FormFieldValidator("application_fees", $data["application_fees"] ?? null);
            $validator->validateEmpty($errors, t("Les frais de dossier ne sont pas définis"))
                ->validateRegex("/^[0-9\.]+$/", $errors, "Ce champs ne peut contenir que des chiffres");

            $validator = new FormFieldValidator("sector_id", $data["sector_id"] ?? null);
            $validator->validateEmpty($errors, t("Le secteur  doit etre défini"));
            if (!empty($data["sector_id"]) && empty(SectorModel::getSector($data["sector_id"]))) {
                $errors["sector_id"] = [
                    "notExist" => t("Secteur invalide")
                ];
            }


            if (empty($errors)) {
                $program = [
                    "job_type" => ($data["type"]),
                    "job_title" => ($data["title"]),
                    "job_flexibility"=>($data["flexibility"]),
                    "job_description" => ($data["description"]),
                    "job_required_competences" => json_encode(explode(",",$data["required_competences"])),
                    "job_required_documents" => json_encode(explode(",",$data["required_documents"])),
                    "job_application_fees" => intval($data["application_fees"]),
                    "job_sector_id" => ($data["sector_id"]),
                ];
                $program = !empty($item) ? JobModel::update([
                    "job_id" => $item["job_id"],
                    ...$program
                ]) : JobModel::create($program);

                return $program;
            } else {
                Response::setHttpResponseCode(400);
                return $errors;
            }
        } else if (isset($_GET["action"]) && $_GET["action"] === "delete" && !empty($item)) {
            JobModel::delete($_GET["item_id"]);
        }
        return ($this->render("admin/dashboard/jobs/listing.html.twig", [
            "data" => JobModel::getAll()
        ])
        );
    }

    #[Route("/item/{item_id?}")]
    function item(
        #[Param()] string $item_id
    ) {
        $item = !empty($item_id) ? JobModel::get($item_id) : null;
    
        return $this->render("admin/dashboard/jobs/add.html.twig", [
            "data" => $item,
            "sector" => SectorModel::getAll()
        ]);
    }
}
