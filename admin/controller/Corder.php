<?php
require_once 'model/Morder.php';
require_once 'model/Muser.php';
require_once 'model/Mproduct.php';
require_once 'model/Mcategory.php';
require_once 'model/Mbrand.php';
$class_brand = new brand();
$class_category = new category();
$class_product = new product();
$class_order = new order();
$class_user = new user();

switch ($a){
    case 'list':
        $orders = $class_order->all();
    break;
    case 'update':
        $order_id = $_POST['order'];
        $status = $_POST['status'];
        $class_order->update($order_id,$status);
        $orders = $class_order->all();
        foreach ($orders as $order){
            $product = $class_product->show($order->product_id);
            $orders1[] = [
                'id' => $order->id,
                'user' => $class_user->show($order->user_id),
                'product' => [
                    'id' => $product->id,
                    'category' => $class_category->show($product->category_id),
                    'brand' => $class_brand->show($product->brand_id),
                    'name' => $product->name,
                    'cost' => $product->cost,
                    'cost_with_discount' => $class_product->getcostwithDiscountAttribute($product),
                    'image' => $product->image,
                    'slug' => $product->slug
                ],
                'unit_amount' => $order->unit_amount,
                'total_amount' => $order->total_amount,
                'status' => $order->status,
                'count' => $order->cost,
                'address' => $class_order->order($order->order_id)->address
            ];
        }
        if (!$orders){
            $orders1='';
        }
        header('Content-Type:application/json');
        echo json_encode([
            'data' => [
                'orders' => $orders1
            ]
        ]);
    break;
}
if (!isset($_GET['response'])):
    include_once 'view/order/'.$a.'.php';
endif;