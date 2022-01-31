<?php
require_once 'model/Mindex.php';
require_once 'model/Mproduct.php';
require_once 'model/Mlike.php';
$class_product = new product();
$class_index = new index();
$class_like = new like();

include_once 'view/index/index.php';


