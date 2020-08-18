<?php 
 // Series of exercises on PHP conditional structures.

// 1.1 Clean your room

$room_is_filthy = false;
$dirty = false;
if( $dirty){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

//1.2 Clean your Room improved
$possible_states = ["health hazard","filthy", "dirty", "clean", "immaculate"];

$room_filthiness = $possible_states[4]; 

if($room_filthiness == "health hazard" ){
	echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == "dirty" ){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
}else if ($room_filthiness == "immaculate"){
	echo "<br>Woaw ! ";
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise
$now = gmdate("H:i"); 

if($now > '05:00' AND $now < '09:00'){
// Test the value of $now and display the right message according to the specifications.
	echo 'Good Morning !';
} else if ('09:01' < $now AND $now < '12H00'){
	echo 'Good day !';
} else if ('12:01' < $now AND $now < '16:00'){
	echo 'Good afternoon ! ';
} else if ('16:01' < $now AND $now < '21:00'){
	echo 'Good Evening !';
} else {
	echo 'Good Night !';
}

// 3. "Different greetings according to age" Exercise
//4 "Ajouter le genres
//5 Ajouter langue
$radioVal = $_GET['gender'];
$language = $_GET['language'];
// Variable pour changer le texte
$english = NULL;

if (isset($_GET["age"]) AND isset($radioVal) AND isset($language)){
	// Change le texte en fonction de la réponse
	if($language == 'yes'){
		$english = "Hello";
	} else {
		$english = "Aloha";
	}
	//Female
	if($radioVal == 'female'){
		if($_GET["age"] <= 12) {
			echo "Hello Miss Teen !";
		} else if( 12 < $_GET["age"] AND $_GET["age"] <= 18 ){
			echo "$english  Miss Teenager !";
		} else if (18 < $_GET["age"] AND $_GET["age"] < 115) {
			echo "$english  Madam !";
		} else if( 115 <= $_GET["age"]){
			echo "$english Madam! Still alive ? Are you a robot, like me ? Can I hug you ?";
		}
	} else if ($radioVal == 'male'){ //male
		if($_GET["age"] <= 12) {
			echo "$englishMister Teen !";
		} else if( 12 < $_GET["age"] AND $_GET["age"] <= 18 ){
			echo "$english Mister Teenager !";
		} else if (18 < $_GET["age"] AND $_GET["age"] < 115) {
			echo "$english  Sir !";
		} else if( 115 <= $_GET["age"]){
			echo "$english Sir! Still alive ? Are you a robot, like me ? Can I hug you ?";
		}
	}
} 

//Form incomplète
?>
<form method="get" action="">
	<label for="age">Please type your age :</label>
	<input type="text" name="age">

	<p>Male or female  ?</p>
	<input type="radio" name="gender" value="male">
	<label for="male">Male</label><br />

	<input type="radio" name="gender" value ="female">
	<label for='female'>Female</label><br />

	<label for="language">Do you speak English ?</label><br />
	<input type="radio" name='language' value="yes">
	<label for='yes'>Yes</label><br />
	<input type="radio" name='language' value="no">
	<label for='no'>No</label><br />

	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
// The Girl Soccer Team
$name = $_GET["sName"];
$gender = $_GET["sGender"];
$age = $_GET["sAge"];

if(isset($name) AND isset($gender) AND isset($age)){
	if($gender == "sGirl" AND 21 < $age AND $age < 40){
		echo "Welcome to the team $name !";
	} else {
		echo "Sorry $name you don't fit the criteria..";
	}
} 
?>

<form method="get" action ="">
	<p> Insert your information for the soccer Team selection :</p>
	<label for="sName">Enter your name :</label>
	<input type="text" name="sName"><br />

	<input type="radio" name="sGender" value ="sGirl">
	<label for="sGirl">Girl</label><br />

	<input type="radio" name="sGender" value="sBoy">
	<label for="sBoy">Boy</label><br />

	<label for="sAge">Enter your age :</label>
	<input type="text" name="sAge"><br />

	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
//Exo 8 : School Sucks exercice
$note = $_GET['note'];

if(isset($note)){
	if($note <= 4){
		echo "This work is really bad. What a dumb kid! ";
	} else if ( 5 <= $note AND $note <= 9){
		echo "This is not sufficient. More studying is required.";
	} else if ($note == 10){
		echo  "barely enough!";
	} else if (11 <= $note AND $note <= 14){
		echo "Not bad!";
	} else if (15 <= $note AND $note <= 18){
		echo "Bravo, bravissimo!";
	} else if (19 <= $note AND $note <= 20){
		echo "Too good to be true : confront the cheater!";
	}
}

?>

<form method="get" action ="">
	<label for="note">Enter your note :</label>
	<input type="text" name="note"><br />

	<input type="submit" name="submit" value="Greet me now">
</form>

