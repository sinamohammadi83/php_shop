<?php
require_once 'model/Mcategory.php';
require_once 'model/Mproduct.php';
require_once 'model/Mlike.php';
$class_like = new like();
$class_product = new product();
$class_category = new category();
$title = $_GET['category'];
$category = $class_category->showByTitle($title);

$products = $class_category->product($category->id);


include_once 'view/category/show.php';