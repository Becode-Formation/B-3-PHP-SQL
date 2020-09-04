<?php

class Form{
    // Création du formulaire ou fermeture 
    public function create($pos){
        if($pos == "start"){
            echo "<form method='post' class='flex flex-col w-1/3 m-auto p-4 bg-white shadow-md rounded'>";
        } else if ($post == "end"){
            echo "</form>";            
        }
    }
    // Création des inputs "simple"
    public function input($type, $inputName, $labelName){
        $label = "<label for=' " . $inputName . " '>" . $labelName . "</label>"; 
        echo  $label . "<input type=' ".$type. " ' name=' ".$inputName." ' class = 'shadow appearance-none border rounded w-full my-2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'/>";
    }
    //Création d'input select
    public function select($selectName, ...$optionValue){
        forEach ($optionValue as $n){
            $opt .= "<option value='".$n."'>".$n."</option>";
        }
        echo "<select name=' ".$selectName." '>" . $opt . "</select>";
    }
    // Création de radio button
    public function radio($radioName, ...$radioValue){
        forEach($radioValue as $value){
            $radio .=  "<label for = ' " . $radioName . " '>" . $value. "</label> 
                                <input type='radio' id= ' " .$value . " ' name =' " . $radioName . " ' value=' " . $value . " ' />"; 
        }
        echo "<label for=' " . $radioName . " '>" . $radioName . "</label> " . $radio;
    }
    // Création du bouton
    public function submit(){
        echo "<button type='submit'>Envoyer</button>";
    }
}

class Validator{

    public function string($input){
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    public function integer($input){
        return filter_var($input, FILTER_SANITIZE_NUMBER_INT);
    }

    public function float($input){
        return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT);
    }
}

?>