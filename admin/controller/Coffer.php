<?php
require_once 'model/Moffer.php';
require_once 'model/Mproduct.php';
$class_product = new product();
$class_offer = new offer();

switch ($a)
{
    case 'list';
        $class_middleware->middleware('read-offer');
        $offers = $class_offer->all();
    break;
    case 'add':
        $class_middleware->middleware('create-offer');
        $products = $class_product->all();
        if (isset($_POST['btn']))
        {
            $code = $_POST['code'];
            $product_id = $_POST['product'];
            $starts_at = $_POST['starts_at'];
            $ends_at = $_POST['ends_at'];
            $class_offer->store($code,$product_id,$starts_at,$ends_at,date('y-m-d h:i:s'));
            header('location:index.php?c=offer&a=list');
        }
    break;
    case 'edit':
        $class_middleware->middleware('update-offer');
        $id = $_GET['id'];
        $offer = $class_offer->show($id);
        $products = $class_product->all();
        if (isset($_POST['btn']))
        {
            $code = $_POST['code'];
            $product_id = $_POST['product'];
            $starts_at = $_POST['starts_at'];
            $ends_at = $_POST['ends_at'];
            $class_offer->update($code,$product_id,$starts_at,$ends_at,date('y-m-d h:i:s'),$id);
            header('location:index.php?c=offer&a=list');
        }

    break;
    case 'delete':
        $class_middleware->middleware('delete-offer');
        $id = $_GET['id'];
        $class_offer->destroy($id);
        header('location:index.php?c=offer&a=list');
    break;
}

include_once 'view/offer/'.$a.'.php';