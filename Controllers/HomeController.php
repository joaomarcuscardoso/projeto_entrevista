<?php

namespace Controllers;

use \Core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $array = array();

        //$users = new Users(); export users
        print_r("chegou home");


        $this->loadTemplate("home", $array);
    }
}
