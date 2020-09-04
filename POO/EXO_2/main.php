<?php

class Html{

    public function css($cssLink){
        echo  "<link rel='stylesheet' href=' " . $cssLink ." ' />";
    }
    public function meta(){
        echo " <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    }

    public function img($src, $alt){
        echo "<img src=' " . $src . " ' alt= ' " . $alt ." ' />";
    }

    public function link($link, $altLink, $txtLink){
        echo "<a href=' " . $link . " ' alt=' " . $altLink . " ' >" . $txtLink . "</a>"; 
    }

    public function scriptJs($script){
        echo "<script src=' " . $script . " '></script>";
    }
}
?>