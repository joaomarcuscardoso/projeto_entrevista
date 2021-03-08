<?php

namespace Controllers;

use \Core\Controller;

use \Models\Products;
use \Models\Sales;

class HomeController extends Controller
{

    public function index()
    {
        $array = array();

        $Sales = new Sales();
        $Products = new Products();
        $array["countSales"] =  $Sales->contAll();
        $array["countProducts"] =  $Products->contAll();

        $this->loadTemplate("home", $array);
    }
}
