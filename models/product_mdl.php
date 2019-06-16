<?php


namespace Application\Models;

use Application as A;
use Application\Models\Databases as DB;

class Product_mdl
{

    private $link;
    //public instance

    public function __construct()
    {

       $this->link = A\application::$db_connection->getLink();
    }

    public function get_mineralsList()
    {

        $result = DB\orm::getMinerals($this->link);

        while ($row = mysqli_fetch_row($result)) {

            array_push($list, $row[0]);
            //$mineralsArr[] = $row[0];
            //echo "{$row[0]}";
            //echo "<br>";
        }

        return $list;
    }

}

?>