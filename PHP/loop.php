<?php 
$names= array('John', 'jeanne', 'Joan', 'émile');
var_dump($names);

foreach ($names as $key=> $value){
	$names[$key] = ucfirst($value);
}
var_dump($names);

//EXO
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach($pronouns as $pron){
    if($pron == 'He/She'){
        echo "$pron codes <br />"; 
    } else {
        echo  "$pron code <br />";
    }
}

// $amount_of_lines = 1;

// while ($amount_of_lines <= 100)
// {
//     echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
//     // shorthand writing for 
//     // $amount_of_lines = $amount_of_lines +1;
//     $amount_of_lines ++; 

// }

// $i = 1;
// while ($i <= 20){
//     echo "$i <br/>";
//     $i ++;
// }

// for($j = 1; $j <= 120; $j ++){
//     echo "$j <br />";
// }

$members = ["Robby", "Aurore", "Alesksandra", "John", "Chris", "Gerardo", "Calvin", "Simon", "Nicolas", "Nathan", "Maxendre"];
foreach($members as $member){
    echo "$member /";
}
$countries = ["Belgique", "Allemagne", "France", "Potugal", "Angleterre", "Brésil", "Chine", "Japon", "Canada"];

?>

<html> 
<br />
<label for="country">Choose a country:</label>

<select name="country">
<?php
  foreach($countries as $country){
    echo "<option value='$country'>$country</option>";
  }
  ?>
</select> 
</html>

<?php
$countries2= [
    "BE" =>"Belgique", 
    "Al" => "Allemagne", 
    "FR" => "France",
    "PO" => "Potugal",
    "ANG" => "Angleterre",
    "BRE" => "Brésil",
    "CH" => "Chine",
    "JA"  => "Japon", 
    "CA" => "Canada"];
?>

<html> 
<br />
<label for="country2">Choose a country:</label>

<select name="country2">

<?php
  foreach($countries2 as $key => $value){
    echo "<option value='$key'>$value</option>";
  }
  ?>
</select> 
</html>
