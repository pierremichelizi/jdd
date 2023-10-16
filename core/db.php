<?php

namespace Core;

use DateTime;
use PDO;

require_once("../migrations/tables.php");

class DB
{
    static $host = 'localhost';
    static $port =  '3306';
    static $db_name = 'manager';
    static $user =  'root';
    static $db_pass =  '';
    static $pdo = null;

    function __construct(private \PDOStatement $stmt, private $values)
    {
    }



    function flush()
    {
        foreach ($this->values as  $key => &$value) {
            $this->stmt->bindParam(":" . $key, $value);
        }
        if ($this->stmt->execute()) {
            return $this->values;
        }
        throw new \PDOException("Request failed");
    }


    static function init()
    {
        global $config, $env;
        self::$db_name = $config["database"];
        self::$port = $config["port"];
        self::$host = $config["host"];
        self::$user = $config["user"];
        self::$db_pass = $config["password"];
        if ($env["ENV"] === "DEV") {
            \TableMigration::migrate();
        }
    }

    static function prepareInsetInto($tableName,  $params)
    {
        $params[$tableName . "_id"] = self::uuid();
        //$params[$tableName."_createdAt"] =(new DateTime())->format("Y-m-d H:i:s");
        $query = "INSERT INTO $tableName (" . implode(",", array_keys($params)) . ") VALUES(:" . implode(", :", array_map(fn ($x) => ($x), array_keys($params))) . ")";
        return new DB(DB::pdo()->prepare($query), $params);
    }

    static function prepareUpdate($tableName,  $params)
    {
        $data = $params;
        //$params[$tableName."_updatedAt"] =(new DateTime())->format("Y-m-d H:i:s");
        unset($data[$tableName . "_id"]);
        
        $query = "UPDATE $tableName SET " . implode(", ", array_map(fn ($k) => ("{$k} = :{$k}"), array_keys($data))) . " where {$tableName}_id = '".$params[$tableName . "_id"]."'";

        return new DB(DB::pdo()->prepare($query), $data);
    }

    static function prepareDelete($tableName,  $id)
    {
        $data = [
            "{$tableName}_id" => $id
        ];
        $query = "DELETE FROM $tableName where {$tableName}_id =:{$tableName}_id";
        return new DB(DB::pdo()->prepare($query),  $data);
    }

    static function pdo(): \PDO
    {
        try {
            
            if (isset(self::$pdo)) {
                return self::$pdo;
            }
            self::$pdo = new \PDO(
                "mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$db_name,
                self::$user,
                self::$db_pass,
                array(
                    \PDO::ATTR_EMULATE_PREPARES => false,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_PERSISTENT => true
                )
            );
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return self::$pdo;
        } catch (\PDOException $e) {
            var_dump($e);
            die("PDO failed Unable");
        }
    }

    static function  uuid($data = null)
    {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    static function removeTable($tableName)
    {
        DB::pdo()->query("DROP TABLE $tableName");
    }

     static function getPaginateData($tableName, $currentPage, $per_page = 10, $columnStmt = "", $additionStmt = "", $getStatmt=false, $countadditionCol="", $countcallback=null)
    {

        try {
            // Calculate total number of records in the user table
            $total_records = self::count($tableName, $additionStmt, $countadditionCol, $countcallback);
            // Calculate total number of pages
            $total_pages = ceil($total_records / $per_page);
            $total_pages =$total_pages > 0 ? $total_pages : 1;

            // Calculate the offset for the query
            $page = intval($currentPage >= 1 ?  ($currentPage <= $total_pages ? $currentPage :  $total_pages) : 1);
            
            $offset = intval($currentPage >= 1 ?  ($page - 1) * $per_page  : 1);
            $query = "SELECT " . (empty($columnStmt) ? "*" : $columnStmt) . " FROM $tableName $additionStmt   LIMIT :offset, :per_page";

            $statement = self::pdo()->prepare($query);
            $statement->bindParam(':offset', $offset, PDO::PARAM_INT);
            $statement->bindParam(':per_page', $per_page, PDO::PARAM_INT);
            $statement->execute();
            $data = $getStatmt ?$statement: $statement->fetchAll();
            
            $data= [
                $page??1,
                $data??[],
                $total_records??0,
                $total_pages??1,
            ];
            return $data;
            
        } catch (\PDOException $e) {
            debug($e);
        }
        return [
            "page"=>$page??1,
            "data"=>$data??[],
            "total_records"=>$total_records??0,
            "total_pages"=>$total_pages??1,
        ];
    }

    static function count($tableName, $additionStmt = "", $additionCol="", $callback=null)
    {
        $query="SELECT $additionCol  count(*)  as total FROM $tableName $additionStmt";
        $total_records_result = self::pdo()->query($query)->fetch();
        if(!empty($callback)){
            $callback( $total_records_result );
        }
        return $total_records_result["total"];
    }
}
