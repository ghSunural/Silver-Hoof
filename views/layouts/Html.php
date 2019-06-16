<?php

namespace Application\Views;

class Html
{
    protected $title;
    protected $styles = array();
    protected $scripts = array();

    protected $page;
    protected $head;
    protected $header;
    protected $content;
    protected $footer;
    protected $sidebar;


    public function getView_UTF($UTF_code)
    {
        return "&#" . $UTF_code . ";";
    }

    public function display_page()
    {
        //$this->display_head();
        $this->display_header();
        $this->display_content();
        //$this->display_footer();
    }

    public static function getView_Head($title, $styles = array(), $scripts = array())
    {
        $styles_as_html = "";
        if (($styles)) {

            foreach ($styles as $row) {

                $html_string = "<link href=\"{$row}\" rel=\"stylesheet\">";
                $styles_as_html .= $html_string . "\n";
            }
        }

        $scripts_as_html = "";
        if (($scripts)) {

            foreach ($scripts as $row) {
                $html_string = "<script type=\"text/javascript\" src=\"{$row}\" async></script>";
                $scripts_as_html .= $html_string . "\n";
            }
        }

        $head = <<< EOL
        <head>
             <meta charset="utf-8">
             <title>{$title}</title>
             {$styles_as_html}
             {$scripts_as_html}  
        </head>
EOL;

        return $head;
    }


    public function display_header()
    {


    }

    static function getGoodsBar($product){

        $bar = '';

        foreach($product as $value){
            $prod_as_html = self::generateView_productMini($css_class = "block", $unit = "");
            $bar = $bar .  $prod_as_html;
        }

        return $bar;
    }

    static function generateView_productMini($css_class = "", $unit = ""){

        $productMini_as_html = <<< EOL
        <div class="{$css_class}">
            
            
            
            
            
         </div>
EOL;



        $bar_view_goods_mini = function ($goods) {

            foreach ($goods as $product) {

                $article = $product->article;
                $img_url = $product->img_url;
                $product_type = $product->product_type;
                $materials = $product->materials;
                $price = $product->price;

                //require_once SITE_ROOT."views/elements/view_goods_mini.php";
            }
        };

        return $productMini_as_html;


    }

    static function getFormsBar($arr)
    {

        $bar = '';
        // views/elements/view_goods_max.php
        //core/Router.php
        // (A\SITE_URL) . "core/Router.php";

        $form_method = "Post";
        $button_name = "minerals";

        $button_css_class = "href-button href-button_minerals main_text_color-1";

        foreach ($arr as $value) {

            $form_action = "minerals/" . $value;

            $button_title = $value;
            $button_value = $value;

            $button = new CButtonRef($form_action, $form_method,

                $button_css_class,
                $button_name,
                $button_title,
                $button_value);

            $control_as_html = $button->getControl();

            $bar = $bar . $control_as_html;
        }


        return $bar;

    }

    public function display_content()
    {


    }

    public static function getView_Footer($css_class = "", $content = "")
    {
        $footer = <<< EOL
        <footer class="{$css_class}">
            {$content};
         </footer>
EOL;
        return $footer;
    }

}