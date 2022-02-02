<?php

class order{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM order_details WHERE NOT status='unknown' AND NOT status='NOK' AND NOT status='send'")->fetchAll(PDO::FETCH_OBJ);
    }

    public function order($order_id)
    {
        return $this->db->query("SELECT * FROM orders WHERE id='$order_id'")->fetch(PDO::FETCH_OBJ);
    }

    public function update($order_id,$status)
    {
        $this->db->query("UPDATE order_details SET status='$status' WHERE id='$order_id'");
    }
}