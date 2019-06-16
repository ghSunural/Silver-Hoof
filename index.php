<?php
//FRONT CONTROLLER
//namespace Application\Controllers;
 
 
 //изменения
use Application as A;
require_once "config/app_config.php";
require_once SITE_ROOT."core/autoload.php";

Application\App::db_connect();

//Вызов роутера
$router = new Application\Router();
$router->run();


?>



