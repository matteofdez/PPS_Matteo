<?php

class ArrayEjercicios
{
    private $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function maxNumber()
    {
        return max($this->arr);
    }

    public function minNumber()
    {
        return min($this->arr);
    }

    public function thirdNumber()
    {
        return $this->arr[2] ?? null;
    }

    public function arraySize()
    {
        return count($this->arr);
    }

    public function sumAll()
    {
        return array_sum($this->arr);
    }

    public function maxMinusMin()
    {
        return $this->maxNumber() - $this->minNumber();
    }

    public function multiplyTwoSmallest()
    {
        $sorted = $this->arr;
        sort($sorted);
        return $sorted[0] * $sorted[1];
    }

    public function maxPowerMin()
    {
        return pow($this->maxNumber(), $this->minNumber());
    }

    public function sortDescending()
    {
        $sorted = $this->arr;
        rsort($sorted);
        return $sorted;
    }

    public function sortAscending()
    {
        $sorted = $this->arr;
        sort($sorted);
        return $sorted;
    }

    public function triangleArea()
    {
        $base = $this->arr[0];
        $height = $this->arr[count($this->arr) - 1];
        return ($base * $height) / 2;
    }

    public function showAll()
    {
        echo "El más grande: " . $this->maxNumber() . "<br>";
        echo "El más pequeño: " . $this->minNumber() . "<br>";
        echo "El tercer número: " . $this->thirdNumber() . "<br>";
        echo "Tamaño del array: " . $this->arraySize() . "<br>";
        echo "Suma de todos los números: " . $this->sumAll() . "<br>";
        echo "Resta del más grande menos el más pequeño: " . $this->maxMinusMin() . "<br>";
        echo "Multiplicación de los 2 números más pequeños: " . $this->multiplyTwoSmallest() . "<br>";
        echo "Potencia del más grande elevado al más pequeño: " . $this->maxPowerMin() . "<br>";
        echo "Orden descendente: " . implode(", ", $this->sortDescending()) . "<br>";
        echo "Orden ascendente: " . implode(", ", $this->sortAscending()) . "<br>";
        echo "Área del triángulo: " . $this->triangleArea() . " m²<br>";
    }
}

$arr = [16, 20, 3, 56, 9];
$ariketa = new ArrayEjercicios($arr);

$ariketa->showAll();
