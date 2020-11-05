<?php

namespace App\Controller;

class BaseController {

    protected function render($templateName, array $templateData = [], $baseLayout = "base.html.php"){
        extract($templateData);
        ob_start();
        require "View/" . $templateName;
        $content = ob_get_clean();
        require "View/" . $baseLayout;
    }

}