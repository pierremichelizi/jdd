<?php
namespace App\Models;

use Core\DB;

class ApplicationModel{
    static $table ="application";
    static function create($params){
        return DB::prepareInsetInto(self::$table, $params)->flush();
    }
    

    static function update($params){
        return DB::prepareUpdate(self::$table, $params)->flush();
    }

    static function delete($id){
        return DB::prepareDelete(self::$table, $id)->flush();
    }

    static function get($id){   
        return DB::pdo()->query("SELECT * from ".self::$table."  where application_id='$id'")->fetch();
    }

    static function getFull($id){
        return DB::pdo()->query( "SELECT * from application left join admission_group on application_group_id = admission_group_id  left join institution on institution_id = admission_group_institution_id  left join program on program_id = admission_group_program_id WHERE application_id ='$id'")->fetch();
       
    }

    static function getMetas($id){
        return DB::pdo()->query("SELECT * from ".self::$table." where admission_group_meta_group_id = '$id' ")->fetchAll();
    }

    static function getMeta($metaId){
        return DB::pdo()->query("SELECT * from admission_group_meta where admission_group_meta_id = '$metaId'")->fetch();
    }

    static function getAll($addWhere=""){
        return DB::pdo()->query("SELECT * from ".self::$table." $addWhere")->fetchAll();
    }

    static function getAllFor($userId){
        return self::getAll("left join admission_group on application_group_id = admission_group_id  left join institution on institution_id = admission_group_institution_id  left join town on town_id =institution_town_id  left join program on program_id = admission_group_program_id WHERE application_user_id ='$userId' order by application_meta_createdAt desc");
    }
}