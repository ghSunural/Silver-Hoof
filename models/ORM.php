<?php

namespace Application\Models\Databases;

class ORM
{
    static function getTablesList($link)
    {

        return mysqli_query($link, "SHOW TABLES;");
    }

    static function getMinerals($link)
    {

        return mysqli_query($link, "SELECT title FROM TMinerals");
    }


    static function getRings($link)
    {
        return mysqli_query($link, "SELECT * FROM vrings");
    }

    static function getMainPhoto($link, $article)
    {

        return mysqli_query($link, "select * from v_article_to_photo where article=" . $article . " and main_marker=1;");
        // select * from v_article_to_photo where article=19030102;
    }

    static function getPhoto($link, $article)
    {

        return mysqli_query($link, "select * from v_article_to_photo where article=" . $article);
        // select * from v_article_to_photo where article=19030102;
    }

    static function getGeneralData($link, $article)
    {

        return mysqli_query($link, "select * from TCatalog where article=" . $article);
        // select * from v_article_to_photo where article=19030102;
    }


    static function select($link, $fields, $table)

    {
        return mysqli_query($link, "SELECT {$fields} FROM {$table}");
        //  return mysqli_query($link, "SELECT * FROM
        //  ttable WHERE `column` LIKE '%{$needle}%'");
    }

}

?>