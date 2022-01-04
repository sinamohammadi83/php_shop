<?php
class product{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function show($slug)
    {
        $sql=$this->db->query("SELECT * FROM products WHERE slug='$slug'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function show_brand($brand_id)
    {
        $sql=$this->db->query("SELECT * FROM brands WHERE id='$brand_id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function picture($product)
    {
        $sql=$this->db->query("SELECT * FROM pictures WHERE id='$product'");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
}