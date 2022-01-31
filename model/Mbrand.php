<?php
class brand{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function showByTitle($brand)
    {
        return $this->db->query("SELECT * FROM brands WHERE title='$brand'")->fetch(PDO::FETCH_OBJ);
    }

    public function product($brand_id)
    {
        return $this->db->query("SELECT * FROM products WHERE brand_id='$brand_id'")->fetchAll(PDO::FETCH_OBJ);
    }
}