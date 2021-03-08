<?php

namespace Controllers;

use \Core\Controller;
use \Models\Products;
use \Models\Sales;

class SalesController extends Controller
{

    public function index()
    {
        $array = array();

        $products = new Products();
        $sales = new Sales();

        $array["sales"] = $sales->getAll();
        $array["info_prod"] = $products->getAll();




        $this->loadTemplate("sales", $array);
    }

    public function add()
    {


        $sales = new Sales();
        if (
            !empty($_POST["product_id"]) && !empty($_POST["qtd_sales"]) &&
            !isset($_POST['change_price'])
        ) {
            $qtd_sales = addslashes($_POST['qtd_sales']);
            $product_id = addslashes($_POST['product_id']);


            $sales->add($qtd_sales, $product_id);
        } else if (
            !empty($_POST["product_id"]) && !empty($_POST["qtd_sales"]) &&
            isset($_POST['change_price']) && !empty($_POST["unitary_value"])
        ) {
            $qtd_sales = addslashes($_POST['qtd_sales']);
            $product_id = addslashes($_POST['product_id']);
            $change_price = addslashes($_POST['change_price']);
            $unitary_value = addslashes($_POST['unitary_value']);

            $unitary_value = str_replace(",", ".", $unitary_value);
            $unitary_value = number_format($unitary_value, 2);


            $sales->add($qtd_sales, $product_id, $change_price, $unitary_value);
        } else {
            print_r("error");
            exit;
        }
        header("Location: " . BASE_URL . "sales");
        exit;
    }
}
