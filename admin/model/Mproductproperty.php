<?php
class productproperty
{
    public function __construct()
    {
        global $db;
        $this->db= $db;
    }
    public function sync($properties,$product_id,$time)
    {
        foreach ($properties as $property_id=>$item )
        {
            if (!empty($item['value']))
            {
                if ($this->Comparison($item['value'],$product_id,$property_id)):
                    $this->db->query("INSERT INTO product_property (product_id,property_id,value,created_at,updated_at) VALUES ('$product_id','$property_id','$item[value]','$time','$time')");
                else:
                    $this->db->query("UPDATE product_property SET value='$item[value]' , updated_at='$time' WHERE product_id='$product_id' AND property_id='$property_id'");
                endif;
            }else{
                $this->db->query("DELETE FROM product_property WHERE product_id='$product_id' AND property_id='$property_id'");
            }
        }
    }

    public function property_groups($property_groups)
    {
        if (!empty($property_groups)):
        $arr = array_column($property_groups,'property_group_id');
        $arr1 = implode(",",$arr);
        return $this->db->query("SELECT * FROM property_groups WHERE id IN ($arr1)")->fetchAll(PDO::FETCH_OBJ);
        endif;
    }

    public function properties($property_group)
    {
        return $this->db->query("SELECT * FROM properties WHERE property_group_id='$property_group'")
            ->fetchAll(PDO::FETCH_OBJ);
    }

    public function product_property($product_id,$property_id)
    {
        $sql = $this->db->query("SELECT * FROM product_property WHERE product_id='$product_id' AND property_id='$property_id'")
            ->fetch(PDO::FETCH_OBJ);
        if (!$sql)
        {
            return null ;

        }else{
            return $sql->value;
        }

    }

    public function Comparison($value,$product_id,$property_id)
    {
        $sql = $this->db->query("SELECT * FROM product_property WHERE product_id='$product_id' AND property_id='$property_id'")
            ->fetch(PDO::FETCH_OBJ);
        if (!$sql){
            return true;
        }else if($sql->value != $value)
        {
            return false;
        }
    }
}