<?php
require_once 'model/Mslider.php';
$class_slider = new slider();

switch ($a){
    case 'list':
        $class_middleware->middleware('read-slider');
        $sliders = $class_slider->all();
    break;
    case 'add':
        $class_middleware->middleware('create-slider');
        if (isset($_POST['btn']))
        {
            $title = $_POST['title'];
            $url = $_POST['url'];
            $image = uploder($_FILES['image'],'sliders',true);
            $class_slider->store($title,$image,$url);
            header('location:index.php?c=slider&a=list');
        }
    break;
    case 'edit':
        $class_middleware->middleware('update-slider');
        $id = $_GET['id'];
        $slider = $class_slider->show($id);
        if (isset($_POST['btn']))
        {
            $title = $_POST['title'];
            $url = $_POST['url'];
            if ($_FILES['image']['name']) {
                delete_image($slider->image);
                $image = uploder($_FILES['image'], 'sliders', true);
            }else{
                $image = $slider->image;
            }
            $class_slider->update($title,$image,$url,$id);
            header('location:index.php?c=slider&a=list');
        }
    break;
    case 'delete':
        $class_middleware->middleware('delete-slider');
        $id = $_GET['id'];
        $slider = $class_slider->show($id);
        delete_image($slider->image);
        $class_slider->destroy($id);
        header('location:index.php?c=slider&a=list');
    break;
}

include_once 'view/slider/'.$a.'.php';