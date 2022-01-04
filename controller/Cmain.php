<?php
require_once 'model/Mindex.php';
$class_index = new index();
$categories = $class_index->categories();
$brands = $class_index->brands();
$directoryAdmin = $class_index->getdirectoryadmin();