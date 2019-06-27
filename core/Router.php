<?php

namespace Application;


use Application\Controllers as C;
use Application as A;

class Router
{

    private $namespace = "Application\\Controllers\\";
    private $routes;


    public function __construct()
    {        //список маршрутов
        $this->routes = require_once(SITE_ROOT . "core/config/routesList.php");
    }

    /**
     * find controller
     * @return void_none
     * @param string $none
     */
    public function run()
    {
        //echo "<br>".'в роутере';

        // print_r($this->routes);

        //1. получить строку запроса
        $uri = $this->getURI();

        //A\Debug::print_var('uri', $uri );

        //2. Проверить наличие запроса в Листе маршрутов $routes
        $route = $this->findRouteAtRoutesList($uri, $this->routes);

        //A\Debug::print_var('route', $route);


        //3. Распарсить - получить имнена классов контроллеров и action с параметрами
        $route_as_array = $this->parseInnerPath($route);

        //echo "<br>" . "route_as_array: ";
        //print_r($route_as_array);

        $controllerClassName = $route_as_array['ctrl'];
        $action = $route_as_array['action'];
        $params = $route_as_array['params'];

        //4. Подлючить соответствеющий класс контроллера
        // создать его экземпляр и вызвать метод action
        $controllerClassName = ($this->namespace) . $controllerClassName;
        // echo "<br>";
        //echo "Контроллер " . $controllerClassName;

        // $controller = new C\SiteController();

        $controller = new $controllerClassName;

        call_user_func_array(array($controller, $action), $params);

    }

    private function getURI()
    {
        //ЗАПРОС
        $uri = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

        A\Debug::print_var("URI: ", $uri);

        if (!empty($uri)) {
            //c обрезанными /
            return trim($uri, '/');
        }

        return '';
    }

    private function findRouteAtRoutesList($uri, $routesList)
    {
        foreach ($routesList as $UriPattern => $path) {

            if (preg_match("~$UriPattern~", $uri)) {
                //заменить внутренний адрес с паттерна на соответввеющий путь из листа
                //во всем uri

                // echo "UriPattern  path " . "<br>" . $UriPattern . "  =>  " . $path;
                $innerPath = preg_replace("~UriPattern~", $uri, $path);

                // echo "<br>";
                //  echo "innerPath " . $innerPath;

                A\Debug::print_var("route - innerpath", $innerPath);

                return $innerPath;
            }
        }

        // return "";
    }

    private function parseInnerPath($innerPath)
    {
        //распарсить на контроллер экшен и параметры
        $route_as_array = array();

        $partsArr = explode('/', $innerPath);

        A\Debug::print_array($partsArr);

        //алиас контроллера - первый до /
        $ctrlName = array_shift($partsArr);
        $route_as_array['ctrl'] = $ctrlName;
        //суффикс ."Controller"
        //потом action
        $action = array_shift($partsArr);
        //префикс "action".
        $route_as_array['action'] = ucfirst($action);

        //остатки - параметры для action
        $route_as_array['params'] = $partsArr;

        return $route_as_array;
    }

}


?>