<?php 

try {
    $dt = new PDO('mysql:host=mysqldb;dbname=becode;charset=utf8', 'root', 'root');

	$res = $dt -> prepare('SELECT * FROM hiking WHERE id = :id');
	$res ->execute(['id' => $_GET['id']]);
    $rando = $res->fetch();
}catch(Exception $err){
    die("Erreur : " .$err->getMessage());
}

$id = $rando['id'];
$del = "DELETE from hiking WHERE id = '$id' ";
$dt->exec($del);
echo "La promenade " . $name . "est bien supprimée !";
	
?>