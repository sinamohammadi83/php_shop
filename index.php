
    <?php

    function view($view,$vars='')
    {
        $exp = explode('.',$view);
        $imp = implode('/',$exp);
        if (file_exists('view/'.$imp.'.php'))
        {
            include_once 'view/'.$imp.'.php';
        }else{
            echo 'view not exists';
        }
    }

    function redirect($redirect)
    {
        header("location:$redirect");
    }

    $route = [];
    $route['/post/create'] = 'PostController@create';
    $route['/post/store'] = 'PostController@store';
    $route['/post/index'] = 'PostController@index';
    $route['/post/delete/:key'] = 'PostController@delete';
    $req = explode('/',$_SERVER['REQUEST_URI']);

    if (array_key_exists(3,$req))
    {
        $route_key = $req[3];
        array_pop($req);
        $req1 = implode('/',$req);
        if (array_key_exists($req1.'/:key',$route)){
            $controller = explode('@',$route[$req1.'/:key'])[0];
            $action = explode('@',$route[$req1.'/:key'])[1];
            if (file_exists('controller/'.$controller.'.php'))
            {
                include_once 'controller/'.$controller.'.php';
                $class = new $controller();
                $class->$action($route_key);
            }else{
                echo 'controller not exists';
            }
        }else{
            view('errors.404');
        }
    }else{
        $req1 = implode('/',$req);
        if (array_key_exists($_SERVER['REQUEST_URI'],$route)){
            $controller = explode('@',$route[$req1])[0];
            $action = explode('@',$route[$req1])[1];
            include_once 'controller/'.$controller.'.php';
            $class = new $controller();
            $class->$action();
        }else{
            view('errors.404');
        }
    }
        /*include_once 'public/include/functions.php';
        date_default_timezone_set("Asia/Tehran");
        include_once 'public/include/db.php';
        require_once 'Middleware/CheckPermissionMiddleware.php';
        $class_middleware = new CheckPermissionMiddleware();
        require_once 'controller/Cmain.php';
        if (!isset($_GET['response'])) {
            include_once 'view/header.php';
        }
        @$c=$_GET['c']?$_GET['c']:'index';
        @$a=$_GET['a']?$_GET['a']:'index';
        if (file_exists("controller/C$c.php"))
        {
            include_once "controller/C$c.php";
        }
        if (!isset($_GET['response'])) {
            include_once 'view/footer.php';
        }*/
    ?>