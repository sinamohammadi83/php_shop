<?php

class slider{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function store($title,$image,$url)
    {
        $this->db->query("INSERT INTO sliders (title,image,url) VALUES ('$title','$image','$url')");
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM sliders")->fetchAll(PDO::FETCH_OBJ);
    }

    public function show($id)
    {
        return $this->db->query("SELECT * FROM sliders WHERE id='$id'")
            ->fetch(PDO::FETCH_OBJ);
    }

    public function update($title,$image,$url,$id)
    {
        $this->db->query("UPDATE sliders SET title='$title' , image='$image' , url='$url' WHERE id='$id'");
    }

    public function destroy($id)
    {
        $this->db->query("DELETE FROM sliders WHERE id='$id'");
    }
}
