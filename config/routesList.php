<?php
//namespace Application;
return array(

    //регулярное выражение запроса => контроллер/action/параметры

    'minerals/.*' => 'MineralController/actionIndex',
    'product/([0-9]+)' => 'product/view/$1', //ProductCtrl.php, actionView(1 - не знаю)
    '/admin/site' => 'SiteController/actionIndex',
    'silver-hoof/admin' => 'AdminController/actionIndex',
    'error' => 'errorController/actionIndex',



   // 'silver-hoof/' => 'SiteController/actionIndex', // actionIndex в SiteController
    '' => 'SiteController/actionIndex' // actionIndex в SiteController
    //silver-hoof
);

//return $routes;

//RewriteCond %{REQUEST_FILENAME} !-f
//RewriteCond %{REQUEST_FILENAME} !-d
?>
