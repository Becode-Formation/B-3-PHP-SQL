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

if (isset($_GET["age"])){

}