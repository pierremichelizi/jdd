<?php
namespace App\Models;

use Core\DB;

class ContactModel{
    static $table ="contact";
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
        return DB::pdo()->query("SELECT * from ".self::$table)->fetchAll();
    }
}