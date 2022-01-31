<?php
class order_detail{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function store($user_id,$product_id,$order_id,$unit_amount,$total_amount,$cost,$time)
    {
        $this->db->query("INSERT INTO order_details (user_id,product_id,order_id,unit_amount,total_amount,cost,created_at,updated_at) VALUES ('$user_id','$product_id','$order_id','$unit_amount','$total_amount','$cost','$time','$time')");
    }

    public function update($status,$order_id)
    {
        $sql = $this->db->query("UPDATE order_details SET status='$status' WHERE order_id='$order_id'");
    }

    public function order($order_id)
    {
        return $this->db->query("SELECT * FROM order_details WHERE order_id='$order_id'")->fetchAll(PDO::FETCH_OBJ);
    }
}