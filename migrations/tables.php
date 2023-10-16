<?php

use App\Models\AdmissionGroup;
use App\Models\AdmissionGroupMeta;
use App\Models\DiplomeModel;
use App\Models\InstitutionModel;
use App\Models\JobModel;
use App\Models\ProgramModel;
use App\Models\ProgramSubjectModel;
use App\Models\SectorModel;
use App\Models\TownModel;
use Core\DB;



class TableMigration
{

    static function migrate()
    {
        return;
        self::wipe();
        self::town();
        self::sector();
        self::institution();
        self::diplomes();
        self::programs();
        self::user();
        self::application();
        self::jobs();
        self::fixtures();
    }

    static function wipe()
    {
        DB::pdo()->exec("DROP DATABASE " . DB::$db_name . "; CREATE DATABASE " . DB::$db_name . "; USE " . DB::$db_name);
    }



    static private function user()
    {
        global $default;
        DB::pdo()->exec(<<<EOF
            create table  if not exists user(
                user_id varchar(100) primary key default(UUID()),
                user_2fa varchar(100),
                user_fullname varchar(100) not null,
                user_email varchar(100) not null,
                user_email_toValidate varchar(100) ,
                user_imgUrl varchar(255),
                user_password varchar(100)  not null,
                user_roles varchar(255) not null,
                user_activated_at datetime,
                user_verification_code varchar(50),
                user_verification_expiresAt datetime,
                unique key(user_email),
                user_createdAt datetime default(now()),
                user_updatedAt datetime default(now()) 
            )
        EOF);

        DB::pdo()->exec(<<<EOF
            create table  if not exists verification(
                verification_id varchar(100) primary key default(UUID()),
                verification_code varchar(100) not null,
                verification_expiresAt datetime not null,
                verification_user_id varchar(100)  not null,
            
                foreign key(verification_user_id) references user(user_id) ON DELETE CASCADE,

                user_createdAt datetime default(now()),
                user_updatedAt datetime default(now()) 
            )
        EOF);


        foreach ($default["user"] as $user) {
            DB::prepareInsetInto("user", $user)->flush();
        }
    }


    static private function sector()
    {
        DB::pdo()->exec(<<<EOF
            create table  if not exists sector(
                sector_id varchar(100) primary key default(UUID()),
                sector_name varchar(100)  not null,
                sector_slug varchar(100) not null,
                sector_iconUrl varchar(100) not null,
                sector_description text,
                sector_createdAt datetime default(now()),
                sector_updatedAt datetime default(now()) 
            )
        EOF);
    }

    static private function town()
    {
        DB::pdo()->exec(<<<EOF
            create table  if not exists town(
                town_id varchar(100) primary key default(UUID()),
                town_name varchar(100)  not null,
                town_country varchar(100)  not null,
                town_description text,
                town_createdAt datetime default(now()),
                town_updatedAt datetime default(now())
            )
        EOF);
    }


    static private function institution()
    {
        DB::pdo()->exec(<<<EOF
            create table if not exists institution(
                institution_id varchar(255) primary key default(UUID()),
                institution_name varchar(255)  not null,
                institution_description text,
                institution_logoUrl varchar(255),
                institution_isGroup BOOLEAN default(false),
                institution_tel varchar(255),
                institution_adress varchar(255),
                institution_adress_additionnal varchar(255),
                institution_website_url varchar(255),
                institution_type varchar(255),
                institution_contactEmail varchar(255),
                institution_parent varchar(100),
                institution_supported_languages text not  null,
                CHECK (institution_type ='UNIVERSITY' or institution_type='PROFESIONNAL_CENTER'or institution_type='SCHOOL' or institution_type='OTHER'),
                institution_town_id varchar(255) ,
                foreign key (institution_town_id) references town(town_id),
                institution_createdAt datetime default(now()),
                institution_updatedAt datetime default(now())
            )
        EOF);

        DB::pdo()->exec(<<<EOF
                ALTER TABLE institution
                add foreign key (institution_parent) references institution(institution_id) ON DELETE CASCADE;
        EOF);
    }

    static function diplomes()
    {
        global $default;
        DB::pdo()->exec(<<<EOF
            create table if not exists diploma(
                diploma_id varchar(100) primary key default(UUID()),
                diploma_name varchar(255)  not null,
                diploma_code varchar(255)  not null,
                diploma_description varchar(255),
                
                diploma_createdAt datetime default(now()),
                diploma_updatedAt datetime default(now())
            )
        EOF);

        foreach ($default["diploma"] as $diploma) {
            DB::prepareInsetInto("diploma", $diploma)->flush();
        }
    }

    static function programs()
    {

        DB::pdo()->exec(<<<EOF
            create table if not exists program(
                program_id varchar(100) primary key default(uuid()),
                program_code varchar(100) not null,
                program_iconLogo varchar(255) ,
                program_name varchar(255) not null,
                program_goal_description text not null,
                program_targeted_jobs json,
                program_job_callings json,
                program_admission_terms text not null,
                program_sector_id varchar(255),
                foreign key(program_sector_id) references sector(sector_id) ,
                program_diploma_id varchar(100),
                foreign key (program_diploma_id) references diploma(diploma_id),
                program_createdAt datetime default(now()),
                program_updatedAt datetime default(now())
            )
        EOF);
        DB::pdo()->exec(<<<EOF
            create table if not exists program_subject(
                program_subject_id varchar(100) primary key default(uuid()),
                program_subject_code varchar(100) not null,
                program_subject_name varchar(255) not null,
                program_subject_description text not null,
                program_subject_hours_duration int,
                program_subject_program_id varchar(100) not null,
                foreign key (program_subject_program_id) references program(program_id) ON DELETE CASCADE,
                program_subject_createdAt datetime default(now()),
                program_subject_updatedAt datetime default(now())
            )
        EOF);

        DB::pdo()->exec(<<<EOF
            create table if not exists admission_group(
                admission_group_id varchar(100) primary key default(uuid()),
                admission_group_code varchar(100) not null,
                admission_group_name varchar(255) not null,
                admission_group_description text not null,
                admission_group_max_places int,
                admission_group_close_date datetime not null,
                admission_group_start_date datetime not null,
                admission_group_program_close_date datetime,
                admission_group_program_start_date datetime,
                admission_group_scholarship_available boolean not null,
                admission_group_in_day_course boolean not null default(1),
                admission_group_in_night_course boolean not null,
                admission_group_additionnal_info text,
                admission_fees int not null default(70),
                admission_group_institution_id varchar(255) not null,
                
                admission_group_createdAt datetime default(now()),
                admission_group_updatedAt datetime default(now()),

                foreign key(admission_group_institution_id) references institution(institution_id) ON DELETE CASCADE,
                admission_group_program_id varchar(255),
                foreign key (admission_group_program_id) references program(program_id) ON DELETE CASCADE
            )
        EOF);



        DB::pdo()->exec(<<<EOF
        create table if not exists admission_group_meta(
            admission_group_meta_id varchar(255) not null primary key,
            admission_group_meta_type varchar(100),
            admission_group_meta_value text,
            admission_group_meta_response_format text,
            admission_group_meta_response_anwsers_list text,
            admission_group_meta_group_id varchar(255) not null,
            admission_group_meta_createdAt datetime default(now()),
            admission_group_meta_updatedAt datetime default(now()),
            foreign key(admission_group_meta_group_id) references admission_group(admission_group_id) ON DELETE CASCADE,
            CHECK (admission_group_meta_type IN ('QUESTION', 'RULE'))
        )
        EOF);
    }

    static function application()
    {
        DB::pdo()->exec(<<<EOF
        create table if not exists application(
            application_id varchar(255) not null primary key,
            application_user_id varchar(100),
            application_accept_conditions boolean not null default(1),
            application_code varchar(100) not null,
            application_lastname varchar(255),
            application_firstname varchar(255),
            application_other_names varchar(255),
            application_birthday datetime,
            application_bith_location varchar(255),
            application_sex char(1),
            application_email varchar(100),
            application_phone varchar(100),
            application_main_language varchar(10),
            application_father_fullname varchar(255),
            application_father_phone varchar(255),
            application_father_job_title varchar(255),
            application_mother_fullname varchar(255),
            application_mother_phone varchar(255),
            application_mother_job_title varchar(255),
            application_country char(2),
            application_town varchar(255),
            application_postal_code varchar(255),
            application_note text,
            application_is_paid boolean,
            application_is_valid boolean,
            application_step int, 
            application_questions json,
            application_rules json,
            application_invoice_id varchar(255),
            foreign key (application_invoice_id) references invoice(invoice_id),
            
            application_meta_createdAt datetime default(now()),
            application_meta_updatedAt datetime default(now()),

            foreign key (application_user_id) references user(user_id),
            application_group_id varchar(100),
            foreign key(application_group_id) references admission_group(admission_group_id) ON DELETE CASCADE
        )
        EOF);
    }

    static function job_application(){
        DB::pdo()->exec(<<<EOF
        create table if not exists job_application(
            job_application_id varchar(255) primary key not null default(uuid()),
            job_application_email varchar(255) not null,
            job_application_phone varchar(255) not null,
            job_application_bithday datetime not null,
            job_application_fullname varchar(255) not null,
            job_application_firstname varchar(255),
            job_application_lastname varchar(255),
            job_application_nationality char(2) not null,
            job_application_sex char(1) not null,
            job_application_jobcountry char(2) ,
            job_application_is_freeapplication boolean default(0),
            job_application_country char(2) not null,
            job_application_adress varchar(255),
            job_application_required_documents json,
            job_application_last_diploma_uri varchar(255),
            job_application_last_additionnal_note text,
            job_application_job_id varchar(255),
            job_application_step int not null,
            job_application_user_id varchar(255) not null,
            job_application_is_paid boolean default(0),
            job_application_invoice_id varchar(255),
            
            foreign key (job_application_invoice_id) references invoice(invoice_id),
            foreign key (job_application_user_id) references user(user_id),
            foreign key (job_application_job_id) references job(job_id)
        )
        EOF);
    }

    static function jobs()
    {
        DB::pdo()->exec(<<<EOF
        create table if not exists job(
            job_id varchar(255) not null primary key,
            job_type varchar(100) default("FULLTIME"),
            job_flexibility varchar(100) default("PRESENTIAL"),
            job_title varchar(255) ,
            check  (job_type in ("FULLTIME", "PARTIAL-TIME")),
            check  (job_flexibility in ("PRESENTIAL", "ONLINE", "ONLINE-PRESENTIAL")),
            job_description text,
            job_required_competences json,
            job_required_documents json,
            job_application_fees int not null,
            job_sector_id varchar(255),
            job_createdAt datetime default(now()),
            job_updatedAt datetime default(now()),
            foreign key (job_sector_id) references sector(sector_id)
        )
        EOF);

        
    }

    static function invoices(){
        DB::pdo()->exec(<<<EOF
        create table if not exists invoice(
            invoice_id varchar(255) not null primary key,
            invoice_paid_at datetime,
            invoice_amount BIGINT,
            invoice_payment_reference varchar(100),
            invoice_payment_proof_file varchar(100)
        )
        EOF);
    }

    static function contact(){
        DB::pdo()->exec(<<<EOF
        create table if not exists contact(
            contact_id varchar(255) not null primary key,
            contact_fullname varchar(100) not null,
            contact_email varchar(100) not null,
            contact_phone varchar(100) not null,
            contact_description text  not null,
        )
        EOF);
    }


    static function fixtures()
    {
        global $default;

        $towns = [];
        for ($i = 0; $i < count($default["towns"]); $i++) {
            $towns[] = TownModel::inset([
                "town_name" => $default["towns"][$i]["town_name"],
                "town_country" => $default["towns"][$i]["town_country"],
                "town_description" => $default["towns"][$i]["town_description"],
            ]);
        }


        $sector = [];
        for ($i = 0; $i < \count($default['sectors']); $i++) {
            $sector[] = SectorModel::insertSector([
                "sector_name" =>  $default['sectors'][$i]["sector_name"],
                "sector_slug" => $default['sectors'][$i]["sector_slug"],
                "sector_iconUrl" =>  $default['sectors'][$i]["sector_iconUrl"],
                "sector_description" =>  "",
            ]);
        }

       

        $diplomas = [];
        for ($i = 0; $i < \count($default['diploma']); $i++) {
            $diplomas[] = DiplomeModel::create([
                "diploma_name" => $default['diploma'][$i]["diploma_name"],
                "diploma_code" => $default['diploma'][$i]["diploma_code"],
                "diploma_description" => $default['diploma'][$i]["diploma_description"],
            ]);
        }
        /*

        $universities = universities($faker, 50, null, $towns);

        $programs = [];
        for ($i = 0; $i < 50; $i++) {
            $programs[] = ProgramModel::create([
                "program_name" => $faker->name,
                "program_iconLogo" => "/assets/img/sections/desipline/foresty.png",
                "program_code" => strtoupper($faker->word),
                "program_goal_description" => $faker->realText(),
                "program_targeted_jobs" => '["' . implode(" ", $faker->words) . '"]',
                "program_job_callings" => '["' . implode(" ", $faker->words) . '"]',
                "program_admission_terms" => $faker->realText(),
                "program_sector_id" => $sector[random_int(0, \count($sector) - 1)]["sector_id"],
                "program_diploma_id" => $diplomas[random_int(0, \count($diplomas) - 1)]["diploma_id"]
            ]);
        }

        $programSubjects = [];
        for ($i = 0; $i < 50; $i++) {
            $programSubjects[] = ProgramSubjectModel::create([
                "program_subject_name" => $faker->name,
                "program_subject_code" => strtoupper($faker->word),
                "program_subject_description" => $faker->realText(),

                "program_subject_hours_duration" => random_int(10, 999),
                "program_subject_program_id" => $programs[random_int(0, \count($programs) - 1)]["program_id"]
            ]);
        }

        $admissionGroups = [];
        for ($i = 0; $i < 50; $i++) {
            $admissionGroups[] = AdmissionGroup::create([
                "admission_group_name" => $faker->name,
                "admission_group_code" => strtoupper($faker->word),
                "admission_group_description" => $faker->realText(),
                "admission_group_program_close_date" => $faker->dateTimeBetween("+11 month", "+1 year")->format("Y-m-d H:i:s"),
                "admission_group_program_start_date" => $faker->dateTimeBetween("now", "+2 month")->format("Y-m-d H:i:s"),
                "admission_group_scholarship_available" => random_int(0, 1),
                "admission_group_in_day_course" => random_int(0, 1),
                "admission_group_in_night_course" => random_int(0, 1),
                "admission_group_additionnal_info" => $faker->realText(),
                "admission_group_max_places" => random_int(5, 100),
                "admission_group_close_date" => $faker->dateTimeBetween("-1 month", "+1 month")->format("Y-m-d H:i:s"),
                "admission_group_start_date" => $faker->dateTimeBetween("-5 months", "-1 month")->format("Y-m-d H:i:s"),
                "admission_group_program_id" => $programs[random_int(0, \count($programs) - 1)]["program_id"],
                "admission_group_institution_id" => $universities[random_int(0, \count($universities) - 1)]["institution_id"]
            ]);
        }

        $programGroupMeta = [];
        for ($i = 0; $i < 50; $i++) {
            $programGroupMeta[] = AdmissionGroupMeta::create([
                "admission_group_meta_type" => ["RULE", "QUESTION"][random_int(0, 1)],
                "admission_group_meta_value" => $faker->words(3, true),
                "admission_group_meta_group_id" => $admissionGroups[random_int(0, \count($admissionGroups) - 1)]["admission_group_id"],
            ]);
        }

        $jobs=[];
        for($i = 0; $i<10; $i++){
            $jobs[]=JobModel::create([
                "job_title"=>implode(" ", $faker->words(3)),
                "job_type"=>["FULLTIME", "PARTIAL-TIME"][random_int(0, 1)],
                "job_flexibility"=> ["PRESENTIAL", "ONLINE", "ONLINE-PRESENTIAL"][random_int(0, 2)],
                "job_description"=>$faker->realText(),
                "job_required_competences"=>json_encode(explode(" ",  $faker->words(3, true))),
                "job_required_documents"=>json_encode(explode(" ",  $faker->words(3, true))),
                "job_application_fees" => random_int(10, 99),
                "job_sector_id"=>$sector[random_int(0, \count($sector) - 1)]["sector_id"]
            ]);
        }*/
    }
}


function universities($faker, $max, $parent, $towns)
{
    $all = [];
    for ($i = 0; $i < $max; $i++) {
        $types = ["UNIVERSITY", "OTHER", "SCHOOL"];
        $t = $towns[random_int(1, \count($towns) - 1)]["town_id"];
        $d = [
            "institution_name" => $faker->company,
            "institution_description" => $faker->realText(1000),
            "institution_logoUrl" => "/assets/img/sections/categories/python.png",
            "institution_isGroup" => $parent === null ? random_int(0, 1) : 0,
            "institution_tel" => $faker->phoneNumber,
            "institution_adress" => $faker->address,
            "institution_supported_languages" => 'fr,en',
            "institution_adress_additionnal" => $faker->address,
            "institution_website_url" => "https://",
            "institution_type" => $types[random_int(0, 2)],
            "institution_contactEmail" => $faker->email,
            "institution_parent" => $parent,
            "institution_town_id" => $t
        ];
        $d = InstitutionModel::insert($d);
        $all[] = $d;
        if ($d["institution_isGroup"]) {
            $all = [
                ...$all,
                ...universities($faker, random_int(1, 5), $d["institution_id"], $towns)
            ];
        }
    }
    return $all;
}
