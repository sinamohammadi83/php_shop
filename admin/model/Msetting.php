<?php
class setting{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function update($directory)
    {
        $this->db->query("UPDATE admin_setting SET directory='$directory'");
    }

    public function show_admin_setting()
    {
        $sql=$this->db->query("SELECT * FROM admin_setting");
        return $sql->fetch(PDO::FETCH_OBJ);
    }
}