<?php
require_once "../config/app_config.php";
$res = $_REQUEST['btn'];
$btn_value = $res;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Silver-Hoof</title>

    <script type="text/javascript" src="mainPage.js" async></script>
    <!-- <script type="text/javascript" src="css/bootstrap/dist/js/bootstrap.min.js" async></script>-->
    <link href="../css/styles.css" rel="stylesheet">
    <!--<link href="css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->


</head>
<article class="goods_view block">

    <div class="product_article">

        <p class="product_item product_article">
            Артикул
        </p>

    </div>

    <div class="product_img">
        <img class="product_face-img" src="index.jpg"
             title="" alt="фото" width="222" height="227">
    </div>
    <div class="description__section">
        <a class="href product__item product__href" href="">
            Кольцо с аметистом
        </a>
        <p class="product_item product_category">
            <?php
            echo $btn_value;
            ?>
        </p>

        <p class="material">
            &#171;Украшения из серебра и камня&#187;
        </p>


        <div class="product__item product__price">
            <div class="product__price_new-price product__price_rub">449.00</div>
            <div class="product__price_old-price product__price_dol">10.99</div>
        </div>
    </div>
    <section class="product__item description__section">
        <p class="product__item product__delivery">БЕСПЛАТНАЯ доставка</p>
        <h1 class="product__item label-features">Описание товара</h1>
        <p class="product__item product__features">
        <p>Особенность (фича)</p>

        Уникальная гармония

        <p>Знак зодиака</p>

        Близнецы, Скорпион

    </section>
</article>

