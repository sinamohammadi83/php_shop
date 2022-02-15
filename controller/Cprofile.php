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
}
if (file_exists('view/profile/' . $a . '.php')) {
    include_once 'view/profile/' . $a . '.php';
}