<?php
require_once 'model/Mproduct.php';

$class_product = new product();
$slug = $_GET['product'];
$product = $class_product->show($slug);
$brand = $class_product->show_brand($product->brand_id);
include_once 'view/product/show.php';
