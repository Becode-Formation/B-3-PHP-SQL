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
      echo  $pron;
}
?>