<?php
require_once 'model/Mlike.php';
require_once 'model/Mproduct.php';
require_once 'model/Muser.php';
$class_product = new product();
$class_like = new like();
$class_user = new user();
switch ($a)
{
    case 'add':
        $product_slug = $_POST['product'];
        $product = $class_product->show($product_slug);
        $user_id = $_SESSION['user_id'];
        if (!$class_like->exists($product->id,$user_id)){
            $class_like->attach($product->id,$user_id);
        }else{
            $class_like->detach($product->id,$user_id);
        }
        break;
    case 'list':
        $user_id = $_SESSION['user_id'];
        $likes  = $class_user->like($user_id);
    break;
}

if (file_exists('view/like/'.$a.'.php'))
{
    include_once 'view/like/'.$a.'.php';
}