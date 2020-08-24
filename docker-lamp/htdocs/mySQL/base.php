<?php
try{
    //Connexion à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', 'MOTDEPASSE');
} catch (Exception $e) {
    //SI Erreur on l'affiche
    die('Erreur : ' .$e->getMessage());
}
?>