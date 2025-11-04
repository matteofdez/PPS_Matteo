<?php
// Autor: Matteo

$numeroElementos = 6;
$serieFibonacci = fibonacci($numeroElementos);

function fibonacci($numeroFibonacci)
{
    $serie = [];

    if ($numeroFibonacci <= 0) {
        return $serie;
    }

    $serie[] = 0;

    if ($numeroFibonacci == 1) {
        return $serie;
    }

    $serie[] = 1;

    for ($i = 2; $i < $numeroFibonacci; $i++) {
        $serie[] = $serie[$i - 1] + $serie[$i - 2];
    }

    return $serie;
}


echo "Fibonacci: [" . implode(", ", $serieFibonacci) . "]" . "<br>";

if (isset($serieFibonacci[4]) && $serieFibonacci[4] == 3) {
    echo "CORRECTO: El quinto número es el 3." . "<br>";
} else {
    echo "INCORRECTO: El quinto número no es 3." . "<br>";
}
