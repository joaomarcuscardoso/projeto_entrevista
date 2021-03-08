<?php

namespace Models;

use \Core\Model;

class Products extends Model
{
    public function getAll($excluded = 0)
    {
        $array = array();

        $sql = "SELECT * FROM products WHERE excluded = :excluded";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":excluded", $excluded);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function contAll()
    {

        $count = 0;

        $sql = "SELECT id FROM products WHERE excluded = :excluded";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":excluded", 0);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $count = count($sql->fetchAll());
        }

        return $count;
    }

    public function existId($id)
    {

        $sql = "SELECT id FROM products WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        }

        return false;
    }

    public function getId($id)
    {
        $array = array();

        $sql = "SELECT * FROM products WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }



    public function add($description, $unitary_value, $stock, $code = 0)
    {

        $unitary_value = str_replace(",", ".", $unitary_value);
        $unitary_value = number_format($unitary_value, 2);

        $sql = "INSERT INTO products (description, unitary_value, stock, 
        ) VALUES (:description, :unitary_value, :stock)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":description", $description);
        $sql->bindValue(":unitary_value", $unitary_value);
        $sql->bindValue(":stock", $stock);
        $sql->execute();
    }

    public function update($id, $description, $stock, $unitary_value)
    {
        $unitary_value = str_replace(",", ".", $unitary_value);
        $unitary_value = number_format($unitary_value, 2);
        //  ADD CODE BAR

        $sql = "UPDATE products SET description = :description, stock = :stock, unitary_value = :unitary_value WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":description", $description);
        $sql->bindValue(":stock", $stock);
        $sql->bindValue(":unitary_value", $unitary_value);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function excluded($id, $delete = 0)
    {
        $sql = "UPDATE products SET excluded = :excluded WHERE id = :id;";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":excluded", $delete);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}
