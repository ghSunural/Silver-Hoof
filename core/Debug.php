<?php


namespace Application;


class Debug
{
    public static function print_array($array)
    {
        if (DEBUG_MODE) {

            echo "<pre>";
            print_r($array);
            echo "</pre>";
            echo "<br>";

        }
    }

    /**
     * @return cap;
     */
    public static function print_var($caption, $var)
    {
        if (DEBUG_MODE) {
            // echo "<br>" .$caption. ": " . $var . "<br>";
            echo "<pre>";
            echo $caption . ": " . $var;
            echo "</pre>";
        }

    }


}

?>