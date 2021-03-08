<?php

namespace Models;

use \Core\Model;

class Sales extends Model
{
    public function getAll()
    {
        $array = array();

        $sql = "SELECT * FROM sales";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
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
}
