<?php
require_once 'model/Mpicture.php';
$class_picture = new picture();

switch ($a)
{
    case 'list':
        $product = $_GET['product'];
        $pictures = $class_picture->product($product);
        if (isset($_POST['btn']))
        {
            $image=uploder($_FILES['image'],'products/pictures',true);
            $class_picture->store($product,$image);
            header("location:index.php?c=picture&a=list&product=$product");
        }
    break;
    case 'delete':
        $product = $_GET['product'];
        $picture = $_GET['picture'];
        $datapicture=$class_picture->show($picture);
        delete_image($datapicture->path);
        $class_picture->destroy($picture);
        header("location:index.php?c=picture&a=list&product=$product");
    break;
}

include_once 'view/picture/'.$a.'.php';