<?php
require_once 'model/Mindex.php';
require_once 'model/Mcart.php';
require_once 'model/Mproduct.php';
$class_product = new product();
$class_cart = new cart();
$class_index = new index();
if (isset($_SESSION['user_id'])) {
    $count_like = $class_index->like_count($_SESSION['user_id']);
}
$categories = $class_index->categories();
$brands = $class_index->brands();
$directoryAdmin = $class_index->getdirectoryadmin();