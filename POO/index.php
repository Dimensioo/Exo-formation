<?php

class Vehicule {
    private $name;
    private $roue;

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName(){
        return ucfirst($this->name);
    }

    public function setRoue(int $number){
        if($number < 2 || $number > 4){
            throw new Exception("Pas le bon nombre de roue");
        }
        $this->roue = $number;
    }

    public function getRoue(){
        return $this->roue;
    }

    public function accélérer(){
        echo "Vroom, Vroom !!!";
    }

}

$Voiture = new Vehicule();
$Voiture->setName("dacia");
$Voiture->setRoue(3);
$Voiture->accélérer();

var_dump($Voiture);