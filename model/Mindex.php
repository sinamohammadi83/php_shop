<?php
class index{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function like_count($user_id)
    {
        $sql=$this->db->query("SELECT * FROM likes WHERE user_id='$user_id'");
        return count($sql->fetchAll(PDO::FETCH_OBJ));
    }

    public function categories()
    {
        $sql=$this->db->query("SELECT * FROM categories WHERE category_id IS NULL");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function subcategories($category_id)
    {
        $sql=$this->db->query("SELECT * FROM categories WHERE category_id='$category_id'");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function brands()
    {
        $sql=$this->db->query("SELECT * FROM brands");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function getrole($id)
    {
        $sql=$this->db->query("SELECT * FROM users WHERE id='$id'");
        $user = $sql->fetch(PDO::FETCH_OBJ);
        $role_id = $user->role_id;
        $sqlRole=$this->db->query("SELECT * FROM roles WHERE id='$role_id'");
        $role = $sqlRole->fetch(PDO::FETCH_OBJ);
        return $role;
    }

    public function getdirectoryadmin()
    {
        $sql=$this->db->query("SELECT directory FROM admin_setting");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function child($category_id)
    {
        $sql=$this->db->query("SELECT * FROM categories WHERE id='$category_id'");
        $category = $sql->fetch(PDO::FETCH_OBJ);
        return $category;
    }

    public function getproduct()
    {
        $sql3=$this->db->query("SELECT * FROM products");
        return $sql3->fetchAll(PDO::FETCH_OBJ);
    }

    public function product($category_id)
    {
        $sql = $this->db->query("SELECT * FROM categories WHERE category_id='$category_id'");
        $subcategory=$sql->fetchAll(PDO::FETCH_OBJ);
        $pluck_sub=array_column($subcategory,'id');
        $imp_sub=implode(",",$pluck_sub);
        $sql2 = $this->db->query("SELECT * FROM categories WHERE category_id IN ($imp_sub)");
        $parentcategory=$sql2->fetchAll(PDO::FETCH_OBJ);
        $pluck_parent=array_column($parentcategory,'id');
        $imp_parent = implode(",",$pluck_parent);
        $sqlproduct = $this->db->query("SELECT * FROM products WHERE category_id IN ($category_id,$imp_sub,$imp_parent) AND is_published='1'");
        return $sqlproduct->fetchAll(PDO::FETCH_OBJ);
    }

    public function show_category($id)
    {
        return $this->db->query("SELECT * FROM categories WHERE id='$id'")
            ->fetch(PDO::FETCH_OBJ);
    }

    public function sliders()
    {
        return $sql3=$this->db->query("SELECT * FROM sliders")->fetchAll(PDO::FETCH_OBJ);
    }
}