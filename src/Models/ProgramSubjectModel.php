<?php

namespace App\Models;

use Core\DB;

class ProgramSubjectModel{
    static $table ="program_subject";
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
        return DB::pdo()->query("SELECT  * from ".self::$table." where diploma_id='$id'")->fetch();
    }

    static function getAll(){
        return DB::pdo()->query("SELECT * from diploma order by diploma_createdAt DESC")->fetchAll();
    }
}