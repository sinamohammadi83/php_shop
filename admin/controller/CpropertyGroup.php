<?php
require_once 'model/MpropertyGroup.php';
$class_propertyGroup = new propertyGroup();

switch ($a)
{
    case 'list':
        $class_middleware->middleware('read-property_group');
        $property_groups = $class_propertyGroup->all();
    break;
    case 'add':
        $class_middleware->middleware('create-property_group');
        if (isset($_POST['btn']))
        {
            $title = $_POST['title'];
            $time = date('y-m-d h:i:s');
            $class_propertyGroup->store($title,$time);
            header('location:index.php?c=propertyGroup&a=list');
        }
    break;
    case 'edit':
        $class_middleware->middleware('update-property_group');
        $id = $_GET['id'];
        $property_group = $class_propertyGroup->show($id);
        if (isset($_POST['btn']))
        {
            $title = $_POST['title'];
            $time = date('y-m-d h:i:s');
            $class_propertyGroup->update($title,$time,$id);
            header('location:index.php?c=propertyGroup&a=list');
        }
    break;
    case 'delete':
        $class_middleware->middleware('delete-property_group');
        $id = $_GET['id'];
        $class_propertyGroup->destroy($id);
        header('location:index.php?c=propertyGroup&a=list');
    break;
}

include_once 'view/propertyGroup/'.$a.'.php';