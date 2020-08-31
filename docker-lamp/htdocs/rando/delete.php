<?php 


$id = $_GET['id'];
$name = $_POST['rando_name'];
$difficulty = $_POST["difficulty"];
$dist = $_POST['distance'];
$dur = $_POST['duration'];
$height = $_POST['height_difference'];

try {
    $dt = new PDO('mysql:host=mysqldb;dbname=becode;charset=utf8', 'root', 'root');

	$res = $dt -> prepare('SELECT * FROM hiking WHERE id = :id');
	$res ->execute(['id' => $_GET['id']]);
    $rando = $res->fetch();

    $id = $_GET['id'];
    $res = $dt->prepare('DELETE from hiking 
											WHERE id = :id AND rando_name = :rando_name');
	$res->execute(array(
		'id' => $id,
		'rando_name' => $name
    ));

    echo "La promenade " . $name . "est bien supprimée !";
    
}catch(Exception $err){
    die("Erreur : " .$err->getMessage());
}

	
?>