<?php

use Application as A;
use Application\Views as V;

$goods = $this->models['goods'];
A\Debug::print_array($goods);


function getBarMini($goods)
{

    $bar = '';

    foreach ($goods as $product) {

        $article = $product->article;
        $img_url = $product->mainPhoto;
        $product_type = $product->title;
        //$materials = $product->materials;
        $materials = "";
        $price = $product->price;

        //require_once SITE_ROOT."views/elements/view_goods_mini.php";
        $src = "\"" .$img_url."\"";

        //A\Debug::print_var("src", $src);
        // "http://localhost/silver-hoof/resource/images/photo/19030104_авантюрин серьги 26х18 45 2100/P1080340-1.jpg"
        $next = <<< EOL
        
        <article class="block block_inline product_panel_mini">

    <div class="product_article main_text_color-1">
        Артикул: {$article}
        <a href=""><span class="fa fa-shopping-cart fa-fw fa-3x"></span></a>
    </div>
    <div class="product_img img_container">
        <a class="href product__href" href="">
            <img class="product_face-img" src={$src} 
                 title="title" alt="фото" width=300px height="">
        </a>
    </div>

    <div class="description block">

        <div class ="main_text_color-1">
            <a href="" class="product__href">
                {$product_type}
            </a>
        </div>
        <div class ="main_text_color-1">
            {$materials}
        </div>
        <div class="product_price block_inline">
            {$price} <span class="fa fa-ruble fa-1x"></span>
        </div>
    </div>
</article>
        
        
EOL;

        $bar = $bar . $next;
    }

    return $bar;
}

;

$bar_view_goods_mini = getBarMini($goods);

$bar_minerals = V\Html::getFormsBar($this->models['minerals']);
A\Debug::print_array($this->models['minerals']);

$styles[0] = SITE_URL . "css/styles.css";
$head_as_html = V\Html::getView_Head("Silver-Hoof", $styles);
$footer_as_html = V\Html::getView_Footer("Footer block block_wrap main_bkg_color-1", "footer content")

?>
<!DOCTYPE html>
<html lang="ru">
<?= $head_as_html ?>
<body class="block block_wrap">

<nav class="Main_toolbar block block_wrap fl fl-w">
    Главная страница
    <div class="block block_inline">
        <!-- <label for="search">Найти</label> -->
        <a href=""><span class="fa fa-search fa-2x"></span></a>
        <input id="search" name="search" type="search">

    </div>
</nav>

<header class="Header block block_wrap fl fl-w main_bkg_color-1">

    <div class="logo block block_inline"></div>


    <div class="logo__title-site block block_inline main_text_color-2">Silver-Hoof</div>


    <div class="contact-info block block_inline">
        <div class="">
            <a href="tel:+89226162914" class="tel"><span class="fa fa-phone fa-2x"></span> 8-922-616-29-14</a>
        </div>
    </div>
</header>
<main class="Main block block_wrap fl fl_nw">
    <aside class="side-bar block block_wrap">

        <nav class="catalog block">
            <a href='admin'>Панель администратора<a>
                    <ul>
                        Каталог
                        <li>Украшения из серебра и камня</li>
                        <li>Камнерезные изделия</li>
                        <li>Кабашоны</li>
                        <li>Минералы</li>
                    </ul>
        </nav>


        <div class="block">
            Следующая ярмарка


        </div>

        <div class="block reclame">
            Рекламный баннер<br>
            <a href="https://www.livemaster.ru" target="_blank">Ярмарка мастеров</a>
        </div>


    </aside>
    <section class="content block block_wrap">

        <div class="block fl fl_w">
            <?= $bar_view_goods_mini; ?>
        </div>

        <nav class="block fl fl_w">
            <?= $bar_minerals; ?>
        </nav>


    </section>


</main>

<?= $footer_as_html ?>

<a href="#openModal">Открыть модальное окно</a>
<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2>Модальное окно</h2>
        <p>Пример простого модального окна,
            которое может быть создано с использованием CSS3.</p>
        <p>Его можно использовать в широком диапазоне, начиная от вывода сообщений
            и заканчивая формой регистрации.</p>
    </div>
</div>

</body>
</html>

