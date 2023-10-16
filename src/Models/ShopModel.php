<?php

namespace App\Models;

use Core\DB;

use function App\debug;

class ShopModel
{


    function insertShop($params = [])
    {
        return DB::prepareInsetInto("shop", $params)->flush();
    }

  
}
