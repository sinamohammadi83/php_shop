<?php
class category{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function store($category_id,$title,$time)
    {
        if ($category_id != null){
            $this->db->query("INSERT INTO categories(category_id,title,created_at,updated_at) VALUES ('$category_id','$title','$time','$time')");
        }else {
            $this->db->query("INSERT INTO categories(title,created_at,updated_at) VALUES ('$title','$time','$time')");
        }
    }

    public function all()
    {
        $sql=$this->db->query("SELECT * FROM categories");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function show($id)
    {
        $sql=$this->db->query("SELECT * FROM categories WHERE id='$id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function update($category_id,$title,$time,$id)
    {
        if ($category_id != null){
            $this->db->query("UPDATE categories SET title='$title' , category_id='$category_id' , updated_at='$time' WHERE id='$id'");
        }else {
            $this->db->query("UPDATE categories SET title='$title' , category_id=null  , updated_at='$time' WHERE id='$id'");
        }
    }

    public function destroy($id)
    {
        $this->db->query("DELETE FROM categories WHERE id='$id'");
    }
}