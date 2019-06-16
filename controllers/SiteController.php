<?php

namespace Application\Controllers;

use Application as A;
use Application\Models as M;
use Application\Views as V;

use Application\Models\Databases as DB;

//class_alias("Application\\Controllers\\SiteController", "site", true);
class SiteController extends BaseController
{

    public function actionIndex()
    {
        $goods = M\MRings::getRings();
        $this->models['goods'] = $goods;

        $minerals = M\MMineral::getMinerals();
        $this->models['minerals'] = $minerals;



        $this->views['site'] = (SITE_ROOT) . "views/site/site_view.php";
        //$view = file_get_contents($layout_file);
        $this->render($this->views['site']);

    }


}

?>