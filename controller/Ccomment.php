<?php
require_once 'model/Mcomment.php';
require_once 'model/Mproduct.php';

$class_product = new product();
$class_comment = new comment();
switch ($a)
{
    case 'add':
        $content = $_POST['content'];
        $product_slug = $_GET['product'];
        $product = $class_product->show($product_slug);
        $user_id = $_SESSION['user_id'];
        $class_comment->store($product->id,$user_id,$content,date('y-m-d h:i:s'));
        header("location:index.php?c=product&product=$product->slug");
    break;
    case 'edit':
        $content = $_POST['content'];
        $comment = $_GET['comment'];
        $product_slug = $_GET['product'];
        $product = $class_product->show($product_slug);
        $class_comment->update($content,date('y-m-d h:i:s'),$comment);
        header("location:index.php?c=product&product=$product->slug");
    break;
    case 'delete':
        $comment = $_POST['comment'];
        $class_comment->destroy($comment);
    break;
}