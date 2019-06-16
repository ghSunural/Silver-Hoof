<?php


namespace Application\Controllers;

use Application\Models as M;
class_alias("products_ctrl", "product");
class ProductsController
{

    private $viewItem_mini;

    private $viewMineralHref;
    private $viewMineralBar;

    private $viewProductsBar;

    //find_by_minerals()//
    public function action_get_categoryList()
    {

    }


    public function action_get_mineralsList()
    {
        return (new M\Product_mdl())->get_mineralsList();
    }


    public function action_getViewList_mineralsBar()
    {
        //
    }


    public function action_getViewList_goodsByMinerals()
    {
        //
    }


}

?>