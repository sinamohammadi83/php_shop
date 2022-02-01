
    <?php
        include_once 'public/include/functions.php';
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
        }
    ?>