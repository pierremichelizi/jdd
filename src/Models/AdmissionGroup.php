<?php
namespace App\Models;

use Core\DB;

class AdmissionGroup{
    static $table ="admission_group";
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
        return DB::pdo()->query("SELECT * from ".self::$table." left join program on admission_group_program_id = program.program_id where admission_group_id='$id'")->fetch();
    }

    static function getMetas($id){
        return DB::pdo()->query("SELECT * from admission_group_meta where admission_group_meta_group_id = '$id' ")->fetchAll();
    }

    static function getAll($addWhere=""){
        return DB::pdo()->query("SELECT * from ".self::$table." left join institution on institution_id  = admission_group_institution_id left join program on program_id =admission_group_program_id left join diploma on program.program_diploma_id = diploma_id  $addWhere")->fetchAll();
    }
}