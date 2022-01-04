<?php
class index{
    public function __construct()
    {
        global $db;
        $this->db=$db;
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

    public function check_permission($permission)
    {
        $sql=$this->db->query("SELECT * FROM permissions WHERE title='$permission'");
        $getpermission = $sql->fetch(PDO::FETCH_OBJ);
        $role = $this->getrole($_SESSION['user_id']);
        $role_id = $role->id;
        $permission_id = $getpermission->id;
        $sqlPermissionsRoles=$this->db->query("SELECT * FROM permission_role WHERE role_id='$role_id' AND permission_id='$permission_id'");
        return $sqlPermissionsRoles->fetch(PDO::FETCH_OBJ);
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
        $sql2 = $this->db->query("SELECT * FROM categories WHERE category_id IN ('$imp_sub')");
        $parentcategory=$sql2->fetchAll(PDO::FETCH_OBJ);
        $pluck_parent=array_column($parentcategory,'id');
        $imp_parent = implode(",",$pluck_parent);
        $sqlproduct = $this->db->query("SELECT * FROM products WHERE category_id IN ($category_id,$imp_sub,$imp_parent) AND is_published='1'");
        return $sqlproduct->fetchAll(PDO::FETCH_OBJ);
    }
}