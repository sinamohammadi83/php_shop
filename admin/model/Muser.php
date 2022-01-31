<?php
class user{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM users")
            ->fetchAll(PDO::FETCH_OBJ);
    }

    public function store($name,$email,$image,$role_id,$password)
    {
        $this->db->query("INSERT INTO users (name,email,image,role_id,password) VALUES ('$name','$email','$image','$role_id','$password')");
    }

    public function show($user_id)
    {
        return $this->db->query("SELECT * FROM users WHERE id='$user_id'")
            ->fetch(PDO::FETCH_OBJ);
    }

    public function update($name,$email,$image,$role_id,$password,$id)
    {
        $this->db->query("UPDATE users SET name='$name' , email='$email' , image='$image' , role_id='$role_id' , password='$password' WHERE id='$id'");
    }

    public function role($role_id)
    {
        return $this->db->query("SELECT * FROM roles WHERE id='$role_id'")
            ->fetch(PDO::FETCH_OBJ);
    }
}