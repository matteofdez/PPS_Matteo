<!DOCTYPE html>
<html>

<body>
    <h1>Ejercicio 1. Saludo básico</h1>
    <?php

    $miNombre = "Matteo";
    print "Hola, soy " . $miNombre;
    ?>

    <h1> Ejercicio 2. Calculadora simple</h1>
    <?php
    $num1 = 10;
    $num2 = 5;

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo "Número 1: $num1 <br>";
    echo "Número 2: $num2 <br><br>";

    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multiplicacion <br>";
    echo "División: $division <br>";
    ?>

    <h1>3. Conversión de Temperatura</h1>
    <?php
    $celsius = 25;
    $fahrenheit = ($celsius * 9 / 5) + 32;

    echo $fahrenheit;
    ?>

    <h1>4. Cálculo de Edad en Días</h1>
    <?php
    $edad = 15;
    $year = 365;

    $dias_vividos = $edad * $year;
    echo "Has vivido $dias_vividos días.";
    ?>

    <h1>5. Precio con IVA</h1>
    <?php
    $precio_sin_iva = 50;
    $iva_porcentaje = 21;

    $iva = $precio_sin_iva * $iva_porcentaje / 100;
    $total = $precio_sin_iva + $iva;

    echo "Precio sin IVA: $precio_sin_iva €<br>";
    echo "IVA (21%): $iva €<br>";
    echo "Precio total: $total €<br>";
    ?>

    <h1>6 Intercambio de valores</h1>
    <?php
    $a = 5;
    $b = 10;

    echo "Antes del intercambio $a y $b <br>";

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    //a

    echo "Después del intercambio $a y $b ";
    ?>
    <h1>7. Cálculo de Área de Rectángulo</h1>
    <?php
    $base = 8;
    $altura = 12;

    $area = $base * $altura;

    echo "El área de un rectángulo con la base: $base y altura: $altura es: $area.";
    ?>

    <h1>8. Promedio de Notas</h1>
    <?php
    $nota = 7;
    $nota1 = 8;
    $nota2 = 9;

    $promedio = ($nota + $nota1 + $nota2) / 3;

    echo "Nota 1: $nota <br>";
    echo "Nota 2: $nota1 <br>";
    echo "Nota 3: $nota2 <br>";
    echo "Nota promedio: $promedio <br>";
    ?>

    <h1>9. Conversión de Moneda</h1>
    <?php
    $dolares = 100;
    $tipoCambio = 0.85;

    $euros = $dolares * $tipoCambio;

    echo "$dolares dólares son equivalentes a " . number_format($euros, 2) . " euros.";
    ?>

    <h1>10. Cálculo de Propina</h1>
    <?php
    $cuenta = 75;
    $porcentajePropina = 0.15;

    $propina = $cuenta * $porcentajePropina;
    $total = $cuenta + $propina;

    echo "Cuenta: " . number_format($cuenta, 2) . "€<br>";
    echo "Propina (15%): " . number_format($propina, 2) . "€<br>";
    echo "Total a pagar: " . number_format($total, 2) . "€";
    ?>

    <h1>11. Contador Reales</h1>
    <?php
    $inicio = 9990;

    while ($inicio <= 10000) {
        echo $inicio . "<br>";
        $inicio++;
    }
    ?>

    <h1>12. Suma de Números</h1>
    <?php
    $numero = 1;
    $suma = 0;

    while ($numero <= 5) {
        $suma += $numero;
        $numero++;
    }

    echo "La suma de los primeros 5 números naturales es: $suma";
    ?>

    <h1>13. Números Pares</h1>
    <?php
    $numero = 2;
    $contador = 1;

    while ($contador <= 5) {
        echo $numero . "<br>";
        $numero += 2;
        $contador++;
    }

    ?>
    <h1>14. Tabla de Multiplicar</h1>
    <?php
    $numero = 5;
    $contador = 1;

    echo "Tabla de multiplicar del $numero:<br>";

    while ($contador <= 10) {
        $resultado = $numero * $contador;
        echo "$numero x $contador = $resultado<br>";
        $contador++;
    }
    ?>
    <h1>15. Contador con Límite Variable</h1>
    <?php
    $limite = 7.5;
    $numero = 1;

    while ($numero <= $limite) {
        echo $numero . "<br>";
        $numero++;
    }
    ?>
    <h1>16. Factorial de un Número</h1>
    <?php
    $numero = 5;
    $factorial = 1;
    $contador = $numero;

    while ($contador > 0) {
        $factorial *= $contador;
        $contador--;
    }

    echo "El factorial de $numero es: $factorial";
    ?>
    <h1>17. Números Impares hasta Límite</h1>
    <?php
    $numero = 1;

    while ($numero < 20) {
        echo $numero . "<br>";
        $numero += 2;
    }

    ?>
    <h1>18. Contador Enteros</h1>
    <?php
    $inicio = 9995;
    $limite = 10000;

    while ($inicio <= $limite) {
        echo $inicio . "<br>";
        $inicio++;
    }
    ?>
    <h1>-----------------------------------------------------------------------------------</h1>
    <h1>1. Número Par o Impar</h1>
    <?php
    $numero = 7;
    if ($numero % 2 == 0) {
        echo "$numero es par.";
    } else {
        echo "$numero es impar.";
    }
    ?>

    <h1>2. Positivo, Negativo o Cero</h1>
    <?php
    $numero = -3;
    if ($numero > 0) {
        echo "$numero es positivo.";
    } elseif ($numero < 0) {
        echo "$numero es negativo.";
    } else {
        echo "$numero es cero.";
    }
    ?>

    <h1>3. Nota Aprobada o Suspenso</h1>
    <?php
    $nota = 6;
    if ($nota >= 4.5) {
        echo "La nota $nota está aprobada.";
    } else {
        echo "La nota $nota está suspensa.";
    }
    ?>

    <h1>4. Día de la Semana</h1>
    <?php
    $dia = 3;
    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "Número inválido";
            break;
    }
    ?>

    <h1>5. Año Bisiesto</h1>
    <?php
    $año = 2024;
    if (($año % 4 == 0 && $año % 100 != 0) || ($año % 400 == 0)) {
        echo "$año es bisiesto.";
    } else {
        echo "$año no es bisiesto.";
    }
    ?>

    <h1>6. Dos Números Par o Impar y Operaciones</h1>
    <?php
    $num1 = 4;
    $num2 = 6;

    if ($num1 % 2 == 0 && $num2 % 2 == 0) {
        $suma = $num1 + $num2;
        $producto = $num1 * $num2;
        echo "Ambos son pares. Suma: $suma, Producto: $producto";
    } else {
        $resta = $num1 - $num2;
        $division = $num2 != 0 ? $num1 / $num2 : "No se puede dividir entre 0";
        echo "No ambos pares. Resta: $resta, División: $division";
    }
    ?>

    <h1>7. Descuento según Edad</h1>
    <?php
    $edad = 17;
    $precio = 100;
    if ($edad < 18 || $edad > 65) {
        $precio *= 0.8;
    }
    echo "El valor a pagar es: $precio €";
    ?>

    <h1>8. Clasificación de Nota</h1>
    <?php
    $nota = 8;
    if ($nota >= 0 && $nota <= 4) {
        echo "Suspenso";
    } elseif ($nota >= 5 && $nota <= 6) {
        echo "Aprobado";
    } elseif ($nota >= 7 && $nota <= 8) {
        echo "Notable";
    } elseif ($nota >= 9 && $nota <= 10) {
        echo "Sobresaliente";
    } else {
        echo "Nota inválida";
    }
    ?>

    <h1>9. Ordenar Tres Números de Mayor a Menor</h1>
    <?php
    $a = 5;
    $b = 9;
    $c = 2;
    $numeros = [$a, $b, $c];
    rsort($numeros);
    echo "Ordenados: " . implode(", ", $numeros);
    ?>

    <h1>10. Números Pares entre 1 y 50</h1>
    <?php
    $numero = 2;
    while ($numero <= 50) {
        echo $numero . "<br>";
        $numero += 2;
    }
    ?>

    <h1>11. Contar Dígitos de un Número</h1>
    <?php
    $numero = 12345;
    $digitos = strlen((string)abs($numero));
    echo "El número $numero tiene $digitos dígitos.";
    ?>

    <h1>12. Número Primo</h1>
    <?php
    $numero = 27;
    if ($numero < 2) {
        echo "$numero no es primo.";
    } else {
        $esPrimo = true;
        $i = 2;
        while ($i <= sqrt($numero)) {
            if ($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
            $i++;
        }
        echo $numero . ($esPrimo ? " es primo." : " no es primo.");
    }
    ?>


</body>

</html>