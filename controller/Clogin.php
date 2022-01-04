<?php
require_once 'model/Muser.php';
$class_login=new User();
switch ($a){
    case 'login':
        if (isset($_POST['btn-login']))
        {
            $email=$_POST['email'];
            $password=md5($_POST['password']);
            $login=$class_login->login($email,$password);

            if (!$login){
                header('location:index.php?c=login&a=login&login=error');
            }else{
                if ($login->email_verifyed_at=='')
                {
                    $token=$class_login->getToken($login->email);
                    header('location:index.php?c=register&a=verify&token='.$token->token);
                }else{
                    $_SESSION['user_id']=$login->id;
                    header('location:index.php');
                }
            }


        }
        include_once 'view/login/login.php';
    break;
    case 'logout':
        unset($_SESSION['user_id']);
        header('location:index.php?c=login&a=login');
    break;
}

