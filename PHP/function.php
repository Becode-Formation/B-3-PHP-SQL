<?php
// $str = 'This is going to be shuffled !';
// $str = str_shuffle($str);
 
// // echo $str;

// $str2 = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, 
// the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. 
// This is because the human mind does not read every letter by itself but the word as a whole.";

// $str2 = explode(" ", $str2);
// $arr = [];
// foreach($str2 as $word){
//     $word = str_shuffle($word);
//     $arr[] = $word;
// }
// echo implode(" ",$arr);


function capitalize($string){
    
    echo ucfirst("$string <br />");
}

// capitalize('emile');
date_default_timezone_set('Europe/Brussels');
// echo gmdate('Y H:m:s');
// echo "<br/>";

function sum($nbr1, $nbr2){
    if(is_numeric($nbr1) && is_numeric($nbr2)){
        return $nbr1 + $nbr2;
    } else {
        echo "Error: argument is the not a number.";
    }
}

// echo sum(3, 3);

function acronym ($str){
    $str = explode(" ", $str);
    $arr = [];
    foreach($str as $word){
        ucfirst($word[$i]);
        $arr[] = $word[0];
    }
     $arr=  implode(" ",$arr);
    return $arr;
}

// echo acronym("I am a super pilote");

echo "<br />";

function replace($string){
    $reg = "/ae/";
    $string = preg_replace($reg, "æ", $string);
    return $string;
}

// echo replace("caecotrophie");

// echo "<br />";

function reverseRep($string){
    $reg = "/æ/";
    $string = preg_replace($reg, "ae", $string);
    return $string;
}

// echo reverseRep("sphærothecae");


// echo "<br />";

function feedback($message, $value = "Info"){
    $value2 = ucfirst($value);
    return "<div class=$value>$value2: $message.</div>";
}

// echo feedback("email invalid");

echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

echo "<br />";

function calculate_cone_volume($ray, $height){
    $volume = $ray * $ray * 3.14 * $height * (1/3);  
    echo "The volume of a cone which ray is $ray and height is $height = " . $volume . ' cm<sup>3</sup><br />';  
}
calculate_cone_volume(5, 3);
?>