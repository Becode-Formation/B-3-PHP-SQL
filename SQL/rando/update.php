<?php 
  try {
    $dt = new PDO('mysql:host=mysqldb;dbname=becode;charset=utf8', 'root', 'root');
}catch (Exception $e){
    die('Erreur : ' .$e->getMessage());
}

try {
	$res = $dt -> prepare('SELECT * FROM hiking WHERE id = :id');
	$res ->execute(['id' => $_GET['id']]);
	$rando = $res->fetch();
}catch(Exception $err){
	die("Erreur : " .$err->getMessage());
}

$id = $rando['id'];
$rName = $_POST['name'];
$difficulty = $_POST["difficulty"];
$dist = $_POST['distance'];
$dur = $_POST['duration'];
$height = $_POST['height_difference'];

if(isset($_POST['button'])){
	$query = "UPDATE hiking SET rando_name = '$rName',difficulty = '$difficulty', distance = '$dist', duration = '$dur', height_difference = '$height' 
	WHERE id = '$id' AND rando_name = '$rName' ";
	$dt->exec($query);
	}

	$send = "Update!";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="./read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="<?php echo $rando['rando_name']?>">
		</div>
		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option <?php if($rando['difficulty'] == "très facile"){ echo "selected ";} ?> value="très facile">Très facile</option>
				<option <?php if($rando['difficulty'] == "facile"){ echo "selected ";} ?>value="facile">Facile</option>
				<option <?php if($rando['difficulty'] == "moyen"){ echo "selected ";} ?>value="moyen">Moyen</option>
				<option <?php if($rando['difficulty'] == "difficile"){ echo "selected ";} ?>value="difficile">Difficile</option>
				<option <?php if($rando['difficulty'] == "très difficile"){ echo "selected ";} ?>value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="<?php echo $rando['distance']?>">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="time" name="duration" value="<?php echo $rando['duration']?>">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="<?php echo $rando['height_difference']?>">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>