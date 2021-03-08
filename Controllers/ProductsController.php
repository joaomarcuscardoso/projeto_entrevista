<?php

namespace Controllers;

use \Core\Controller;

use \Models\Products;

class ProductsController extends Controller
{

    public function index()
    {
        $array = array();

        $products = new Products();

        $array['all'] = $products->getAll("0");

        $this->loadTemplate("products", $array);
    }

    public function product_add()
    {
        $array = array();

        $this->loadTemplate("product_add", $array);
    }

    public function save_add()
    {
        if (
            !empty($_POST['description']) &&
            !empty($_POST['unitary_value']) && !empty($_POST['stock'])
        ) {

            $products = new Products();

            $description = addslashes($_POST['description']);
            $unitary_value = addslashes($_POST['unitary_value']);
            $stock = addslashes($_POST['stock']);
            if (!empty($code)) {

                $code = addslashes($_POST['code']);
            } else {
                $code = 0;
            }

            $products->add($description, $unitary_value, $stock, $code);

            header("Location: " . BASE_URL . "products");
            exit;
        }
        header("Location: " . BASE_URL . "products");
        exit;
    }

    public function edit($id)
    {
        $products = new Products();

        if (!empty($id) && $products->existId($id) == true) {
            $array =  array();

            $array['product'] = $products->getId($id);


            $this->loadTemplate("products_edit", $array);
        } else {
            header("Location: " . BASE_URL . "products");
            exit;
        }
    }

    public function save_edit($id)
    {

        /*
        Caso o valor unitário seja alterado e a opção de atualização de valor for marcada,
        pede-se que seja atualizado o valor no cadastro de produtos;
        */

        $products = new Products();
        if (
            !empty($id) && $products->existId($id) == true &&
            !empty($_POST["description"]) && !empty($_POST['stock'])
            && !empty($_POST["unitary_value"])
        ) {

            $description = addslashes($_POST["description"]);
            $stock = addslashes($_POST["stock"]);

            $unitary_value = addslashes($_POST["unitary_value"]);

            $products->update($id, $description, $stock, $unitary_value);
        }
        header("Location: " . BASE_URL . "products");
        exit;
    }

    public function list_excluded()
    {
        $array = array();
        $products = new Products();

        $array['all'] = $products->getAll("1");

        $this->loadTemplate("products_excluded", $array);
    }

    public function excluded($id, $delete)
    {

        $products = new Products();

        if (!empty($id) && $products->existId($id) == true) {
            $products->excluded($id, $delete);
            if ($delete = 1) {
                header("Location: " . BASE_URL . "products");
                exit;
            }
        }
        header("Location: " . BASE_URL . "delete");
        exit;
    }
}
