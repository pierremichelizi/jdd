<?php

namespace App\Models;

use Core\DB;

use function App\debug;

class UserModel
{
    static $table="user";

    static function insertUser($params = [])
    {
       return DB::prepareInsetInto("user", $params)->flush();
    }

    static function getByEmail($email){
        return DB::pdo()->query("SELECT  * from ".self::$table." where user_email='$email'")->fetch();
    }

    static function findUserByEmail($email)
    {
        return DB::pdo()->query("SELECT * FROM user where user_email = '$email'")->fetch();
    }

    static function get($id)
    {
        return DB::pdo()->query("SELECT * FROM user where user_id = '$id'")->fetch();
    }

    static function getAll()
    {
        return DB::pdo()->query("SELECT * FROM user order by user_createdAt desc")->fetch();
    }

    static function update($params){
        return DB::prepareUpdate(self::$table, $params)->flush();
    }

}
