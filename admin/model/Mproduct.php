<?php
class product{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function all()
    {
        $sql=$this->db->query("SELECT * FROM products");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function store($name,$cost,$image,$category_id,$brand_id,$is_published,$description,$slug,$time)
    {
        $this->db->query("INSERT INTO products (name,slug,cost,image,category_id,brand_id,is_published,description,created_at,updated_at) VALUES ('$name','$slug','$cost','$image','$category_id','$brand_id','$is_published','$description','$time','$time')");
    }

    public function show($id)
    {
        $sql=$this->db->query("SELECT * FROM products WHERE id='$id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function update($name,$cost,$image,$category_id,$brand_id,$is_published,$description,$slug,$time,$id)
    {
        $this->db->query("UPDATE products SET name='$name' , cost='$cost' , image='$image' , category_id='$category_id' , brand_id='$brand_id' , is_published='$is_published' , description='$description' , slug='$slug' , updated_at='$time' WHERE id='$id'");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM products WHERE id='$id'");
    }

    public function brand($brand_id)
    {
        $sql=$this->db->query("SELECT * FROM brands WHERE id='$brand_id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function category($categories_id)
    {
        $sql=$this->db->query("SELECT * FROM categories WHERE id='$categories_id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function discount($product)
    {
        $sql=$this->db->query("SELECT * FROM discounts WHERE product_id='$product'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function getcostwithDiscountAttribute($product)
    {
        if (!$this->discount($product->id)){
            return $product->cost;
        }else{
            return $product->cost - $product->cost * $this->discount($product->id)->value / 100;
        }
    }

}