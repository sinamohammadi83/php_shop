<?php
require_once 'model/Mproperty.php';
require_once 'model/MpropertyGroup.php';
$class_property = new property();
$class_property_group = new propertyGroup();

switch ($a)
{
    case 'list':
        $class_middleware->middleware('read-property');
        $properties = $class_property->all();
    break;
    case 'add':
        $class_middleware->middleware('create-property');
        $property_groups = $class_property_group->all();
        if (isset($_POST['btn']))
        {
            $title = $_POST['title'];
            $property_group_id = $_POST['property_group_id'];
            $class_property->store($title,$property_group_id,date("y-m-d h:i:s"));
            header('location:index.php?c=property&a=list');
        }
    break;
    case 'edit':
        $class_middleware->middleware('update-property');
        $id = $_GET['id'];
        $property_groups = $class_property_group->all();
        $property = $class_property->show($id);
        if (isset($_POST['btn']))
        {
            $title = $_POST['title'];
            $property_group_id = $_POST['property_group_id'];
            $class_property->update($title,$property_group_id,date("y-m-d h:i:s"),$id);
            header('location:index.php?c=property&a=list');
        }
    break;
    case 'delete':
        $class_middleware->middleware('delete-property');
        $id = $_GET['id'];
        $class_property->destroy($id);
        header('location:index.php?c=property&a=list');
    break;
}

include_once 'view/property/'.$a.'.php';