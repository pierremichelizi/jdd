<?php

namespace App\Controllers\Admin;

use App\Models\AdmissionGroup;
use App\Models\AdmissionGroupMeta;
use App\Models\ApplicationModel;
use App\Models\DiplomeModel;
use App\Models\InstitutionModel;
use App\Models\JobModel;
use App\Models\ProgramModel;
use App\Models\SectorModel;
use App\Validators\FormFieldValidator;
use Core\Auth;
use Core\Controller;
use Core\Param;
use Core\Response;
use Core\Route;
use Core\Router;

#[Route("admin/formations")]
#[Auth(roles:["ADMIN"], onErrorTo:"/auth/admin/login")]
class FormationController extends Controller
{

    #[Route("/applications")]
    function index(){
        $canditatures = ApplicationModel::getAll("LEFT JOIN user on user.user_id = application.application_user_id WHERE application_is_paid = 1");
        
        return $this->render("admin/dashboard/formations/candidature/listing.html.twig", [
            "data"=>$canditatures
        ]);
    }

    #[Route("/applications/{applicationId}")]
    function application(
        #[Param()] $applicationId
    ){
        
        $canditature = ApplicationModel::getAll("
        LEFT JOIN user on user.user_id = application.application_user_id          
        LEFT JOIN admission_group ON admission_group.admission_group_id = application.application_group_id         
        LEFT JOIN program ON program.program_id = admission_group.admission_group_program_id 
        left join invoice on application_invoice_id  =  invoice.invoice_id        
        WHERE application_is_paid = 1 and  application.application_id ='$applicationId'")[0];


        return $this->render("admin/dashboard/formations/candidature/application.html.twig", [
            "data"=>$canditature,
            "resume"=>$this->render("client/student-application-resume.html.twig", [
                "data"=>$canditature
            ])["__twig_template"]
        ]);
    }

    

    #[Route("/secteurs")]
    public function sectorList()
    {
        try {
            $sectors = SectorModel::getAll();
        } catch (\PDOException $e) {
        }
        return $this->render("/admin/dashboard/formations/sectors/listing.html.twig", [
            "sectors" => $sectors
        ]);
    }

    #[Route("/secteurs/item/{id?}", ["POST", "GET"])]
    public function createDomaine(
        #[Param("id")] string $id
    ) {
        $params = [];
        $data = $_POST;


        if (!empty($id)) {
            $sector = SectorModel::getSector($id);
            if (!empty($_GET["action"]) &&  $_GET["action"] === "delete") {
                SectorModel::deleteSector($id);
                return Router::redirect("/admin/formations/secteurs");
            }
        }

        if (!empty($data)) {
            $errors = [];

            //CSRF

            $csrfValidator = new FormFieldValidator("csrf_token", $data["csrf_token"]);
            $csrfValidator->validateEquals(
                session()->getState()->getCsrfToken(),
                $errors,
                "Le token du formulaire est invalide. ",
            );
            //Name
            $nameValidator = new FormFieldValidator("name", $data["name"]);
            $nameValidator->validateEmpty(
                $errors,
                "Le nom de l'institut du secteur ne peut pas etre vide"
            )
                ->validateStringMin(
                    3,
                    $errors,
                    "Le nom de l'institut du secteur doit contenir au moins [min] charactès"
                )
                ->validateStringMax(
                    100,
                    $errors,
                    "Le nom de l'institut du secteur ne peut dépasser [max] caractères"
                )
                ->validateRegex(
                    "/^[a-zA-z\s0-9\-]+$/",
                    $errors,
                    "Le nom de l'institut ne peut contenir que des caractères alphanumérics"
                );

            //Slug
            $slugValidator = new FormFieldValidator("slug", $data["slug"]);
            $slugValidator->validateEmpty(
                $errors,
                "Le slug du nom de l'institut, du secteur ne peut pas etre vide"
            )
                ->validateStringMin(
                    3,
                    $errors,
                    "Le slug du nom de l'institut, du secteur doit contenir au moins [min] caractères"
                )
                ->validateStringMax(
                    100,
                    $errors,
                    "Le slug du nom de l'institut, du secteur ne peut dépasser [max] charactès"
                )
                ->validateRegex(
                    "/^[a-zA-z\s0-9\-]+$/",
                    $errors,
                    "Le slug du nom de l'institut, ne peut contenir que des caractères alphanumérics"
                );

            //description
            $descriptionValidator = new FormFieldValidator("description", $data["description"]);
            $descriptionValidator
                ->ifExists($data["description"])
                ->validateRegex(
                    "/^[a-zA-z\s0-9\-\.]+$/",
                    $errors,
                    "Le description de l'institut ne peut contenir que des caractères alphanumérics"
                );
            //fileValidator
            if (empty($sector) || !empty($_FILES["iconFile"]["name"] ?? null)) {
                $fileValidator = new FormFieldValidator("iconFile", null);
                $fileValidator
                    ->validateUploadedFile(
                        $errors
                    );
            }

            if (\count($errors)) {
                if (!empty($fileValidator)) {
                    $fileValidator->clearTmpFile();
                } else {
                    $params["data"]["iconFile"] = $sector["sector_iconUrl"];
                    $params["data"]["id"] = $sector["sector_id"];
                }
                $params["data"] = [
                    ...$params["data"] ?? [],
                    ...$_POST

                ];
                $params["message"] = t("Erreur de validation");
                $params["errors"] = $errors;

                Response::setHttpResponseCode(400);
                return  $errors;

                //return $this->render("/admin/dashboard/formations/sectors/create.html.twig", $params);
            }

            $sectorData = [
                "sector_name" => ($data["name"]),
                "sector_slug" => ($data["slug"]),
                "sector_iconUrl" => !empty($fileValidator) ? $fileValidator->upload()->getUploadedFilePath()  : $sector["sector_iconUrl"],
                "sector_description" => ($data["description"] ?? null),
                //"sector_institutTypeId" => $data["institut_type"]
            ];
            if (!empty($sector)) {
                if (file_exists(BASE_PUBLIC_DIR . $sector["sector_iconUrl"]) && !empty($fileValidator)) unlink(BASE_PUBLIC_DIR . $sector["sector_iconUrl"]);
                $sectorData["sector_id"] = $id;
                $sectorData = SectorModel::updateSector($sectorData);
            } else {
                $sectorData = SectorModel::insertSector($sectorData);
            }
            return [
                "data" => $sectorData,
                "message" => !empty($sector) ? t("Secteur de formation mise à jour.") : t("Nouveau secteur ajouté avec succès")
            ];
        } else if (!empty($sector)) {
            $params["data"]["id"] = $sector["sector_id"];
            $params["data"]["name"] = $sector["sector_name"];
            $params["data"]["slug"] = $sector["sector_slug"];
            $params["data"]["description"] = $sector["sector_description"];
            $params["data"]["iconFile"] = $sector["sector_iconUrl"];
        }

        return $this->render("/admin/dashboard/formations/sectors/create.html.twig", $params);
    }


    #[Route("/diplomes")]
    public function diplomes()
    {
        $diplomas = DiplomeModel::getAll();
        $params = [
            "diplomas" => $diplomas
        ];
        $data = $_POST;
        $action = $_GET["action"] ?? null;
        $item_id = $_GET["item_id"] ?? null;
        $params["action"] =  $action ;
        $params["item_id"] =  $item_id;
        if (!empty($action) && !empty($item_id)) {
            if ($action === "edit") {
                $editDiploma = DiplomeModel::get($item_id);
                if ($editDiploma) {
                    $params["formdata"] = $editDiploma;
                } else {
                    session()->getState()->setFlash([
                        "error" => t("Diplome inexitante. L'édition du diplome demandé ne peut se faire.")
                    ]);
                }
            } else if ($action === "delete") {
                $editDiploma = DiplomeModel::delete($item_id);
                $params["diplomas"] = DiplomeModel::getAll();
                session()->getState()->setFlash([
                    "success" => t("Diplome supprimé.")
                ]);
            }
        }

        if (!empty($data)) {
            $errors = [];
            //Name
            $nameValidator = new FormFieldValidator("diploma_name", $data["diploma_name"] ?? null);
            $nameValidator
                ->validateEmpty($errors, "Le nom du diplome ne peut pas etre vide")
                ->validateRegex("/[a-zA-Z0-9\-\_\.\,\s\/\\\']/", $errors, "Le nom contient des caractères non autorisés. Seuls les caractères alphaniumériques et certains caractères spéciaux sont autorisés(, -, _, ., s, /, \\').");
            $codeValidator = new FormFieldValidator("diploma_code", $data["diploma_code"] ?? null);
            $codeValidator
                ->validateEmpty($errors, "Le code du diplome ne peut pas etre vide")
                ->validateRegex("/[a-zA-Z0-9\-\_\,\.\s\/\\\']/", $errors, "Le code contient des caractères non autorisés. Seuls les caractères alphaniumériques et certains caractères spéciaux sont autorisés(, -, _, ., s, /, \\').");
            //Description
            $nameValidator = new FormFieldValidator("diploma_description", $data["diploma_description"] ?? null);
            $nameValidator->ifExists($data["diploma_description"] ?? null)
                ->validateRegex("/^[a-zA-Z0-9\-\,\_\.\s\/\\\']+$/", $errors, "Le nom contient des caractères non autorisés. Seuls les caractères alphaniumériques et certains caractères spéciaux sont autorisés(, -, _, ., , /, \\').");

            if (empty($errors)) {
                $diploma = $action === "edit" ? DiplomeModel::update([
                    "diploma_id" => $item_id,
                    "diploma_name" => ($data["diploma_name"]),
                    "diploma_code" => ($data["diploma_code"]),
                    "diploma_description" => ($data["diploma_description"])
                ]) :  DiplomeModel::create([
                    "diploma_name" => $data["diploma_name"],
                    "diploma_code" => ($data["diploma_code"]),
                    "diploma_description" => ($data["diploma_description"])
                ]);
                session()->getState()->setFlash([
                    "success" => $action === "edit" ? t("Edition réussi !") : t("Nouveau diplome ajouté !")
                ]);
                $params["diplomas"] = DiplomeModel::getAll();
            } else {
                $params["errors"] = $errors;
            }
        }
        return $this->render("/admin/dashboard/formations/diplomes/index.html.twig", $params);
    }

    #[Route("/programs/items")]
    function programItems()
    {
        $sectors = SectorModel::getAll() ?? [];
        $diplomas = DiplomeModel::getAll() ?? [];
        $program = !empty($_GET["item_id"]) ? ProgramModel::get($_GET["item_id"]) : null;


        return ($this->render("admin/dashboard/programs/edit.html.twig", [
                "diplomas" => $diplomas,
                "sectors" => $sectors,
                "item_id" => $_GET["item_id"] ?? null,
                "data" => $program
            ])
        );
    }

    #[Route("/programs")]
    function programs()
    {
        $data = $_POST;
        $item_id = $_GET["item_id"] ?? null;
        $item = empty($item_id) ? null :  ProgramModel::get($item_id);
        $errors = [];
        if (!empty($data)) {

            $validator = new FormFieldValidator("form", $data["csrf_token"] ?? null);
            $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, t("ID de formulaire invalide"));

            $validator = new FormFieldValidator("program_name", $data["program_name"] ?? null);
            $validator->validateEmpty($errors, t("Le nom du programme n'est pas défini"))
                ->validateName($errors, "Le format du nom n'est pas valide");

            $validator = new FormFieldValidator("program_code", $data["program_code"] ?? null);
            $validator->validateEmpty($errors, t("Le code du programme n'est pas défini"))
                ->validateName($errors, "Le format du code n'est pas valide");

            $validator = new FormFieldValidator("conditions", $data["conditions"] ?? null);
            $validator->validateEmpty($errors, t("Les termes du programme ne sont pas défini"));

            $validator = new FormFieldValidator("description", $data["description"] ?? null);
            $validator->validateEmpty($errors, t("La description du programme n'est pas défini"));

            $validator = new FormFieldValidator("diploma", $data["diploma"] ?? null);
            $validator->validateEmpty($errors, t("Le diplome  doit etre défini"));
            if (!empty($data["diploma"]) && empty(DiplomeModel::get($data["diploma"]))) {
                $errors["diploma"] = [
                    "notExist" => t("Diplome invalide")
                ];
            }
            $validator = new FormFieldValidator("sector", $data["sector"] ?? null);
            $validator->validateEmpty($errors, t("Le secteur  doit etre défini"));
            if (!empty($data["sector"]) && empty(SectorModel::getSector($data["sector"]))) {
                $errors["sector"] = [
                    "notExist" => t("Secteur invalide")
                ];
            }

            $validator = new FormFieldValidator("icon", null);
            $validator->ifExists()-> validateUploadedFile($errors, $item["program_iconLogo"] ?? null);

            if (empty($errors)) {
                $filename = $validator->ifExists()->upload()->getUploadedFilePath();
                if (!empty($filename) && is_string($filename)) {
                    $validator->clearTmpFile();
                } else if (!empty($item)) {
                    $filename = $item["program_iconLogo"] ?? null;
                }else{
                    $filename = null;
                }
                $program = [

                    "program_code" => ($data["program_code"]),
                    "program_name" => ($data["program_name"]),
                    "program_goal_description" => ($data["description"]),
                    "program_admission_terms" =>$data["conditions"],
                    "program_sector_id" => ($data["sector"]),
                    "program_diploma_id" => ($data["diploma"]),
                    "program_iconLogo" => $filename
                ];
                $program = !empty($item) ? ProgramModel::update([
                    "program_id" => $item["program_id"],
                    ...$program
                ]) : ProgramModel::create($program);
                if (!empty($item) && $filename !== $item["program_iconLogo"] && !empty( $item["program_iconLogo"]) && file_exists(BASE_PUBLIC_DIR . $item["program_iconLogo"])) {
                    @unlink(BASE_PUBLIC_DIR . $item["program_iconLogo"]);
                }
                return $program;
            } else {
                Response::setHttpResponseCode(400);
                return $errors;
            }
        } else if (isset($_GET["action"]) && $_GET["action"] === "delete" && !empty($item)) {
            ProgramModel::delete($_GET["item_id"]);
        }
        $programs = ProgramModel::getAll();
        return ($this->render("admin/dashboard/programs/programs.html.twig", [
                "data" => $programs
            ])
        );
    }


    #[Route("/admission-groups")]
    function admissioGroups()
    {
        
        $data=$_POST;
        $item_id = $_GET["item_id"] ?? null;
        $action =$_GET["action"] ?? null;
        if(!empty($item_id)){
            $item=AdmissionGroup::get($item_id);
        }
        if(!empty($data)){

            $errors=[];
            $validator=new FormFieldValidator("form", $data["csrf_token"] ?? null);
            $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "ID de formulaire invalide");

            $validator=new FormFieldValidator("name", $data["name"] ?? null);
            $validator->validateName( $errors, "Nom du groupe est invalide");

            $validator=new FormFieldValidator("code", $data["code"] ?? null);
            $validator->validateName( $errors, "Code du groupe est invalide");

            $validator=new FormFieldValidator("max_places", $data["max_places"] ?? null);
            $validator->validateRegex("/^[0-9]+$/", $errors, "Champs invalide. Seulement les chiffres sont autorisés.");

            $validator=new FormFieldValidator("start_date", $data["start_date"] ?? null);
            $validator->validateEmpty ($errors, "La date  de début ne  peut pas etre vide");

            $validator=new FormFieldValidator("start_program_date", $data["start_program_date"] ?? null);
            $validator->validateEmpty ($errors, "La date  de début ne  peut pas etre vide");

            $validator=new FormFieldValidator("end_date", $data["end_date"] ?? null);
            $validator->validateEmpty ($errors, "La date  de fin ne  peut pas etre vide");

            $validator=new FormFieldValidator("end_program_date", $data["end_program_date"] ?? null);
            $validator->validateEmpty ($errors, "La date  de fin ne  peut pas etre vide");

            $validator=new FormFieldValidator("description", $data["description"] ?? null);
            $validator->validateEmpty ($errors, "La description ne peut pas etre vide");


            $validator=new FormFieldValidator("additionnal_info", $data["additionnal_info"] ?? null);
            $validator->validateEmpty ($errors, "Les informations additionnelles ne peuvent  etre vide");

            $validator=new FormFieldValidator("fees", $data["fees"] ?? null);
            $validator->validateRegex("/^[0-9\.]+$/", $errors, "Champs invalide. Seulement les chiffres sont autorisés.");

            $institution = empty($data["institution"]) ? null : InstitutionModel::get($data["institution"]);
            if(empty($institution)){
                $errors["institution"]=[
                    "notExist"=>"Institution Invalide ou inexistante"
                ];
            }
            $program = empty($data["program"]) ? null : ProgramModel::get($data["program"]);
            if(empty($program)){
                $errors["program"]=[
                    "notExist"=>"Programme Invalide ou inexistante"
                ];
            }

            if(empty($errors)){
                
                
                $values=[
                    "admission_group_code"=>($data["code"]),
                    "admission_group_name"=>($data["name"]),
                    "admission_group_description"=>($data["description"]??null),
                    "admission_group_additionnal_info"=>$data["additionnal_info"]??null,
                    "admission_group_max_places"=>($data["max_places"]),
                    "admission_group_close_date"=>($data["end_date"]),
                    "admission_group_start_date"=>($data["start_date"]),
                    "admission_group_program_close_date"=>($data["end_program_date"]),
                    "admission_group_program_start_date"=>($data["start_program_date"]),
                    "admission_group_scholarship_available"=>intval(boolval($data["scholarship_available"] ?? false)),
                    "admission_group_in_day_course"=>intval(boolval($data["in_day_course"]?? false)),
                    "admission_group_in_night_course"=>intval(boolval($data["in_night_course"]?? false)),
                    "admission_group_institution_id"=>$institution["institution_id"],
                    "admission_group_program_id"=>$program["program_id"],
                    "admission_fees"=>($data["fees"])
                ];
                
                if(!empty($item)){
                    $values["admission_group_id"] = $item["admission_group_id"];
                    $values = AdmissionGroup::update($values);
                }else{
                    $values = AdmissionGroup::create($values);
                }

                return $values ;
            }else{
                Response::setHttpResponseCode(400);
                return $errors;
            }

        }else if( $action ==="delete" && !empty($item)){
            AdmissionGroup::delete($item["admission_group_id"]);
        }
        $programs = ProgramModel::getAll();
        $institutions=InstitutionModel::getAllUsable();
        return ($this->render("admin/dashboard/admissions/edit.html.twig", [
                "programs" => $programs,
                "institutions"=>$institutions,
                "data"=>$item ?? null
            ])
        );
    }

    #[Route("/admission-groups/list")]
    function admissioGroupList()
    {
        


        $admissions = AdmissionGroup::getAll();
        return ($this->render("admin/dashboard/admissions/groups.html.twig", [
                "admissions" => $admissions,
            ])
        );
    }

    #[Route("/admission-groups/form/{groupId}/{questionType}")]
    function admissionGroupMEtas(
        #[Param()] $questionType,
        #[Param()] $groupId
        
    ){
        $questionType = in_array( strtolower($questionType), ["question", "rule"]) ?strtolower($questionType) : "";
        $data=$_POST;
        $errors=[];
        $item_id= $_GET["item_id"] ?? null;
        $action =$_GET["action"] ?? null;
        $params=["isRule"=>$questionType==="rule"];
        if(!empty($item_id)){
            $item = AdmissionGroupMeta::get($item_id);
            $params['data']=$item;
        }
        $group=AdmissionGroup::get($groupId);
        if(empty($group)){
            return Router::redirect("/admin/formations/admission-groups");
        }
        if(!empty($data)){
            $validator=new FormFieldValidator("form", $data["csrf_token"] ?? null);
            $validator->validateEquals(session()->getState()->getCsrfToken(), $errors, "ID de formulaire invalide");

            $validator=new FormFieldValidator("meta_value", $data["meta_value"] ?? null);
            $validator->validateName( $errors, "Valeurs invalide. Seuls les caractères alphabétiques et numériques et quelques caractères spéciaux pour syntaxique sont acceptés.");

            $validator=new FormFieldValidator("meta_type", $data["meta_type"] ?? null);
            $validator->validateRegex("/^(text)|(checkbox)|(file)$/", $errors, "Champs invalide. Les valeurs acceptées sont prédéfinies");

            if(empty($errors)){
                $values=[
                    "admission_group_meta_type"=>strtoupper($questionType),
                    "admission_group_meta_value"=>$data["meta_value"],
                    "admission_group_meta_group_id"=>$groupId
                ];
                if(!empty($item)){
                    $values=AdmissionGroupMeta::update([
                        "admission_group_meta_id"=>$item["admission_group_meta_id"],
                        ...$values
                    ]);
                }else{
                    $values = AdmissionGroupMeta::create($values); 
                }
            }else{
                $params["errors"]=$errors;
            }
        }else if($action ==="delete" && !empty($item)){
            AdmissionGroupMeta::delete($item["admission_group_meta_id"]);
        }
        $params["metas"]=AdmissionGroupMeta::getMetasForGroup($groupId, "and admission_group_meta_type = '".strtoupper($questionType)."'");
        $params["action"]="/admin/formations/admission-groups/form/$groupId/$questionType?action=$action&item_id=$item_id";
        return(
            $this->render("admin/dashboard/admissions/questions.html.twig", $params)
        );
    }

    #[Route("/correct-tags")]
    function correctTags(){
        
        $programs= ProgramModel::getAll();
        foreach($programs as $program){
            
            ProgramModel::update([
                "program_id"=>$program["program_id"],
                "program_code"=>$program["program_code"],
                "program_goal_description"=>htmlspecialchars_decode($program["program_goal_description"]),
                "program_name"=>htmlspecialchars_decode($program["program_name"]),
                "program_admission_terms"=>htmlspecialchars_decode($program["program_admission_terms"]),
                //"program_targeted_jobs"=>htmlspecialchars_decode($program["program_targeted_jobs"] ?? "")??""
            ]);
        }
        $sectors = SectorModel::getAll();
        foreach($sectors as $sector){
            SectorModel::updateSector([
                "sector_id"=>$sector["sector_id"],
                "sector_name"=>htmlspecialchars_decode($sector["sector_name"]),
                "sector_description"=>htmlspecialchars_decode($sector["sector_description"])
            ]);
        }
        $diplomas = DiplomeModel::getAll();
        foreach($diplomas as $diploma){
            DiplomeModel::update([
                "diploma_id"=>$diploma["diploma_id"],
                "diploma_name"=>htmlspecialchars_decode($diploma["diploma_name"]),
                "diploma_description"=>htmlspecialchars_decode($diploma["diploma_description"])
            ]);
        }
        $institutions = InstitutionModel::getAll();
        foreach($institutions as $institution){
            InstitutionModel::update([
                "institution_id"=>$institution["institution_id"],
                "institution_name"=>htmlspecialchars_decode($institution["institution_name"]),
                "institution_description"=>htmlspecialchars_decode($institution["institution_description"]),
                "institution_adress"=>htmlspecialchars_decode($institution["institution_adress"]),
                "institution_adress_additionnal"=>htmlspecialchars_decode($institution["institution_adress_additionnal"]),
                "institution_website_url"=>htmlspecialchars_decode($institution["institution_website_url"]),
            ]);
        }
        $admissions=AdmissionGroup::getAll();
        foreach($admissions as $admission){
            AdmissionGroup::update([
                "admission_group_id"=>$admission["admission_group_id"],
                "admission_group_code"=>htmlspecialchars_decode($admission["admission_group_code"]),
                "admission_group_name"=>htmlspecialchars_decode($admission["admission_group_name"]),
                "admission_group_description"=>htmlspecialchars_decode($admission["admission_group_description"]),
                "admission_group_additionnal_info"=>htmlspecialchars_decode($admission["admission_group_additionnal_info"])
            ]);
        }

        $jobs=JobModel::getAll();
        foreach($jobs as $job){
            JobModel::update([
                "job_id"=>$job["job_id"],
                "job_type"=>$job["job_type"],
                "job_title"=>htmlspecialchars_decode($job["job_title"]),
                "job_description"=>htmlspecialchars_decode($job["job_description"]),
                "job_required_competences"=>htmlspecialchars_decode(htmlspecialchars_decode($job["job_required_competences"])),
                "job_required_documents"=>htmlspecialchars_decode(htmlspecialchars_decode($job["job_required_documents"]))
            ]);
        }
        die("ok");
    }


}
