<?php
require_once 'model/Muser.php';
$user_class=new User();

switch ($a)
{
    case 'register':
        if (isset($_POST['btn']))
        {
            $email = $_POST['email'];
            $user = $user_class->show($email);
            if ($user)
            {
                if ($user->email_verifyed_at == '')
                {
                    $token=$user_class->getToken($email);
                    header("location:index.php?c=register&a=verify&token=$token->token");
                }else{
                    header("location:index.php?c=register&a=register&email=already");
                }
            }else {
                $randompass = send_email($email);
                $token = create_token();
                $time = date("Y-m-d h:i:s");
                $user=$user_class->register($email,$token,$time,md5($randompass));
                header("location:index.php?c=register&a=verify&token=$token");
            }
        }
    break;
    case 'verify':
        if (isset($_GET['token']) || !isset($_GET['token']))
        {
            $existsToken = $user_class->checkToken($_GET['token']);
            if (!$existsToken)
            {
                header("location:index.php");
            }
        }

        if (isset($_GET['resend']))
        {
            $token = $user_class->checkToken($_GET['token']);
            $randompass=send_email($token->email);
            $newtoken = create_token();
            $user_class->register($token->email,$newtoken,date("Y-m-d h:i:s"),md5($randompass),true);
            header("location:index.php?c=register&a=verify&token=$newtoken");
        }


        if (isset($_POST['btn']))
        {
            $time = date("Y-m-d h:i:s");
            $code = $_POST['code'];
            $token = $_GET['token'];
            $user_class->verify($code,$token,$time);
        }
    break;
}

include_once 'view/'.$c.'/'.$a.'.php';