<?php
require_once 'model/Mproductproperty.php';
require_once 'model/Mproduct.php';
require_once 'model/Mcategory.php';
$class_productproperty = new productproperty();
$class_product = new product();
$class_category = new category();

switch ($a)
{
    case 'add':
        $product_id = $_GET['product'];
        $product = $class_product->show($product_id);
        $category = $class_category->show($product->category_id);
        $property_groupss = $class_category->show_propertygroups($category->id);
        $property_groups = $class_productproperty->property_groups($property_groupss);
        if (isset($_POST['btn']))
        {
            $properties = $_POST['properties'];
            $class_productproperty->sync($properties,$product->id,date('y-m-d h:i:s'));
        }
        header("index.php?c=productproperty&a=add&product=$product->id");
    break;
}

include_once 'view/productproperty/'.$a.'.php';