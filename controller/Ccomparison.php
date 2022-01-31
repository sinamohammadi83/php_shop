<?php
require_once 'model/Mcomparison.php';
require_once 'model/Mproduct.php';
$class_comparison = new comparison();
$class_product = new product();

switch ($a){
    case 'add':
        if (isset($_POST['product']))
        {
            $product_slug = $_POST['product'];
            $slug  = array_column($_SESSION['comparisons'],'slug');
                if (count($_SESSION['comparisons']) != 4 && count($_SESSION['comparisons'])<4 || $product_slug==$slug[0] || $product_slug==$slug[1] || $product_slug==$slug[2] || $product_slug==$slug[3]) {
                    $product = $class_product->show($product_slug);
                    $discount = $class_product->discount($product->id);
                    $brand = $class_product->show_brand($product->brand_id);
                    $class_comparison->store($product, $discount, $brand->title);
                    echo count($_SESSION['comparisons']);
                }else{
                    http_response_code(400);
                    echo 'حداکثر تعداد محصول برای مقایسه 4 عدد است.';
                }

        }
    break;
    case 'list':
        if (isset($_SESSION['comparisons'])):
            $comparisons = $_SESSION['comparisons'];
        endif;
    break;
    case 'delete':
        $product_slug = $_GET['product'];
        $product = $class_product->show($product_slug);
        $class_comparison->delete($product);
        header('location:index.php?c=comparison&a=list');
    break;
}
if (file_exists('view/comparison/'.$a.'.php'))
{
    include_once 'view/comparison/'.$a.'.php';
}
