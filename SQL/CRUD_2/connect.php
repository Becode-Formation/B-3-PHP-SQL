<?php
$dsn = 'mysql:host=mysqldb;dbname=colyseum;charset=utf8';
$user = 'root';
$password = 'root';
try{
    $db = new PDO($dsn, $user, $password);
} catch(Exception $e){
    echo 'Connection failed: ' . $e->getMessage();
}
?>