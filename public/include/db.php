<?php
$db = new PDO("mysql:host=localhost;dbname=php_shop","root","");
//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->exec("SET NAMES utf8");
session_start();