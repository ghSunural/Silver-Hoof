<?php

//const SITE_ROOT = "C:/xampp/htdocs/silver-hoof/";
//const SITE_URL = "http://localhost/silver-hoof/";

const IMG_URL_PREFIX = "http://localhost/silver-hoof/resource/images/photo/";


//http://localhost/silver-hoof/

//$SITE_ROOT = $_SERVER['DOCUMENT_ROOT'];
//$root_dir = 'public_html';
//define ('SITE_ROOT', explode($root_dir, __DIR__)[0].$root_dir.'/');

const SITE_URL= "//nadmilk.000webhostapp.com/";

const SITE_ROOT = "/public_html/";
//const SITE_ROOT = "/storage/ssd2/995/8591995/public_html/";

//$_SERVER['DOCUMENT_ROOT'];
//Отчет об ошибках PHP
define("DEBUG_MODE", false);


if (DEBUG_MODE) {
    ini_set('display_errors',1);
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

function debug_print($message)
{
    if (DEBUG_MODE) {
        echo $message;
    }
}

?>