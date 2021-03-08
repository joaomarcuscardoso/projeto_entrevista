<?php

namespace Models;

use \Core\Model;
use \Models\Products;

class Sales extends Model
{
    public function getAll()
    {
        $array = array();


        $sql = "SELECT * FROM sales";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();

            $product = new Products();

            foreach ($array as $key => $value) {

                $array[$key]["info_prod"] = $product->getId($value["id_product"]);
            }
        }

        return $array;
    }


    public function contAll()
    {

        $count = 0;

        $sql = "SELECT id FROM sales GROUP BY id_product";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $count = count($sql->fetchAll());
        }

        return $count;
    }

    public function add($qtd_sales, $product_id, $change_price = 0, $unitary_value = 0)
    {
        $product = new Products();
        $tot_value = 0;


        if (empty($unitary_value)) {

            $unitary_value = $product->getId($product_id);
            $unitary_value = $unitary_value["unitary_value"];
        } else {

            $unitary_value = str_replace(",", ".", $unitary_value);
            $unitary_value = number_format($unitary_value, 2);

            $sql = "UPDATE products SET unitary_value = :unitary_value WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":unitary_value", $unitary_value);
            $sql->bindValue("id", $product_id);
            $sql->execute();
        }

        $tot_value = $unitary_value * $qtd_sales;


        $sql = "INSERT INTO sales (id_product, qtd, tot_value, unitary_value) 
        VALUES (:id_product, :qtd, :tot_value, :unitary_value)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id_product", $product_id);
        $sql->bindValue(":qtd", $qtd_sales);
        $sql->bindValue(":tot_value", $tot_value);
        $sql->bindValue(":unitary_value", $unitary_value);
        $sql->execute();
    }
}
