<?php
require_once 'model/Mproduct.php';
require_once 'model/Mlike.php';
require_once 'model/Muser.php';
$class_user = new user();
$class_like = new like();
$class_product = new product();
$class_middleware = new CheckPermissionMiddleware();

$slug = $_GET['product'];
$product = $class_product->show($slug);
$brand = $class_product->show_brand($product->brand_id);
$discount = $class_product->discount($product->id);

$category = $class_product->category($product->category_id);
$property_groups = $class_product->property_groups($category->id);
include_once 'view/product/show.php';
