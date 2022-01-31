<?php
class product{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function show($slug)
    {
        $sql=$this->db->query("SELECT * FROM products WHERE slug='$slug'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function showById($id)
    {
        $sql=$this->db->query("SELECT * FROM products WHERE id='$id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function show_brand($brand_id)
    {
        $sql=$this->db->query("SELECT * FROM brands WHERE id='$brand_id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function picture($product)
    {
        $sql=$this->db->query("SELECT * FROM pictures WHERE product_id='$product'");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function discount($product)
    {
        $sql=$this->db->query("SELECT * FROM discounts WHERE product_id='$product'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function category($product_id)
    {
        $sql=$this->db->query("SELECT * FROM categories WHERE id='$product_id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function property_groups($category_id)
    {
        $sql=$this->db->query("SELECT * FROM category_property_group WHERE category_id='$category_id'")
            ->fetchAll(PDO::FETCH_OBJ);
        $arr = implode(',',array_column($sql,'property_group_id'));
        if ($sql):
        return $this->db->query("SELECT * FROM property_groups WHERE id IN ($arr)")
            ->fetchAll(PDO::FETCH_OBJ);
        endif;
    }

    public function properties($property_group)
    {
        return $this->db->query("SELECT * FROM properties WHERE property_group_id='$property_group'")
            ->fetchAll(PDO::FETCH_OBJ);
    }

    public function getvalueforproperty($product_id,$property_id)
    {
        $sql = $this->db->query("SELECT * FROM product_property WHERE property_id='$property_id' AND product_id='$product_id'")
            ->fetch(PDO::FETCH_OBJ);
        if ($sql)
        {
            return $sql->value;
        }else{
            return null;
        }
    }

    public function getcostwithDiscountAttribute($product)
    {
        if (!$this->discount($product->id)){
            return $product->cost;
        }else{
            return $product->cost - $product->cost * $this->discount($product->id)->value / 100;
        }
    }

    public function comment($product_id)
    {
        return $this->db->query("SELECT * FROM comments WHERE product_id='$product_id'")
            ->fetchAll(PDO::FETCH_OBJ);
    }
}