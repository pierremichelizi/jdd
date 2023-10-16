<?php
namespace App\Models;

use Core\DB;

class JobApplicationModel{
    static $table ="job_application";
    static function create($params){
        return DB::prepareInsetInto(self::$table, $params)->flush();
    }

    static function update($params){
        return DB::prepareUpdate(self::$table, $params)->flush();
    }

    static function delete($params){
        return DB::prepareDelete(self::$table, $params)->flush();
    }

    static function get($id){
        return DB::pdo()->query("SELECT  * from ".self::$table." LEFT JOIN job on job_id =  job_application.job_application_job_id WHERE job_application_id='$id'")->fetch();
    }

    static function getForUser($userid){
        return DB::pdo()->query("SELECT  * from ".self::$table." left join user on user.user_id = job_application_user_id left join job on job_id = job_application_job_id  WHERE job_application_user_id='$userid'")->fetchAll();
    }

    static function getAll(){
        return DB::pdo()->query("SELECT * from ".self::$table." left join job on job_application_job_id = job_id  order by job_createdAt DESC  ")->fetchAll();
    }

   
}