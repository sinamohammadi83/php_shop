<?php
class property {
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM properties")->fetchAll(PDO::FETCH_OBJ);
    }

    public function store($title,$property_group_id,$time)
    {
        $this->db->query("INSERT INTO properties (title,property_group_id,created_at,updated_at) VALUES ('$title','$property_group_id','$time','$time')");
    }

    public function show($id)
    {
        return $this->db->query("SELECT * FROM properties WHERE id='$id'")->fetch(PDO::FETCH_OBJ);
    }

    public function update($title,$property_group_id,$time,$id)
    {
        $this->db->query("UPDATE properties SET title='$title' , property_group_id='$property_group_id' , updated_at='$time' WHERE id='$id'");
    }

    public function destroy($id)
    {
        $this->db->query("DELETE FROM properties WHERE id='$id'");
    }
}