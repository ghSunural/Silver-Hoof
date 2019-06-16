<?php

namespace Application\Models;

use Application as A;
use Application\Models\Databases as DB;


class TRing
{
    public $category = 'кольца';
    public $product_type = 'кольцо';
    public $catalog_number;
    public $article;

    public $title;
    public $unit;

    public $price;
    public $inStock;
    public $isNew;
    public $sale;

    public $placementDate;

    public $size;
    public $stoneSize;
    public $feature;

    public $minerals = array();
    public $metals = array();

    public $photos = array();
    public $mainPhoto;

    public function __construct()
    {

    }
}