
    <?php
        include_once 'public/include/db.php';
        require_once 'controller/Cmain.php';
        include_once 'view/header.php';
        @$c=$_GET['c']?$_GET['c']:'index';
        @$a=$_GET['a']?$_GET['a']:'index';
        if (file_exists("controller/C$c.php"))
        {
            include_once "controller/C$c.php";
        }
        include_once 'view/footer.php';
    ?>