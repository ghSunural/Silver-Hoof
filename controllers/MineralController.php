<?php


namespace Application\Controllers;


class mineralController extends BaseController
{

    private $layout = (SITE_ROOT) . "views/elements/view_goods_max.php";
    //private $views = array();

    public function actionIndex()
    {

       // echo $mineral_name;
        //  $view = file_get_contents($layout_file);
        $this->render($this->layout);


    }

    public function render($layout)
    {
        require_once $layout;
    }


}

?>