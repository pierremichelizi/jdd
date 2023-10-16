<?php
namespace App\Models;

use Core\DB;

class InvoiceModel{
    static $table ="invoice";
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
        return DB::pdo()->query("SELECT * from ".self::$table." left join application on application_invoice_id = invoice_id left join job_application on job_application_invoice_id = invoice_id  where invoice_id='$id' ")->fetch();
    }


    static function getAll($addWhere=""){
        return DB::pdo()->query("SELECT * from ".self::$table)->fetchAll();
    }
}