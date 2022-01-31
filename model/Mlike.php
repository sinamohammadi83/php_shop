<?php
class like{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function exists($product_id,$user_id)
    {
        return $this->db->query("SELECT * FROM likes WHERE product_id='$product_id' AND user_id='$user_id'")
            ->fetch(PDO::FETCH_OBJ);
    }

    public function attach($product_id,$user_id)
    {
        $this->db->query("INSERT INTO likes (product_id,user_id) VALUES ('$product_id','$user_id')");
    }

    public function detach($product_id,$user_id)
    {
        $this->db->query("DELETE FROM likes WHERE product_id='$product_id' AND user_id='$user_id'");
    }
}