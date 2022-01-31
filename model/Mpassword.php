<?php
class password{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function store($email,$token,$time)
    {
        $this->db->query("INSERT INTO password_resets (email,token,created_at) VALUES ('$email','$token','$time')");
    }

    public function showByToken($token)
    {
        return $this->db->query("SELECT * FROM password_resets WHERE token='$token'")->fetch(PDO::FETCH_OBJ);
    }

}