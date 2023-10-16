<?php

namespace App\Models;

use Core\DB;
use stdClass;

class SectorModel
{
    static $tableName="sector";


    static function insertSector($params = [])
    {
        return DB::prepareInsetInto(self::$tableName , $params)->flush();
    }

    static function updateSector($params = []){
        return DB::prepareUpdate(self::$tableName , $params)->flush();
    }

    static function getSector($id){
        return DB::pdo()->query("SELECT  * from sector where sector.sector_id='$id'")->fetch();
    }

    static function getAll(){
        return DB::pdo()->query("SELECT  * from sector  order by sector_createdAt DESC ")->fetchAll();
    }

    static function deleteSector($id){
        return DB::prepareDelete(self::$tableName , $id)->flush();
    }
  
}
