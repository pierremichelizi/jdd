<?php

namespace App\Models;

use Core\DB;

class TownModel
{
    static $tableName="town";

    static function inset($params = [])
    {
        return DB::prepareInsetInto(self::$tableName, $params)->flush();
    }

    static function get($townName, $country){
        return DB::pdo()->query("SELECT * from town where town_name='$townName' and town_country='$country'")->fetch();
    }

    static function getAll($columnAdd="",$addStmt=""){
        $query="SELECT ".(!empty($columnAdd) ?$columnAdd:"*")." from ".self::$tableName." $addStmt";
        return DB::pdo()->query($query)->fetchAll();
    }

    static function getAllDistinctCountries(){
        return DB::pdo()->query("SELECT  DISTINCT town_country from town")->fetchAll();
    }

  
}
