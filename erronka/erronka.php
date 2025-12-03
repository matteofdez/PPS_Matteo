<?php
include_once 'clases/irakaslea.php';
include_once 'clases/trabajo.php';

$trabajo1 = new trabajo("Ariketa", 5, "ADT");

echo "<br>=== CAMBIO DE CLASE ===<br>";
echo "Profesor 1 Nombre: " . $profesor1->nombre . "<br>";

function enviarTrabajo($remitente, $destinatario, $trabajo)
{

    $impacto = $remitente->aguante + $trabajo->dificultad;

    if ($remitente->asignatura == $trabajo->asignatura) {
        $nuevo_aguante = $destinatario->aguante - ($impacto - $destinatario->resistencia) * 2;
    } else {
        $nuevo_aguante = $destinatario->aguante - ($impacto - $destinatario->resistencia);
    }

    //Se pone 0.6 por que en vez de restar el 40%, es mas fácil coger el resto, que en este caso sería el 60%
    if ($destinatario->asignatura == $trabajo->asignatura) {
        $nuevo_aguante = $destinatario->aguante - ($impacto - $destinatario->resistencia) / 0.6;
    }

    return $nuevo_aguante;
}
