<?php
require_once 'clases/Pokemon.php';
require_once 'clases/Ataque.php';

$pokemonAtacante = new Pokemon("Piplup", 250, "Agua", 50, 30, 30);
$pokemonRecibidor = new Pokemon("Machop", 250, "Fuerza", 20, 30, 30);

$ataque3 = new Ataque("Burbuja", 20, "Agua");
$turno = false;
$combate = 0;

echo $pokemonAtacante->nombre . " empieza con " . $pokemonAtacante->vida . " de vida. <br>";
echo $pokemonRecibidor->nombre . " empieza con " . $pokemonRecibidor->vida . " de vida. <br>";
echo "<br>";

echo $pokemonAtacante->nombre . " usa " . $ataque3->nombre . ". Potencia: " . $ataque3->potencia . "<br>";
echo "<br>";

function cuantoDano($ataque, $atacante, $recibidor)
{
    if ($atacante->tipo == $ataque->tipo) {
        $fuerzaGolpe = ($atacante->ataque + $ataque->potencia) * 2;
        echo "Como el ataque es del mismo tipo, hace el doble de daño!! Potencia: " . $fuerzaGolpe . "<br>";
    } else {
        $fuerzaGolpe = $atacante->ataque + $ataque->potencia;
    }

    $recibidor->vida -= $fuerzaGolpe;

    return $fuerzaGolpe;
}

while ($pokemonAtacante->vida > 0 && $pokemonRecibidor->vida > 0) {
    if ($turno) {
        $combate++;
        echo "COMBATE NÚMERO " . $combate . "<br>";
        $danio = cuantoDano($ataque3, $pokemonRecibidor, $pokemonAtacante);
        $turno = false;
        echo $pokemonAtacante->nombre . " se queda con " . $pokemonAtacante->vida . " de vida.<br>";
        echo "El ataque ha hecho " . $danio . " de daño.<br><br>";
    } else {
        $combate++;
        echo "COMBATE NÚMERO " . $combate . "<br>";
        $danio = cuantoDano($ataque3, $pokemonAtacante, $pokemonRecibidor);
        $turno = true;
        echo $pokemonRecibidor->nombre . " se queda con " . $pokemonRecibidor->vida . " de vida.<br>";
        echo "El ataque ha hecho " . $danio . " de daño.<br><br>";
    }
}
echo "COMBATE FINALIZADO, NÚMERO DE RONDAS " . $combate;
