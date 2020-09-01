<?php
	require('connect.php'); // Dans fonction ?

    $name = $_POST['name'];
    $difficulty = $_POST["difficulty"];
    $dist = $_POST['distance'];
    $dur = $_POST['duration'];
    $height = $_POST['height_difference'];
	
	if(isset($name, $difficulty, $dist, $dur, $height)){
		$test = $dt->prepare("INSERT INTO hiking(rando_name, difficulty, distance, duration, height_difference) 
							VALUES(:rando_name, :difficulty, :distance, :duration, :height_difference)");
		$test->execute(array(
			'rando_name' => $name,
			'difficulty' => $difficulty,
			'distance' => $dist,
			'duration' => $dur,
			"height_difference" => $height
		));
		$send = "Envoyé !";
	}
        
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/rando/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="time" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
    <?php echo $send?>
</body>
</html>