<?php
class discount{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function store($value,$product_id,$time)
    {
        $this->db->query("INSERT INTO discounts (product_id,value,created_at,updated_at) VALUES ('$product_id','$value','$time','$time')");
    }

    public function destroy($discount)
    {
        $this->db->query("DELETE FROM discounts WHERE id='$discount'");
    }
}