<?php
require_once 'model/Mproduct.php';
require_once 'model/Mcategory.php';
require_once 'model/Mbrand.php';
$class_category = new category();
$class_brand = new brand();
$class_product = new product();


switch ($a){
    case 'add':
        $categories = $class_category->all();
        $brands = $class_brand->all();
        if (isset($_POST['btn']))
        {
            $name = $_POST['name'];
            $cost = $_POST['cost'];
            $image = $_FILES['image'];
            $brand_id = $_POST['brand_id'];
            $category_id = $_POST['category_id'];
            $is_published = $_POST['is_published'];
            $description = $_POST['description'];
            $exp = explode(' ',$name);
            $slug = implode('-',$exp);
            $setimage = uploder($image,'products',true);
            $class_product->store($name,$cost,$setimage,$category_id,$brand_id,$is_published,$description,$slug,date('y-m-d h:i:s'));
            header('location:index.php?c=product&a=add');
        }
    break;
    case 'list':
        $products = $class_product->all();
    break;
    case 'edit':
        $id = $_GET['id'];
        $product = $class_product->show($id);
        $categories = $class_category->all();
        $brands = $class_brand->all();
        if (isset($_POST['btn']))
        {
            $name = $_POST['name'];
            $cost = $_POST['cost'];
            $image = $_FILES['image'];
            $brand_id = $_POST['brand_id'];
            $category_id = $_POST['category_id'];
            $is_published = $_POST['is_published'];
            $description = $_POST['description'];
            $exp = explode(' ',$name);
            $slug = implode('-',$exp);
            if ($image['name']){
                delete_image($product->image);
                $setimage = uploder($image,'products/images',true);
            }else
            {
                $setimage = $product->image;
            }

            $class_product->update($name,$cost,$setimage,$category_id,$brand_id,$is_published,$description,$slug,date('y-m-d h:i:s'),$id);
            header('location:index.php?c=product&a=list');
        }
    break;
    case 'delete':
        $id = $_GET['id'];
        $product = $class_product->show($id);
        delete_image($product->image);
        $class_product->delete($id);

        header('location:index.php?c=product&a=list');
    break;
}

include_once 'view/product/'.$a.'.php';