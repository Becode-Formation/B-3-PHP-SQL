<?php

class Voiture{
    private $immat, $dateCircu = 0, $model, $brand;
    public $color , $km = 0, $weight = 0;

    //constructor
    function __construct($immat, $dateCircu, $km, $model, $brand, $color, $weight){
        $this->immat = $immat;
        $this->dateCircu = $dateCircu;
        $this->km = $km;
        $this->model = $model;
        $this->brand = $brand;
        $this->color = $color;
        $this->height = $height;
    }

    public function getModel(){
        if($this->model == 'Audi'){
            return "Désolé, le modèle " . $this->model . " est résèrvé.";
        } else {
            return "Le modèle " . $this->model . " est libre !";
        }
    }

    public function getUtilisation(){
        if($this->weight > 3500){
            return "Ce véhicule fait " . $this->weight . "Kg et est donc commerciale"; 
        } else {
            return "Ce véhicule " . $this->weight . "Kg et est donc utilitaire";
        }
    }

    public function getCountry(){
        switch ($this->immat) {
            case "BE" : 
                return "Ce véhicule est immatriculé en Belgique : " . $this->immat;
            break;
            case "FR" : 
                return "Ce véhicule est immatriculé en France : " . $this->immat;
            break;
            case "DE" : 
                return "Ce véhicule est immatriculé en Allemagne : " . $this->immat;
            break;
            default: 
                return "Bizarre.. Ce véhicule n'est pas immatriculé...";
        }
    }

    public function getUse(){
        if($this->km > 200.000){
            return "Ce véhicule est High car il comprends : " . $this->km . "Km";
        } else if($this->km > 100.00){
            return "Ce véhicule est Médium car il comprends : " . $this->km . "Km";
        } else {
            return "Ce véhciule est Low car il comprends : " . $this->km . "Km";
        }
    }
}

$audi = new Voiture("BE", "12 novembre 2020", 10000, "RS", "Blabla", "Bla", "Green", "1500");
echo $audi->getModele();

?>