<?php
namespace App\Models;

use Core\DB;

class InstitutionModel extends DB{
    static $tableName="institution";

    static function getAll(){
        return DB::pdo()->query("SELECT * from institution  where institution_parent is null   order by institution_createdAt desc ")->fetchAll();
    }

    static function getAllUsable(){
        return DB::pdo()->query("SELECT * from institution  where institution_isGroup = 0    order by institution_createdAt desc ")->fetchAll();
    }

    static function getAllCentersOf($id){
        return DB::pdo()->query("SELECT * from institution  where  institution_parent = '$id' order by institution_createdAt desc")->fetchAll();
    }

    
    static function get($id){
        return DB::pdo()->query("SELECT institution.*, town.town_name as institution_town, town.town_country as institution_country  from institution, town  where institution_id='$id' and town.town_id=institution_town_id")->fetch();
    }

    static function insert($params = [])
    {
        return self::prepareInsetInto(self::$tableName , $params)->flush();
    }

    static function update($params = []){
        return self::prepareUpdate(self::$tableName , $params)->flush();
    }


    static function delete($id){
        return self::prepareDelete(self::$tableName , $id)->flush();
    }

    static function deleteCenters($id){
        return DB::pdo()->query("DELETE FROM  institution where institution_parent = '$id'")->fetch();
    }

    static function getPaginated($currentPage,$per_page=10, $columnStmt="", $additionStmt=""){
        return DB::getPaginateData(self::$tableName, $currentPage,$per_page, $columnStmt, $additionStmt);
    }

    static function getSupportedLanguages(){
        return DB::pdo()->query("SELECT institution_supported_languages, LENGTH(institution_supported_languages) as len from institution  order by len desc limit 1 ")->fetch()["institution_supported_languages"];
    }



}