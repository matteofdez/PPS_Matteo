<?php
include_once 'clases/irakaslea.php';
include_once 'clases/trabajo.php';

$trabajo1 = new trabajo("Ariketa", 5, "ADT");

echo "<br>=== CAMBIO DE CLASE ===<br>";
echo "Profesor 1 Nombre: " . $profesor1->nombre . "<br>";

function enviarTrabajo($remitente, $destinatario, $trabajo)
{
    $impacto = $remitente->conocimiento + $trabajo->dificultad;

    if ($remitente->asignatura == $trabajo->asignatura) {
        $impacto *= 2;
    }

    //se hace 0.6 por que así se reduce un 40%
    if ($destinatario->asignatura == $trabajo->asignatura) {
        $impacto *= 0.6;
    }

    $nuevo_aguante = $destinatario->aguante - ($impacto - $destinatario->resistencia);

    return $nuevo_aguante;
}
