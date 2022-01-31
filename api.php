<?php
$db = new PDO("mysql:host=localhost;dbname=php_shop","root","");
//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->exec("SET NAMES utf8");
$users = $db->query("SELECT * FROM users")->fetchAll(PDO::FETCH_OBJ);
header('Content-Type: application/json; charset=utf-8');
echo json_encode([
    'data' => [
        'users' => $users
    ]
]);