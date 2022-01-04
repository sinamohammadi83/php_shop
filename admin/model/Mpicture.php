<?php
class picture{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function store($product_id,$image)
    {
        $this->db->query("INSERT INTO pictures (product_id,path) VALUES ('$product_id','$image')");
    }

    public function product($product)
    {
        $sql=$this->db->query("SELECT * FROM pictures WHERE product_id='$product'");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function destroy($pictures)
    {
        $this->db->query("DELETE FROM pictures WHERE id='$pictures'");
    }

    public function show($id)
    {
        $sql=$this->db->query("SELECT * FROM pictures WHERE id='$id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }
}