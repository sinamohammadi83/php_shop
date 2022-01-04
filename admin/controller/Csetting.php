<?php
require_once 'model/Msetting.php';
$class_setting = new setting();
switch ($a){
    case 'admin':
        $admin  = $class_setting->show_admin_setting();
        if (isset($_POST['btn']))
        {
            $directory = $_POST['directory'];
            $class_setting->update($directory);
            header("location:../change.php?newname=$directory&oldname=$admin->directory");

        }
    break;
    case 'user':

    break;
    case 'site':

    break;

}

include_once 'view/'.$c.'/'.$a.'.php';