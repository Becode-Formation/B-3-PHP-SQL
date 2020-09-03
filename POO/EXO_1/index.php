<?php

class Form{

    public function create($pos){
        if($pos == "start"){
            return "<form method='post'>";
        } else if ($post == "end"){
            return "</form>";            
        }
    }
    public function input($type, $inputName){
        return "<input type=' ".$type." ' name=' ".$inputName." '/>";
    }

    public function select($selectName, ...$optionValue){
        forEach ($optionValue as $n){
            $opt .= "<option value='".$n."'>".$n."</option>";
        }
        return "<select name=' ".$selectName." '>" . $opt . "</select>";
    }

    public function textArea($areaName){
        return "<textarea name=' " .$areaName. " ' ></textarea>";
    }

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
echo $form->submit();
echo $form->create("end");
?>