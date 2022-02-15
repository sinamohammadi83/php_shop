<?php
require_once 'model/Muser.php';
require_once 'model/Mrole.php';
$class_user = new user();
$class_role = new role();

switch ($a){
    case 'list':
        $class_middleware->middleware('read-user');
        $users = $class_user->all();
    break;
    case 'add':
        $class_middleware->middleware('create-user');
        $roles = $class_role->all();
        if(isset($_POST['btn']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $image = uploder($_FILES['image'],'users',true);
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $role_id = $_POST['role_id'];
            $class_user->store($name,$email,$image,$role_id,md5($password));
            header('location:index.php?c=user&a=list');
        }
    break;
    case 'edit':
        $class_middleware->middleware('update-user');
        $id = $_GET['id'];
        $user = $class_user->show($id);
        $roles = $class_role->all();
        if (isset($_POST['btn']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $role_id = $_POST['role_id'];
            if ($_POST['password']!='')
            {
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];
            }else{
                $password = $user->password;
            }

            if ($_FILES['image']['name'])
            {
                delete_image($user->image);
                $image = uploder($_FILES['image'],'users',true);
            }else{
                $image = $user->image;
            }
            $class_user->update($name,$email,$image,$role_id,md5($password),$id);
            header('location:index.php?c=user&a=list');
        }
    break;
}

include_once 'view/user/'.$a.'.php';