<?php

class Ataque
{
    public $nombre;
    public $potencia;
    public $tipo;

    function __construct($nombre, $potencia, $tipo)
    {
        $this->nombre = $nombre;
        $this->potencia = $potencia;
        $this->tipo = $tipo;
    }
      public function getAtaque() {
        return "Ataque: " . $this->nombre . " " . $this->potencia;
    }
}