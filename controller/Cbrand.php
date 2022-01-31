<?php
require_once 'model/Mbrand.php';
require_once 'model/Mlike.php';
$class_brand = new brand();
$class_like = new like();
switch ($a){
    case 'show':
        $brand_title = $_GET['brand'];
        $brand = $class_brand->showByTitle($brand_title);
        $products = $class_brand->product($brand->id);
    break;
}
include_once 'view/brand/'.$a.'.php';