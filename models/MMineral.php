<?php

namespace Application\Models;

use Application as A;
use Application\Models\Databases as DB;

class MMineral extends Model_base
{

   private static $model_data_list = array();

    public static function getMinerals()
    {
       $link = A\App::$db_connection->getLink();

       $result = DB\ORM::getMinerals($link);

        while ($row = mysqli_fetch_row($result)) {

            array_push(self::$model_data_list, $row[0]);
            //$mineralsArr[] = $row[0];
            //echo "{$row[0]}";
            // echo "<br>";
        }


        return self::$model_data_list;

    }

}

?>