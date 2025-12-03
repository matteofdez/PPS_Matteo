<?php

class Pokemon
{
    public $nombre;
    public $vida;
    public $tipo;
    public $ataque;
    public $defensa;
    public $velocidad;

    function __construct($nombre, $vida, $tipo, $ataque, $defensa, $velocidad)
    {
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->defensa = $defensa;
        $this->velocidad = $velocidad;
    }

      public function getPokemon() {
        return "Pokemon: " . $this->nombre . " " . $this->vida;
    }
}