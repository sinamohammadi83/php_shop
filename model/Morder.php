<?php
class order{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function store($amount,$address,$random,$time)
    {
        $this->db->query("INSERT INTO orders (amount,address,random,created_at,updated_at) VALUES ('$amount','$address','$random','$time','$time')");
        return $this->db->query("SELECT * FROM orders WHERE random='$random'")->fetch(PDO::FETCH_OBJ);
    }

    public function update_transaction_id($transaction_id,$order_id)
    {
        $this->db->query("UPDATE orders SET transaction_id='$transaction_id' WHERE id='$order_id'");
    }

    public function showByTransaction_id($transaction_id)
    {
        return $this->db->query("SELECT * FROM orders WHERE transaction_id='$transaction_id'")->fetch(PDO::FETCH_OBJ);
    }

    public function update($status,$order_id)
    {
        $sql = $this->db->query("UPDATE orders SET payment_status='$status' WHERE id='$order_id'");
    }

    public function show($random)
    {
        return $this->db->query("SELECT * FROM orders WHERE random='$random'")->fetch(PDO::FETCH_OBJ);
    }
}