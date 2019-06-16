<?php

namespace Application\Models;

class CProduct
{
    protected $photo_url;
    protected $article;
    protected $price;
    protected $material = array();
    protected $sizes;

    function __construct(){
    }
    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @return mixed
     */
    public function getPhotoUrl()
    {
        return $this->photo_url;
    }

    /**
     * @param mixed $photo_url
     */
    public function setPhotoUrl($photo_url)
    {
        $this->photo_url = $photo_url;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return mixed
     */
    public function getSizes()
    {
        return $this->sizes;
    }

    /**
     * @param mixed $sizes
     */
    public function setSizes($sizes)
    {
        $this->sizes = $sizes;
    }

}
?>