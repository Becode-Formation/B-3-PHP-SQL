<?php
try {
    $bdd = new PDO('mysql:host=mysqldb;dbname=weatherapp;charset=utf8', 'root', 'root');
}catch (Exception $e){
    dir('Erreur : ' .$e->getMessage());
}
?>
