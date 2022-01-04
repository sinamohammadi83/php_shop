<?php
require_once 'model/Muser.php';
$user_class=new User();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function create_token()
{
    $characters = 'qwertyuiiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    $rand='';
    for ($i=0;$i<30;$i++)
    {
        $rand .= $characters[rand(0,strlen($characters))-1];
    }
    return $rand;
}

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

function send_email($email)
{
    $randompass = random_int(11111111,99999999);

    require_once "vendor/autoload.php";

    $mail = new PHPMailer(true);

//Enable SMTP debugging.
    $mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
    $mail->isSMTP();
//Set SMTP host name
    $mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
//Provide username and password
    $mail->Username = "samanmohammady6@gmail.com";
    $mail->Password = "!saman1356";
//If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";
//Set TCP port to connect to
    $mail->Port = 587;

    $mail->From = "samanmohammady6@gmail.com";
    $mail->FromName = "market shop";

    $mail->addAddress("$email", "");

    $mail->isHTML(true);

    $mail->Subject = "email verify code market shop";
    $mail->Body = "کد شما : $randompass";
    $mail->AltBody = "This is the plain text version of the email content";

    $mail->send();
    return $randompass;
}

include_once 'view/'.$c.'/'.$a.'.php';