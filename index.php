<?php
//FRONT CONTROLLER
//namespace Application\Controllers;


use Application as A;
require_once "config/app_config.php";
require_once SITE_ROOT."core/autoload.php";

//print_r ($_REQUEST);
//echo "<br>";
//echo phpversion();

//echo "index";
//echo "<br>";
/*
require_once "config/app_config.php";
require_once "core/Application.php";
require_once "core/Router.php";
//

$arr = array(

    //регулярное выражение запроса => контроллер/action/параметры
    'product/[0-9]+' => 'product/view/$1', //ProductCtrl.php, actionView(1 - не знаю)
    'silver-hoof' => 'silver-hoof/index' // actionIndex в SiteController
);
foreach ($arr as $key => $value){

    echo $key;
    echo "<br>";
    echo $value;
    echo "<br>";
}
*/

//echo $_GET["user_error_message"];
//echo "<hr>";
//echo preg_replace("~reg~", "РЕГ", "regулировщик");
//echo $_GET["system_error_message"];

Application\App::db_connect();

//Вызов роутера
$router = new Application\Router();
$router->run();


?>



