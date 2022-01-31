<?php
require_once 'model/Mcart.php';
require_once 'model/Mproduct.php';
$class_product = new product();
$class_cart = new cart();

switch ($a){
    case 'add':
        $quantity = $_POST['quantity'];
        $product_slug = $_POST['product'];
        $product = $class_product->show($product_slug);
        $class_cart->store($product,$quantity);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'cart' =>  $_SESSION['cart'],
            'msg' => 'successful'
        ]);
    break;
    case 'delete':
        $product_id = $_POST['product'];
        $product = $class_product->showById($product_id);
        $class_cart->delete($product->id);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'cart' =>  $_SESSION['cart'],
            'msg' => 'successful'
        ]);
    break;
}
