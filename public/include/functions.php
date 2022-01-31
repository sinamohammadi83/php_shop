<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function send_email($email,$message)
{

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
    $mail->Body = "$message";
    $mail->AltBody = "This is the plain text version of the email content";

    $mail->send();
}
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