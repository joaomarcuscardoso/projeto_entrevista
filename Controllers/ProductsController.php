<?php

namespace Controllers;

use \Core\Controller;

class ProductsController extends Controller
{

    public function index()
    {
        $array = array();


        $this->loadTemplate("products", $array);
    }
}
