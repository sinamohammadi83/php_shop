<?php
class brand{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function add($title,$image,$created,$updated)
    {
        $this->db->query("INSERT INTO brands(title,image,created_at,updated_at) VALUES ('$title','$image','$created','$updated')");
    }

    public function all()
    {
        $sql=$this->db->query("SELECT * FROM brands");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM brands WHERE id='$id'");
    }

    public function show($id)
    {
        $sql=$this->db->query("SELECT * FROM brands WHERE id='$id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function update($title,$image,$id,$updated_at)
    {
        $this->db->query("UPDATE brands SET title='$title' , image='$image' , updated_at='$updated_at' WHERE id='$id'");
    }
}