<?php
$newname=$_GET['newname'];
$oldname = $_GET['oldname'];
rename($oldname,$newname);
header("location:$newname/index.php?c=setting&a=admin");
