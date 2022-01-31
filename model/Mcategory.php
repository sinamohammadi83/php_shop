<?php
class category{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function show($id)
    {
        return $this->db->query("SELECT * FROM categories WHERE id='$id'")
            ->fetch(PDO::FETCH_OBJ);
    }

    public function showByTitle($title)
    {
        return $this->db->query("SELECT * FROM categories WHERE title='$title'")
            ->fetch(PDO::FETCH_OBJ);
    }

    public function product($category_id)
    {
        return $this->db->query("SELECT * FROM products WHERE category_id='$category_id'")
            ->fetchAll(PDO::FETCH_OBJ);
    }
}