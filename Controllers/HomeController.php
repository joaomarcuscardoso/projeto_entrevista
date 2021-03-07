<?php

namespace Controllers;

use \Core\Controller;
//use \Models\Users; export Users

class HomeController extends Controller
{

    public function index()
    {
        $array = array();

        //$users = new Users(); export users


        $this->loadTemplate("home", $array);
    }

    public function products()
    {
        $array = array();
    }
}
