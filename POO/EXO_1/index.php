<?php

class Form{
    // Création du formulaire ou fermeture 
    public function create($pos){
        if($pos == "start"){
            return "<form method='post'>";
        } else if ($post == "end"){
            return "</form>";            
        }
    }
    // Création des inputs "simple"
    public function input($type, $inputName){
        return "<input type=' ".$type." ' name=' ".$inputName." '/>";
    }
    //Création d'input select
    public function select($selectName, ...$optionValue){
        forEach ($optionValue as $n){
            $opt .= "<option value='".$n."'>".$n."</option>";
        }
        return "<select name=' ".$selectName." '>" . $opt . "</select>";
    }
    //Création de textearea  ( sans blague ?)
    public function textArea($areaName){
        return "<textarea name=' " .$areaName. " ' ></textarea>";
    }
    // Création de radio button
    public function radio($radioName, ...$radioValue){
        forEach($radioValue as $value){
            $radio .=  "<label for = ' " . $radioName . " ' >" . $value. "</label> <input type='radio' id= ' " .$value . " ' name =' " . $radioName . " ' value=' " . $value . " ' />"; 
        }
        return "<label for=' " . $radioName . " '>" . $radioName . "</label> " . $radio;
    }
    // Création du bouton
    public function submit(){
        return "<button type='submit'>Envoyer</button>";
    }
}

$form = new Form();
echo $form->create("start");
echo $form->input("text", "name");
echo $form->input("email", "email");
echo $form->select("car", "Volvo", "Citroen", "Mercedes");
echo $form->textArea("msg");
echo $form->radio("gender", "Homme", "Femme", "Other");
echo $form->submit();
echo $form->create("end");
?>