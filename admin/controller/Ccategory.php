<?php
require_once 'model/Mcategory.php';
require_once 'model/MpropertyGroup.php';
$class_category=new category();
$class_property_group = new propertyGroup();

switch ($a)
{
    case 'add':
        $property_groups = $class_property_group->all();
        $class_middleware->middleware('create-category');
        $categories = $class_category->all();
        if (isset($_POST['btn']))
        {
            $category = $_POST['category_id'];
            $title = $_POST['title'];
            $property_groups = $_POST['property_groups'];
            $class_category->store($category,$title,date("y-m-d h:i:s"));
            $category1 = $class_category->showByTitle($title);
            $class_category->attach($property_groups,$category1->id);
            header('location:index.php?c=category&a=list');
        }
    break;
    case 'list':
        $class_middleware->middleware('read-category');
        $categories = $class_category->all();
    break;
    case 'edit':
        $class_middleware->middleware('update-category');
        $categories = $class_category->all();
        $id = $_GET['id'];
        $category = $class_category->show($id);
        $property_groups = $class_property_group->all();
        if (isset($_POST['btn']))
        {
            $property_groups = $_POST['property_groups'];
            $title=$_POST['title'];
            $categorys = $_POST['category_id'];
            $class_category->update($categorys,$title,date("y-m-d h:i:s"),$id);
            $class_category->sync($category->id,$property_groups);
            header('location:index.php?c=category&a=list');
        }
    break;
    case 'delete':
        $class_middleware->middleware('delete-category');
        $id = $_GET['id'];
        $class_category->destroy($id);
        $class_category->detach($id);
        header('location:index.php?c=category&a=list');
    break;
}

include_once 'view/'.$c.'/'.$a.'.php';