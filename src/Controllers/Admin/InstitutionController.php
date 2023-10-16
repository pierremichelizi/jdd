<?php

namespace App\Controllers\Admin;

use App\Models\InstitutionModel;
use App\Models\TownModel;
use App\Validators\FormFieldValidator;
use Core\Auth;
use Core\Controller;
use Core\Param;
use Core\Response;
use Core\Route;
use Core\Router;

#[Route("/admin/institutions")]
#[Auth(roles:["ADMIN"], onErrorTo:"/auth/admin/login")]
class InstitutionController extends Controller
{

    #[Route("/")]
    function institutions()
    {
        $institutions = InstitutionModel::getAll();
        return ($this->render("admin/dashboard/instituts/listing.html.twig", ["institutions" => $institutions])
        );
    }

    #[Route("/items")]
    public function institution() {

        $data = $_POST;
        $params = [];
        $item = null;
        $id = $_GET["item_id"] ?? null;
        $action = $_GET["action"] ?? null;
        $parent = $_GET["parent_id"] ?? null;
        $isCenter = isset($_GET["center"]);
        $params["isCenter"]=$isCenter;
        $params["town"]= TownModel::getAll();
        $errors = [];
        if (!empty($id)) {
            $item = InstitutionModel::get($id);
            $params["data"]=$item;
        }
        if(!empty($parent)){
            $parent=InstitutionModel::get($parent);
            if(empty($parent)){
                $errors["form"] = [
                    "parent"=>"Id parent inexistant"
                ];
            }else{
                $params["parent"]=$parent;
            }
           
        }

        if (!empty($data)) {
           

            $this->validateForm($data, $errors, $isCenter);

            $logoValidator = new FormFieldValidator("institution_logoUrl", null);
                $logoValidator->ifExists()
                    ->validateUploadedFile($errors, $item["institution_logoUrl"] ?? null);

            if (\count($errors)) {
                $params["errors"] = $errors;
                if (!empty($logoValidator)) {
                    $logoValidator->clearTmpFile();
                }
                Response::setHttpResponseCode(400);
                return $errors;
            } else {
                
                $town = $this->getTownInfo($data["institution_town"], $data["institution_country"]);
                $input = [
                    "institution_name" => ($data["institution_name"]),
                    "institution_description" =>$data["institution_description"] ?? null,
                    "institution_logoUrl" => !empty($logoValidator) && !empty($logoValidator->getUploadedFilePath()) ? $logoValidator->getUploadedFilePath() : ($item["institution_logoUrl"] ?? null),
                    "institution_adress" => ($data["institution_adress"]),
                    "institution_isGroup" => intval(boolval($data["institution_isGroup"] ?? 0)),
                    "institution_tel" => ($data["institution_tel"]),
                    "institution_adress_additionnal" => ($data["institution_adress_additionnal"] )?? null,
                    "institution_website_url" => ($data["institution_website_url"]),
                    "institution_type" => ($data["institution_type"]),
                    "institution_contactEmail" => ($data["institution_contactEmail"]),
                    "institution_parent"=>!empty($parent) ? $parent["institution_id"] : null,
                    "institution_town_id"=>$town["town_id"],
                    "institution_supported_languages"=>($data["institution_supported_languages"])
                   
                ];

                if (!empty($item)) {
                    $input["institution_id"] = $item["institution_id"];
                    if ($input['institution_logoUrl'] !== $item['institution_logoUrl'] && !empty( $item["institution_logoUrl"]) && file_exists(BASE_PUBLIC_DIR . $item["institution_logoUrl"])) unlink(BASE_PUBLIC_DIR . $item["institution_logoUrl"]);
                    $institution = InstitutionModel::update($input);
                    if(!empty($logoValidator) ) $logoValidator->upload();
                    return $institution;
                } else {
                    $institution = InstitutionModel::insert($input);
                    if(!empty($logoValidator) ) $logoValidator->upload();
                    return $institution;
                }
            }
        }else if($action==="delete" && !empty($item)){
            InstitutionModel::deleteCenters($item["institution_id"]);
            InstitutionModel::delete($item["institution_id"]);
            if (!empty($item["institution_logoUrl"]) && file_exists(BASE_PUBLIC_DIR . $item["institution_logoUrl"])) unlink(BASE_PUBLIC_DIR . $item["institution_logoUrl"]);
            session()->getState()->setFlash([
                "success"=>t("Institution Supprimé")
            ]);
            return Router::redirect("/admin/institutions");
        }

        if(!empty($action) && !in_array($action, ["delete", "edit"])){
            session()->getState()->setFlash([
                "error"=>t("Action Non reconnu")
            ]);
            return Router::redirect("/admin/institutions");
        }
        $params["countries"]=getCountries();
        return $this->render("/admin/dashboard/instituts/form.html.twig", $params);
    }

    #[Route("/items/details/{id}")]
    public function institutionDetails(
        #[Param()] $id
    ){
        $data=InstitutionModel::get($id);
        if(!empty($data)){
            $centers=InstitutionModel::getAllCentersOf($id);
            return(
                $this->render("admin/dashboard/instituts/details.html.twig", [
                    "data"=>$data,
                    "institutions" =>$centers
                ])
            );
        }
        
    }

    function validateForm($data, &$errors, $isCenter=false)
    {

        $token = new FormFieldValidator("csrf_token", $data["csrf_token"] ?? null);
        $token
            ->validateEquals(session()->getState()->getCsrfToken(), $errors, "id de formulaire invalide.");

        $intitutionNameValidation = new FormFieldValidator("institution_name", $data["institution_name"] ?? null);
        $intitutionNameValidation
            ->validateName( $errors, "Ce champs ne peut contenir que des caractères alphanumériques et doit contenir au moins 3 caractères et au plus 255 caractères. Le caractères spéciaux autorisés sont: ', _, -,.");

        $intitutionAdressValidation = new FormFieldValidator("institution_adress", $data["institution_adress"] ?? null);
        $intitutionAdressValidation
            ->validateName( $errors, "Ce champs ne peut contenir que des caractères alphanumériques et doit contenir au moins 3 caractères et au plus 255 caractères. Le caractères spéciaux autorisés sont: ', _, -,.");

        $intitutionContactEmailValidation = new FormFieldValidator("institution_contactEmail", $data["institution_contactEmail"] ?? null);
        $intitutionContactEmailValidation
            ->validateEmail($errors, "Email invalide");

        $intitutionAdressAdditionnalValidation = new FormFieldValidator("institution_adress_additionnal", $data["institution_adress_additionnal"] ?? null);
        $intitutionAdressAdditionnalValidation
            ->ifExists()
            ->validateName( $errors, "Ce champs ne peut contenir que des caractères alphanumériques et doit contenir au moins 3 caractères et au plus 255 caractères. Le caractères spéciaux autorisés sont: ', _, -,.");

        $descriptionValidator = new FormFieldValidator("institution_description", $data["institution_description"] ?? null);
        $descriptionValidator
            ->ifExists()
            ->validateEmpty($errors, "Ce champs ne peut pas etre vide");

        $institutionType = new FormFieldValidator("institution_type", $data["institution_type"] ?? null);
        $institutionType
            ->validateEmpty($errors, "Ce champs ne peut etre vide")
            ->validateRegex("/^(UNIVERSITY)|(PROFESIONNAL_CENTER)|(SCHOOL)|(OTHER)$/i", $errors, "Valeurs invalides");

        $institution_parent = new FormFieldValidator("institution_parent", $data["institution_parent"] ?? null);
        $institution_parent
            ->ifExists()
            ->validateEmpty($errors, "Ce champs ne peut etre vide");


        $intitutionTownValidation = new FormFieldValidator("institution_town", $data["institution_town"] ?? null);
        $intitutionTownValidation
            ->validateName( $errors, "Ce champs ne peut contenir que des caractères alphanumériques et doit contenir au moins 3 caractères et au plus 255 caractères. Le caractères spéciaux autorisés sont: ', _, -,.");

        $intitutionCountryValidation = new FormFieldValidator("institution_country", $data["institution_country"] ?? null);
        $intitutionCountryValidation
            ->validateRegex("/^[a-z]{2}$/i", $errors, "Ce champs ne peut contenir que des caractères alphabétiques et doit contenir au moins 3 caractères et au plus 255 caractères. Le caractères spéciaux autorisés sont: ', _, -,.");

         $languagesValidatior = new FormFieldValidator("institution_supported_languages", $data["institution_supported_languages"] ?? null);
        $languagesValidatior
            ->validateEmpty( $errors, "Ce champs ne peut etre vide")
            ->validateRegex("/^(([a-z\s]+)((\,)|))+$/", $errors, "Ce champs ne peut contenir que des caractère alpahabétique. ")
        ;
            

        
       

        $intitutionWebsiteUrlValidation = new FormFieldValidator("institution_website_url", $data["institution_website_url"] ?? false);
        $intitutionWebsiteUrlValidation
            ->validateUrl($errors, "URL non valide");

        $intitutionTelValidation = new FormFieldValidator("institution_tel", $data["institution_tel"] ?? false);
        $intitutionTelValidation
            ->validateRegex("/^[0-9\s\-\(\)\+]+$/i", $errors, "Numéro de téléphone non valide");
    }

    function getTownInfo($townName, $country){
        $town = TownModel::get($townName, $country);
        return empty($town) ? TownModel::inset([
            "town_name"=>$townName,
            "town_country"=>$country
        ]) : $town;
    }
}
