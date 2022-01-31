<?php
require_once 'model/Mrole.php';
$class_role = new role();


switch ($a)
{
    case 'add':
        $class_middleware->middleware('create-role');
        $permissions = $class_role->permission();
        if (isset($_POST['btn']))
        {
            $title = $_POST['title'];
            $permissions = $_POST['permission'];
            $class_role->store($title,$permissions,date('y-m-d h:i:s'));
            header('location:index.php?c=role&a=list');
        }
        break;
    case 'list':
        $class_middleware->middleware('read-role');
        $roles = $class_role->all();
    break;
    case 'edit':
        $class_middleware->middleware('update-role');
        $id = $_GET['id'];
        $role = $class_role->show($id);
        $permissions = $class_role->permission();
        if (isset($_POST['btn']))
        {
            $title = $_POST['title'];
            $permissions = $_POST['permission'];
            $class_role->update($permissions,$role->id,$title,date('y-m-d h:i:s'));
            header('location:index.php?c=role&a=list');
        }
    break;
    case 'delete':
        $class_middleware->middleware('delete-role');
        $id = $_GET['id'];
        $class_role->destroy($id);
        header('location:index.php?c=role&a=list');
        break;
}

include_once 'view/role/'.$a.'.php';