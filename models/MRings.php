<?php

namespace Application\Models;

//MRings M - model

use Application as A;
use Application\Models\Databases as DB;


class MRings extends Model_base
{

    private static $model_data_list = array();

    public static function getRings()
    {
        $link = A\App::$db_connection->getLink();
        $rings = DB\ORM::getRings($link);

        while ($row = mysqli_fetch_row($rings)) {

            $ring = new TRing();

            $ring->catalog_number = $row[0];
            $ring->article = $row[1];
            //echo $ring->article;
            //echo " ";
            $ring->size = $row[2];
            //echo $ring->size;
            // echo "<br>";
            $ring->stoneSize = $row[3];
            $ring->feature = $row[4];

            $photos = DB\ORM::getMainPhoto($link, $ring->article);
            $photo_row = mysqli_fetch_row($photos);
            $ring->mainPhoto = IMG_URL_PREFIX . $photo_row[2];

            $general_data = DB\ORM::getGeneralData($link, $ring->article);
            $general_data_row = mysqli_fetch_row($general_data);
            $ring->title = $general_data_row[2];
            $ring->unit = $general_data_row[3];
            $ring->price = $general_data_row[4];
            $ring->inStock = $general_data_row[5];
            $ring->isNew = $general_data_row[6];
            $ring->sale = $general_data_row[7];
            $ring->placementDate = $general_data_row[8];

            array_push(self::$model_data_list, $ring);
            //$mineralsArr[] = $row[0];
            //echo "{$row[0]}";
            // echo "<br>";
        }

        return self::$model_data_list;
    }

}