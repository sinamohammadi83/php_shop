<?php

class offer{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM offers")->fetchAll(PDO::FETCH_OBJ);
    }

    public function store($code,$product_id,$starts_at,$ends_at,$time)
    {
        $this->db->query("INSERT INTO offers (code,product_id,starts_at,ends_at,created_at,updated_at) VALUES ('$code','$product_id','$starts_at','$ends_at','$time','$time')");
    }

    public function show($id)
    {
        return $this->db->query("SELECT * FROM offers WHERE id='$id'")->fetch(PDO::FETCH_OBJ);
    }

    public function update($code,$product_id,$starts_at,$ends_at,$time,$id)
    {
        $this->db->query("UPDATE offers SET code='$code', product_id='$product_id' , starts_at='$starts_at' , ends_at='$ends_at' , updated_at='$time' WHERE id='$id'");
    }

    public function destroy($id)
    {
        $this->db->query("DELETE FROM offers WHERE id='$id'");
    }
}