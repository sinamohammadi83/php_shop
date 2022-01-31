<?php
include_once '../public/include/db.php';

class Migration{
    public function __construct()
    {
        global $db;
        $this->db= $db;
    }

    public function users()
    {
        $this->db->query("
            CREATE TABLE users 
        ");
    }
}