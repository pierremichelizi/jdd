<?php
namespace App\Models;

use Core\DB;

class AdmissionGroupMeta{
    static $table ="admission_group_meta";
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
        return DB::pdo()->query("SELECT  * from ".self::$table." where admission_group_meta_id='$id'")->fetch();
    }

    static function getMetasForGroup($id, $addWhere=""){
        return DB::pdo()->query("SELECT * from ".self::$table." left join admission_group on admission_group_id = admission_group_meta_group_id where admission_group_id='$id'  $addWhere")->fetchAll();
    }

    static function getAll(){
        return DB::pdo()->query("SELECT * from ".self::$table." left join admission_group on admission_group_id = admission_group_meta_group_id")->fetchAll();
    }
}