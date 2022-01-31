<?php
require_once 'model/Msetting.php';
$class_setting = new setting();
switch ($a){
    case 'admin':
        $class_middleware->middleware('update-settingadmin');
        $admin  = $class_setting->show_admin_setting();
        if (isset($_POST['btn']))
        {
            $directory = $_POST['directory'];
            $class_setting->update($directory);
            header("location:../change.php?newname=$directory&oldname=$admin->directory");

        }
    break;
    case 'user':
        $class_middleware->middleware('update-settinguser');
    break;
    case 'site':
        $class_middleware->middleware('update-settingsite');

    break;

}

include_once 'view/'.$c.'/'.$a.'.php';