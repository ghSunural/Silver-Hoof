<?php

namespace Application\Views;

class View_base
{





    function generate($view_content,$view_template,$data = 0)
    {

        require $view_template;
    }


}

?>