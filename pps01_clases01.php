<?php

class Caballo
{
    public $nombre;
    public $caballos;
    public $health;
    public $stamina;
    public $speed;
    public $acceleration;
    public $unruliness;
    public $handling;

    function __construct($nombre, $caballos, $health, $stamina, $speed, $acceleration, $unruliness, $handling)
    {
        $this->nombre = $nombre;
        $this->caballos = $caballos;
        $this->health = $health;
        $this->stamina = $stamina;
        $this->speed = $speed;
        $this->acceleration = $acceleration;
        $this->unruliness = $unruliness;
        $this->handling = $handling;
    }

    public function __toString()
    {
        $caballosStr = implode(", ", $this->caballos);
        return "Nombre: {$this->nombre}\n" .
            "Caballos: {$caballosStr}\n" .
            "Health: {$this->health}\n" .
            "Stamina: {$this->stamina}\n" .
            "Speed: {$this->speed}\n" .
            "Acceleration: {$this->acceleration}\n" .
            "Unruliness: {$this->unruliness}\n" .
            "Handling: {$this->handling}\n";
    }
}
//Caballos con constructor

//Caballo1
$caballo1 = new Caballo(
    "Common American Paint",
    ["Overo American Paint", "Tobiano American Paint"],
    3,
    4,
    3,
    3,
    0,
    "Standard"
);

//Caballo2
$caballo2 = new Caballo(
    "Special American Paint",
    ["Splashed White American Paint", "Palomino Splashed White American Paint"],
    3,
    5,
    3,
    3,
    0,
    "Standard"
);

//Caballo3
$caballo3 = new Caballo(
    "Grey Overo American Paint",
    ["Grey Overo American Paint", "Boaz"],
    5,
    5,
    4,
    4,
    0,
    "Standard"
);

//Caballos a pelo

//Caballo4
$caballo4 = new Caballo("", [], 0, 0, 0, 0, 0, "");
$caballo4->nombre = "Common American Standardbred";
$caballo4->caballos = ["Black American Standardbred", "Buckskin American Standardbred"];
$caballo4->health = 3;
$caballo4->stamina = 3;
$caballo4->speed = 4;
$caballo4->acceleration = 3;
$caballo4->unruliness = 0;
$caballo4->handling = "Race";

//Caballo5
$caballo5 = new Caballo("", [], 0, 0, 0, 0, 0, "");
$caballo5->nombre = "Special American Standardbred";
$caballo5->caballos = ["Palomino Dapple American Standardbred"];
$caballo5->health = 3;
$caballo5->stamina = 3;
$caballo5->speed = 5;
$caballo5->acceleration = 4;
$caballo5->unruliness = 0;
$caballo5->handling = "Standard";
