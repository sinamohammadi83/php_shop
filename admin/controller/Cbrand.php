<?php
require_once 'model/Mbrand.php';
$class_brand=new brand();

switch ($a)
{
    case 'list':
    $brands=$class_brand->all();
    break;

    case 'add':
        if (isset($_POST['btn']))
        {
            $title = $_POST['title'];
            $image = uploder($_FILES['image'], 'brands', true);
            $class_brand->add($title,$image,date("Y-m-d h:i:s"),date("Y-m-d h:i:s"));
            header('location:index.php?c=brand&a=list');
        }
    break;

    case 'edit':
        if (!isset($_GET['id']))
        {
            header('location:index.php');
        }
        $id=$_GET['id'];
        $brand=$class_brand->show($id);
        if (isset($_POST['btn']))
        {
            if ($_FILES['image']['name']) {
                unlink('../'.$brand->image);
                $image = uploder($_FILES['image'], 'brands', true);
            }else{
                $image = $brand->image;
            }
            $title = $_POST['title'];
            $class_brand->update($title,$image,$id,date("y-m-d h:i:s"));
            header('location:index.php?c=brand&a=list');
        }
    break;

    case 'delete':
        $id=$_GET['id'];
        $brand=$class_brand->show($id);
        unlink('../'.$brand->image);
        $class_brand->delete($id);
        header('location:index.php?c=brand&a=list');
    break;
}

include_once 'view/'.$c.'/'.$a.'.php';