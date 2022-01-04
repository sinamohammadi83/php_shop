<?php
require_once 'model/Mcategory.php';
$class_category=new category();

switch ($a)
{
    case 'add':
        $categories = $class_category->all();
        if (isset($_POST['btn']))
        {
            $category = $_POST['category_id'];
            $title = $_POST['title'];
            $class_category->store($category,$title,date("y-m-d h:i:s"));
            header('location:index.php?c=category&a=list');
        }
    break;
    case 'list':
        $categories = $class_category->all();
    break;
    case 'edit':
        $categories = $class_category->all();
        $id=$_GET['id'];
        $category = $class_category->show($id);
        if (isset($_POST['btn']))
        {
            $title=$_POST['title'];
            $categorys = $_POST['category_id'];
            $class_category->update($categorys,$title,date("y-m-d h:i:s"),$id);
            header('location:index.php?c=category&a=list');
        }
    break;
    case 'delete':
        $id = $_GET['id'];
        $class_category->destroy($id);
        header('location:index.php?c=category&a=list');
    break;
}

include_once 'view/'.$c.'/'.$a.'.php';