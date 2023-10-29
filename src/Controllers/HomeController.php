<?php

namespace App\Controllers;

use App\Mailer\ElasticMailer;
use App\Mailer\Mailer;
use App\Models\AdmissionGroup;
use App\Models\ApplicationModel;
use App\Models\ContactModel;
use App\Models\InstitutionModel;
use App\Models\JobModel;
use App\Models\ProgramModel;
use App\Models\SectorModel;
use App\Models\TownModel;
use App\Models\UserModel;
use App\Validators\FormFieldValidator;
use Core\Auth;
use Core\Controller;
use Core\DB;
use Core\GET;
use Core\Inject;
use Core\NoAuth;
use Core\Param;
use Core\POST;
use Core\Response;
use Core\Route;
use Core\Router;
use DateTime;
use Translation;

#[Route("/")]
class HomeController extends Controller
{
    #[GET("/lang/{langue}")]
    function lang(#[Param()]$langue){
        
        if(in_array($langue, SUPPORTED_LANGUAGES)){
            Translation::setLanguage($langue);
        }
        var_dump((isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "/"));
        Router::redirect(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "/");
    }

    #[GET("/")]
    public function index()
    {
        $towns = $towns = TownModel::getAllDistinctCountries();
        $sectors = SectorModel::getAll();
        return $this->render("client/home.html.twig", [
            "towns" => $towns,
            "sectors"=>$sectors,
            "countries" => getCountries(),
            "isLogged" => !empty($_SESSION["user"]["user_id"])
        ]);
    }

    #[GET("/catalogue")]
    public function catalogue()
    { 
        /*
         SELECT sector_name,sector_id, count(*) as total from  sector 
            LEFT JOIN program ON program.program_sector_id=sector_id  
            WHERE program.program_id IS NOT null
            group BY sector_name,sector_id  order by sector_name asc 
        */
        $domaines = DB::pdo()->query("
        SELECT sector_name,sector_id, count(program_id) as total from  sector 
        LEFT JOIN program ON program.program_sector_id=sector_id  
        group BY sector_name,sector_id  order by sector_name asc 
        ")->fetchAll();
        $town = DB::pdo()->query("  SELECT town_id, town_name , COUNT(*) as total FROM program LEFT JOIN admission_group ON program.program_id = admission_group.admission_group_program_id LEFT JOIN institution ON institution.institution_id = admission_group.admission_group_institution_id LEFT JOIN town ON town.town_id = institution.institution_town_id WHERE town_id IS NOT NULL " . (empty($countries) ? "" : "and $countries") . " GROUP BY  town_id, town_name")->fetchAll();
        /* SELECT diploma_id,diploma_name,diploma_code, count(*) as total from  program LEFT JOIN diploma ON diploma.diploma_id=program_diploma_id GROUP BY diploma_id,diploma_name,diploma_code   order by diploma_name asc */
        $diplomas = DB::pdo()->query("SELECT diploma_id,diploma_name,diploma_code, count(*) as total from  program LEFT JOIN diploma ON diploma.diploma_id=program_diploma_id GROUP BY diploma_id,diploma_name,diploma_code   order by diploma_name asc")->fetchAll();

        
        $_GET["domaines"] = isset($_GET["domaines"]) ? $_GET["domaines"] :  implode(",",array_map(fn($x)=>$x["sector_id"], $domaines));
        $_GET["diplomas"] = isset($_GET["diplomas"]) ?$_GET["diplomas"]: implode(",",array_map(fn($x)=>$x["diploma_id"], $diplomas));
        $_GET["towns"] = isset($_GET["towns"]) ?$_GET["towns"]: implode(",",array_map(fn($x)=>$x["town_id"], $town));
        $_GET["countries"] = isset($_GET["countries"]) ?$_GET["countries"] : implode(",",array_keys(getCountries()));
        $_GET["langs"]  = isset($_GET["langs"]) ? $_GET["langs"]: "fr,en";
        
        
        
        $diplomes_filter =  preg_match("/^([a-z0-9\s\-\,]+)|$/i", $_GET["diplomas"]) ? "program.program_diploma_id  IN ('" . implode("','", array_map(fn ($x) => strtolower(strip_tags(htmlspecialchars($x))), explode(",", $_GET["diplomas"]))) . "')" : null;
        $domaines_filter =  preg_match("/^([a-z0-9\s\-\,]+)|$/i", $_GET["domaines"]) ? "program.program_sector_id  IN ('" . implode("','", array_map(fn ($x) => strtolower(strip_tags(htmlspecialchars($x))), explode(",", $_GET["domaines"]))) . "')" : null;
        $countries_filter = preg_match("/^([a-z0-9\s\-\,]+)|$/i", $_GET["countries"]) ? "town.town_country  IN ('" . implode("','", array_map(fn ($x) => strtolower(strip_tags(htmlspecialchars($x))), explode(",", $_GET["countries"]))) . "')" : null;
        $towns_filter =  preg_match("/^([a-z0-9\s\-\,]+)|$/i", $_GET["towns"]) ? "town.town_id  IN ('" . implode("','", array_map(fn ($x) => strip_tags(htmlspecialchars($x)), explode(",", $_GET["towns"]))) . "')" : null;
        $langs_filter =  preg_match("/^([a-z0-9\s\-\,]+)|$/i", $_GET["langs"]) ? implode(" or ", array_map(fn ($x) => 'institution.institution_supported_languages like "%' . htmlspecialchars(strip_tags($x)) . '%"', explode(",", $_GET["langs"]))) : null;



        @list($page, $data,   $total_records, $total_pages) = ProgramModel::getPaginated($_GET["page"] ?? 1, 10, "DISTINCT(program_id), program.* ", "
        LEFT JOIN 
            admission_group ON program.program_id = admission_group.admission_group_program_id
        LEFT JOIN 
            institution ON institution.institution_id = admission_group.admission_group_institution_id
        LEFT JOIN 
            town ON town.town_id = institution.institution_town_id 

        
         " .
            (!isset($countries_filter) ? "" : "and $countries_filter ") .
            (!isset($towns_filter) ? "" : "and $towns_filter ") . " " .
            (!isset($langs_filter) ? "" : "and ($langs_filter)  ") . ' ' .
            (!isset($domaines_filter) ? "" : "and $domaines_filter ") .
            (!isset($diplomes_filter) ? "" : "and $diplomes_filter "))
        ;

        


        $buttons = getPaginationButtons($page, $total_pages, "/catalogue");

        

        return $this->render("client/catalogue.html.twig", [
            "currentPage" => $page,
            "institutions" => $data,
            "total" => $total_records,
            "totalPages" => $total_pages,
            "query" => "towns=" . $_GET["towns"] . "&langs=" . $_GET["langs"] . "&domaines=" . $_GET["domaines"] . "&diplomas=" . $_GET["diplomas"],
            'towns' => $town,
            'diplomas' => $diplomas,
            "domaines" => $domaines,
            'data' => $data,
            'buttons' => $buttons,
            "filters_towns" => explode(",",$_GET["towns"]),
            "filters_langs" => explode(",",$_GET["langs"]),
            "filter_domaines" => explode(",",$_GET["domaines"]),
            "filter_diplomas" => explode(",",$_GET["diplomas"])
        ]);
    }

    #[GET("/login")]
    public function login()
    {
        return $this->render("client/login.html.twig");
    }

    #[GET("/signup")]
    public function signup()
    {
        return $this->render("client/signup.html.twig");
    }

    #[NoAuth(onErrorTo: "/")]
    #[GET("/email-verification/{email}")]
    public function emailVerification(
        #[Param("email")] $email
    ) {
        $user = UserModel::getByEmail($email);
        $action = $_GET["action"] ?? null;
        if (!empty($user)) {
            (new AuthController())->sendVerificationCodeTo($user);
            return $this->render("client/verification-mail-sent.html.twig", [
                'email' => $email,
                "resent" => true
            ]);
        }
        return Router::redirect("/login");
    }

    #[Auth(onErrorTo: "/login")]
    #[GET("/admission/{groupId}/application/{application?}")]
    public function application(
        #[Param()] string $groupId,
        #[Param()] string $application,
        #[Inject(ApplicationController::class)] ApplicationController $applicationController
    )
    {
        $admissions = AdmissionGroup::get($groupId);
        $institution = InstitutionModel::get($admissions["admission_group_institution_id"]);
        $metas = AdmissionGroup::getMetas($groupId);
        $application=!empty($application) ? ApplicationModel::get($application) : null;
        $resume=!empty($application) ? $applicationController->getApplicationResumeTemplate($application["application_id"]): null;
       
        return $this->render("client/application-form.html.twig", [
            "admission"=>$admissions,
            "metas"=>$metas,
            "groupId"=>$groupId,
            "questions"=>array_filter($metas, fn($x)=>strtolower($x["admission_group_meta_type"])=="question"),
            "rules"=>array_filter($metas, fn($x)=>strtolower($x["admission_group_meta_type"])=="rule"),
            "countries"=> getCountries(),
            "data"=>$application,
            "resume"=>$resume
        ]);
        
    }

    #[Auth(onErrorTo: "/login")]
    #[GET("/admission/application/close/{application}")]
    public function applicationClose(
        #[Param()] $application
    )
    {
       ApplicationModel::delete($application);
       Router::redirect("/user/submissions");
       die();
    }

    #[GET("/institution/{id}")]
    public function institution(
        #[Param("id")] string $id
    ) {
        $institution = InstitutionModel::get($id);
        
        $admissions = AdmissionGroup::getAll(" WHERE  admission_group_institution_id ='$id' ");
        $diplomasAdmissions=[];
        foreach($admissions as $a){
            if(empty($diplomasAdmissions[$a["diploma_id"]])){
                $diplomasAdmissions[$a["diploma_id"]] =[
                    "name"=>$a["diploma_name"],
                    "admissions"=>[
                        $a
                    ]
                    ];
            }else{
                $diplomasAdmissions[$a["diploma_id"]]["admissions"][] =$a;
            }
        }

        if (!empty($institution)) {
            return $this->render("client/institution.html.twig", [
                "data" => $institution,
                "admissions"=>$admissions,
                "diplomasAdmissions"=>$diplomasAdmissions,
                "centers" => !empty($institution["institution_isGroup"]) ? DB::pdo()->query("SELECT * from institution left join town on town.town_id=institution_town_id  where institution_isGroup=0 and institution_parent='$id'")->fetchAll() : false
            ]);
        }
    }

    #[GET("/institutions")]
    public function institutions()
    {

        $town = DB::pdo()->query("SELECT town_id,town_name, count(*) as total from  institution LEFT JOIN town ON town.town_id=institution_town_id  where town_id=institution.institution_town_id and  institution_isGroup = 0 group BY town_id,town_name  order by town_name asc ")->fetchAll();

        $_GET["towns"] = isset($_GET["towns"]) ?$_GET["towns"]: implode(",",array_map(fn($x)=>$x["town_id"], $town));
        $_GET["langs"] = isset($_GET["langs"]) ? $_GET["langs"] : "fr,en"; 

        $towns = isset($_GET["towns"]) && preg_match("/^([a-z0-9\s\-\,]+)|$/i", $_GET["towns"]) ? "town.town_id  IN ('" . implode("','", array_map(fn ($x) => strip_tags(htmlspecialchars($x)), explode(",", $_GET["towns"]))) . "')" : null;
        $langs = isset($_GET["langs"]) && preg_match("/^([a-z0-9\s\-\,]+)|$/i", $_GET["langs"]) ? "(".implode(" or ", array_map(fn ($x) => 'institution_supported_languages like "%' . htmlspecialchars(strip_tags($x)) . '%"', explode(",", $_GET["langs"]))).")" : null;

        @list($page,  $data, $total_records, $total_pages) = InstitutionModel::getPaginated($_GET["page"] ?? 1, 10, "", "LEFT join town on town.town_id = institution.institution_town_id  WHERE institution_isGroup = 0 and town_id=institution_town_id  " . (!isset($towns) ? "" : "and $towns") . " " . (!isset($langs) ? "" : "and $langs"));


        $buttons = getPaginationButtons($page, $total_pages);




        return $this->render("client/catalogue-institution.html.twig", [
            "currentPage" => $page,
            "institutions" => $data,
            "total" => $total_records,
            "totalPages" => $total_pages,
            "buttons" => $buttons,
            "town" => $town,
            "query" => "towns=" . $_GET["towns"] . "&langs=" . $_GET["langs"],
            "filters_towns" => explode(",", $_GET["towns"] ),
            "filters_langs" => explode(",", $_GET["langs"] )
        ]);
    }

    #[Route("/contact-us")]
    function contactUs()
    {
        $data=$_POST;
        $errors=[];
        if(!empty($data)){
            $validator= new FormFieldValidator("form", $data["csrf_token"] ?? null);
            $validator->validateEquals(session()->getState()->getCsrfToken(),$errors, "Id du formulaire est invalide");

            $validator= new FormFieldValidator("fullname", $data["fullname"] ?? null);
            $validator->validateName($errors, "Nom Complet Invalide");
            
            $validator= new FormFieldValidator("email", $data["email"] ?? null);
            $validator->validateEmail($errors, "Email invalide");

            $validator= new FormFieldValidator("phone", $data["phone"] ?? null);
            $validator->validatePhone($errors, "Numéro de téléphone incorrecte");

            $validator= new FormFieldValidator("description", $data["description"] ?? null);
            $validator->validateEmpty($errors, t("Votre méssage ne peut pas etre vide"));

            if(empty($errors)){
                $contact=[
                    "contact_fullname"=>htmlspecialchars($data["fullname"]),
                    "contact_email"=>htmlspecialchars($data["email"]),
                    "contact_phone"=>htmlspecialchars($data['phone']),
                    "contact_description"=>htmlspecialchars($data["description"])
                ];
                ContactModel::create($contact);
                return [
                    "message"=>t("Votre demande a bien été envoyée. Notre équipe vous répond sous 24h au maximum. Merci de nous faire confiance.")
                ];
            }else{
                Response::setHttpResponseCode(400);
                return $errors;
            }
        }
        return $this->render("client/contact-us.html.twig");
    }

    #[GET("/about-us")]
    function aboutUs()
    {
        return $this->render("client/about-us.html.twig");
    }

    #[GET("/catalogue/countries")]
    function countries()
    {
        $towns = TownModel::getAllDistinctCountries();
        return $this->render("client/countries.html.twig", [
            "towns" => $towns,
            "countries" => getCountries()
        ]);
    }

    #[GET("/catalogue/{program}")]
    function program(
        #[Param()] $program
    ) {
        $institutesCount = ProgramModel::pdo()->query("SELECT count(*) as total from institution 
        LEFT JOIN admission_group ON admission_group.admission_group_institution_id = institution.institution_id 
        WHERE institution_isGroup = 0  and admission_group.admission_group_program_id = '$program'")->fetch();
        $hasActive = ProgramModel::pdo()->query("SELECT COUNT(*)  as isActive from institution 
        LEFT JOIN admission_group ON admission_group.admission_group_institution_id = institution.institution_id 
        WHERE institution_isGroup = 0   and admission_group.admission_group_program_id = '$program' and admission_group_close_date > '" . (new DateTime())->format('Y-m-d H:i:s') . "'")->fetch();

        return ($this->render("client/program-details.html.twig", [
                "data" => ProgramModel::get($program),
                "subjects" => ProgramModel::getSubjects($program),
                "isActive" => $hasActive["isActive"],
                "institutesCount" => $institutesCount["total"]
            ])
        );
    }


    #[GET("/catalogue/{program}/institus")]
    public function institutionPrograms(
        #[Param()] $program
    )
    {
        $towns = !empty($_GET["towns"]) && preg_match("/^[a-z0-9\s\-\,]+$/i", $_GET["towns"]) ? "town.town_id  IN ('" . implode("','", array_map(fn ($x) => strip_tags(htmlspecialchars($x)), explode(",", $_GET["towns"]))) . "')" : null;
        $langs = !empty($_GET["langs"]) && preg_match("/^[a-z0-9\s\-\,]+$/i", $_GET["langs"]) ? implode(" or ", array_map(fn ($x) => 'institution_supported_languages like "%' . htmlspecialchars(strip_tags($x)) . '%"', explode(",", $_GET["langs"]))) : null;
        @list($page,  $data, $total_records, $total_pages) = ProgramModel::getAllInstitutes($program,$_GET["page"] ?? 1, 10, null,"  ".(empty($towns) ? "" : "and $towns") . " " . (empty($langs) ? "" : "and ($langs)"));

        $buttons = getPaginationButtons($page, $total_pages);
        $filter_town = array_filter(explode(",", str_replace(" ", "", (empty($_GET["towns"]) ? "" : $_GET["towns"]))), fn ($x) => !!$x);
        $filter_lang = array_filter(explode(",", str_replace(" ", "", (empty($_GET["langs"]) ? "" : $_GET["langs"]))),  fn ($x) => !!$x);


        $town = DB::pdo()->query("SELECT town_id,town_name, count(*) as total from  institution 
        LEFT JOIN admission_group ON admission_group.admission_group_institution_id=institution_id
        LEFT JOIN town ON town.town_id=institution_town_id  
        where 
            admission_group_program_id ='$program'
            and  institution_isGroup = 0
        group BY town_id,town_name  order by town_name asc ")->fetchAll();


        $filter_town = empty($filter_town) ? array_map(fn ($t) => $t["town_id"], $town) : $filter_town;
        $filter_lang = empty($filter_lang) ? ["fr", 'en'] : $filter_lang;
        return $this->render("client/catalogue-universities.html.twig", [
            "currentPage" => $page,
            "institutions" => $data,
            "total" => $total_records,
            "totalPages" => $total_pages,
            "buttons" => $buttons,
            "town" => $town,
            "query" => "towns=" . implode(",", $filter_town) . "&langs=" . implode(",", $filter_lang),
            "filters_towns" => $filter_town,
            "filters_langs" => $filter_lang,
            "data" => $data,
            "programId"=>$program
        ]);
    }

    #[GET("/admission/{admission}")]
    public function admission(
        #[Param()] string $admission
    ){
        $admissions = AdmissionGroup::get($admission);
        $institution = InstitutionModel::get($admissions["admission_group_institution_id"]);
        $metas = AdmissionGroup::getMetas($admission);
        return $this->render("client/admission.html.twig", [
            "admission"=>$admissions,
            "data"=> $institution ,
            "metas"=>$metas
        ]);
    }

    #[GET("/jobs")]
    function jobs(){
        $domaines = DB::pdo()->query("
            SELECT sector_name,sector_id, count(*) as total from  sector 
            LEFT JOIN job ON job.job_sector_id=sector_id  
            WHERE job.job_sector_id IS NOT null
            group BY sector_name,sector_id  order by sector_name asc 
        ")->fetchAll();
        
        $_GET["domaines"] = isset($_GET["domaines"]) ? $_GET["domaines"] :  implode(",",array_map(fn($x)=>$x["sector_id"], $domaines));
        $_GET["countries"] = isset($_GET["countries"]) ?$_GET["countries"] : implode(",",array_keys(getCountries()));

        $domaines_filter =  preg_match("/^([a-z0-9\s\-\,]+)|$/i", $_GET["domaines"]) ? "and sector.sector_id  IN ('" . implode("','", array_map(fn ($x) => strtolower(strip_tags(htmlspecialchars($x))), explode(",", $_GET["domaines"]))) . "')" : null;
        //$countries_filter = preg_match("/^([a-z0-9\s\-\,]+)|$/i", $_GET["countries"]) ? "and town.town_country  IN ('" . implode("','", array_map(fn ($x) => strtolower(strip_tags(htmlspecialchars($x))), explode(",", $_GET["countries"]))) . "')" : null;

        

        @list($page, $data,   $total_records, $total_pages) = JobModel::getAllPaginated($_GET["page"] ?? 1, 10, null, (empty($domaines_filter) ? "":$domaines_filter));
       
        $buttons = getPaginationButtons($page, $total_pages, "/jobs");


        return(
            $this->render("client/jobs.html.twig", [
                "data"=>$data,
                "currentPage" => $page,
                "institutions" => $data,
                "total" => $total_records,
                "totalPages" => $total_pages,
                "query" => "domaines=" . $_GET["domaines"] ,
                "domaines" => $domaines,
                'data' => $data,
                'buttons' => $buttons,
                "filter_domaines" => explode(",",$_GET["domaines"])
            ])
        );
    }
    #[GET("/jobs/{jobId}")]
    function jobItem(
        #[Param()] $jobId
    ){
        $job=JobModel::get($jobId);

        return(
            $this->render("client/job-detail.html.twig", [
                "data"=>$job
            ])
        );
    }

    #[GET("/jobs/{jobId}/apply")]
    function jobApply(
        #[Param()] $jobId
    ){
        $job=JobModel::get($jobId);

        return(
            $this->render("client/job-apply.html.twig", [
                "data"=>$job
            ])
        );
    }

    #[GET("/confidentiality")]
    function confidentialit(){
        return $this->render("client/confidentiality.html.twig");
    }

    #[GET("cookies")]
    function cookies(){
        return $this->render("client/cookies.html.twig");
    }

    #[GET("/free-submission")]
    function freeProposals(){
        return $this->render("client/free-proposal.html.twig");
    }

    #[GET("/free-submission/job/apply")]
    function jobAppy(){
        
        return $this->render("client/free-submission-job-apply.html.twig", [
            "countries"=>getCountries(),
            "towns"=>TownModel::getAllDistinctCountries()
        ]);
    }
}
