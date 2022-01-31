<?php
require_once 'model/Mdiscount.php';
$class_discount = new discount();


switch ($a)
{
    case 'add':
        if (isset($_POST['btn']))
        {
            $product = $_GET['product'];
            $value = $_POST['value'];
            $class_discount->store($value,$product,date('y-m-d h:i:s'));
            header("location:index.php?c=product&a=list");
        }
    break;
    case 'delete':
        $id=$_GET['id'];
        $class_discount->destroy($id);
        header("location:index.php?c=product&a=list");
        break;
}

include_once 'view/discount/add.php';