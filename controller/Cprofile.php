<?php
require_once 'model/Muser.php';
$class_user = new user();
$class_middleware->middleware_auth();
$user = $class_user->showById($_SESSION['user_id']);
switch ($a){
    case 'profile':
        if (isset($_POST['btn']))
        {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $class_user->updateProfile($name,$email,$user->id);
            header('location:index.php?c=profile&a=profile');
        }
    break;
    case 'image':
        if ($_FILES['image']['name'])
        {
            delete_image($user->image);
            $image = uploder($_FILES['image'],'users',true);
        }else{
            $image = $user->image;
        }
        $class_user->updateImage($image,$user->id);
        header('location:index.php?c=profile&a=profile');
    break;
    case 'password':
        if (isset($_POST['btn']))
        {
            $user = $class_user->showById($_SESSION['user_id']);
            $oldpassword = md5($_POST['oldpassword']);
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];

            if ($oldpassword == $user->password)
            {
                if (!empty($password) && !empty($repassword)) {
                    $class_user->updatePassword(md5($password), $_SESSION['user_id']);
                    header('location:index.php?c=profile&a=profile&changepassword=success');
                }else{

                }
            }else{
                header('location:index.php?c=profile&a=password&oldpassword=notok');
            }
        }
    break;
}
if (file_exists('view/profile/' . $a . '.php')) {
    include_once 'view/profile/' . $a . '.php';
}