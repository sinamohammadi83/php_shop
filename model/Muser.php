<?php

class User{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function updatePassword($password,$user_id)
    {
        $this->db->query("UPDATE users SET password='$password' WHERE id='$user_id'");
    }

    public function like($user_id)
    {
        $sql = $this->db->query("SELECT * FROM likes WHERE user_id='$user_id'")->fetchAll(PDO::FETCH_OBJ);
        if ($sql):
            $i = array_column($sql,'product_id');
            $ids = implode(',',$i);
            return $this->db->query("SELECT * FROM products WHERE id IN ($ids)")->fetchAll(PDO::FETCH_OBJ);
        endif;
    }

    public function order_detail($user_id)
    {
        return $this->db->query("SELECT * FROM order_details WHERE user_id='$user_id'")->fetchAll(PDO::FETCH_OBJ);
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

    public function showById($id)
    {
        $sql=$this->db->query("SELECT * FROM users WHERE id='$id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }


    public function checkToken($token)
    {
        $sql=$this->db->query("SELECT * FROM verify_register WHERE token='$token'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function updateProfile($name,$email,$id)
    {
        $this->db->query("UPDATE users SET name='$name' , email='$email' WHERE id='$id'");
    }

    public function updateImage($image,$id)
    {
        $this->db->query("UPDATE users SET image='$image' WHERE id='$id'");
    }

}