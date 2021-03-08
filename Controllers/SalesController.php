<?php

namespace Controllers;

use \Core\Controller;


class SalesController extends Controller
{

    public function index()
    {
        $array = array();

        $this->loadTemplate("sales", $array);
    }
}
