<?php
namespace App\Models;

use Core\DB;

class JobModel{
    static $table ="job";
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
        return DB::pdo()->query("SELECT  * from ".self::$table." LEFT JOIN sector ON job.job_sector_id=sector_id WHERE job.job_sector_id IS NOT null  and job_id='$id'")->fetch();
    }

    static function getAll(){
        return DB::pdo()->query("SELECT * from ".self::$table." left join sector on sector_id = job_sector_id  order by job_createdAt DESC  ")->fetchAll();
    }

    static function getAllPaginated($page,$perpage=10,  $cols=null, $additionnalWhere="", $countAddCols=null, $countCallback = null ){
        return DB::getPaginateData(self::$table,$page,$perpage,(empty($cols) ? "*":""), " 
        LEFT JOIN sector ON job.job_sector_id=sector_id
        WHERE job.job_sector_id IS NOT null $additionnalWhere");
    }
}