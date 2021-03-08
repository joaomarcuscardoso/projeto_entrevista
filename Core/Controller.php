<?php

namespace Core;

class Controller
{
    public function loadView($viewName, $viewData = array())
    {
        extract($viewData);
        include "Views/" . $viewName . ".php";
    }

    public function loadTemplate($viewName, $viewData = array())
    {
        include "Views/template.php";
    }

    public function loadViewInTemplate($viewName, $viewData = array())
    {
        extract($viewData);
        include "Views/" . $viewName . ".php";
    }
}
