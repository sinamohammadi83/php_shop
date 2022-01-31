<?php
class propertyGroup{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function store($title,$time)
    {
        $this->db->query("INSERT INTO property_groups (title,created_at,updated_at) VALUES ('$title','$time','$time')");
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM property_groups")
            ->fetchAll(PDO::FETCH_OBJ);
    }

    public function show($id)
    {
        return $this->db->query("SELECT * FROM property_groups WHERE id='$id'")
            ->fetch(PDO::FETCH_OBJ);
    }

    public function update($title,$time,$id)
    {
        $this->db->query("UPDATE property_groups SET title='$title' , updated_at='$time' WHERE id='$id'");
    }

    public function destroy($id)
    {
        $this->db->query("DELETE FROM property_groups WHERE id='$id'");
    }
}