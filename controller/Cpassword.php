<?php
require_once 'model/Mpassword.php';
require_once 'model/Muser.php';
$class_password = new password();
$class_user = new user();
switch ($a){
    case 'add':
        if (isset($_POST['btn']))
        {
            $email = $_POST['email'];
            $token = create_token();
            $hostname = $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
            $message = "لینک تغییر رمز عبور : http://$hostname?c=password&a=edit&token=$token";
            send_email($email,$message);
            $class_password->store($email,$token,date('Y-m-d H:i:s'));
            header('location:index.php?c=password&a=add&operation=success');
        }
    break;
    case 'edit':
        $token = $_GET['token'];
        $password_reset = $class_password->showByToken($token);
        $user = $class_user->show($password_reset->email);
        $expire = false;
        if (date('Y-m-d H:i:s',strtotime($password_reset->created_at))<date('Y-m-d H:i:s',strtotime('-10 minutes', time())))
        {
            $expire = true;
        }
        if (isset($_POST['btn']) && !$expire)
        {
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $class_user->updatePassword(md5($password),$user->id);
            header("location:index.php?c=password&a=edit&token=$password_reset->token&change=success");
        }
    break;
}

include_once 'view/password/'.$a.'.php';