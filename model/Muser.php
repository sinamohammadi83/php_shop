<?php

class User{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function login($email,$password)
    {
        $sql=$this->db->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function register($email,$token,$time,$password,$resend=false)
    {
        $sql=$this->db->query("SELECT * FROM roles WHERE title='normal-user'");
        $userRole = $sql->fetch(PDO::FETCH_OBJ);
        if (!$resend) {
            $this->db->query("INSERT INTO users(role_id,email,password) VALUES('$userRole->id','$email','$password')");
            $this->db->query("INSERT INTO verify_register(email,token,created_at)  VALUES('$email','$token','$time')");
        }else{
            $this->db->query("DELETE FROM verify_register WHERE email='$email'");
            $this->db->query("DELETE FROM users WHERE email='$email'");
            $this->db->query("INSERT INTO users(role_id,email,password) VALUES('$userRole->id','$email','$password')");
            $this->db->query("INSERT INTO verify_register(email,token,created_at)  VALUES('$email','$token','$time')");
        }
    }

    public function verify($code,$token,$time)
    {
        $gettoken=$this->db->query("SELECT * FROM verify_register WHERE token='$token'");
        $row=$gettoken->fetch(PDO::FETCH_OBJ);
        $sql= $this->db->query("SELECT * FROM users WHERE email='$row->email'");
        $user = $sql->fetch(PDO::FETCH_OBJ);
        if ($user->password == md5($code))
        {
            $this->db->query("UPDATE users SET email_verifyed_at='$time' WHERE id='$user->id'");
            $this->db->query("DELETE FROM verify_register WHERE email='$row->email'");
            $_SESSION['user_id'] = $user->id;
            header('location:index.php');
        }else{
            header("location:index.php?c=register&a=verify&token=$token&error=true");
        }
    }

    public function getToken($email)
    {
        $sql=$this->db->query("SELECT * FROM verify_register WHERE email='$email'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function show($email)
    {
        $sql=$this->db->query("SELECT * FROM users WHERE email='$email'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function checkToken($token)
    {
        $sql=$this->db->query("SELECT * FROM verify_register WHERE token='$token'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }


}