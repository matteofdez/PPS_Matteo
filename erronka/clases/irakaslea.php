<?php
class Profesor
{
    // ATRIBUTOS (Propiedades) - todos públicos para acceso directo
    public $nombre;
    public $asignatura;
    public $aguante;
    public $conocimiento;
    public $resistencia;
    public $velocidad;

    /**
     * Constructor de la clase Profesor
     * @param string $nombre Nombre del profesor
     * @param string $asignatura Asignatura que imparte
     * @param float $aguante Cuantos ejercicios puede aguantar
     * @param float $conocimiento Nivel de dificultad de los ejercicios
     * @param float $resistencia Nivel de resistencia con respectoa a nuevas tareas
     * @param float $velocidad rapidez
     */
    public function __construct(
        $nombre,
        $asignatura,
        $aguante = 50.0,
        $conocimiento = 80.0,
        $resistencia = 5.0,
        $velocidad = 5.0
    ) {
        $this->nombre = $nombre;
        $this->asignatura = $asignatura;
        $this->aguante = $aguante;
        $this->conocimiento = $conocimiento;
        $this->resistencia = $resistencia;
        $this->velocidad = $velocidad;
    }
}

// ==================== EJEMPLO DE USO ====================

// Crear instancias de Profesor
$profesor1 = new Profesor("Carlos Méndez", "PSP", 30, 90, 8, 6);
$profesor2 = new Profesor("Ana López", "AFI", 60, 85, 4, 8);
$profesor3 = new Profesor("Pedro Gómez", "PROG");

// Acceso directo a los atributos (públicos)
echo "=== PROFESOR 1 ===<br>";
echo "Nombre: " . $profesor1->nombre . "<br>";
echo "Asignatura: " . $profesor1->asignatura . "<br>";
echo "aguante: " . $profesor1->aguante . "<br>";
echo "Conocimiento: " . $profesor1->conocimiento . "<br>";
echo "Resistencia: " . $profesor1->resistencia . "<br>";
echo "Velocidad: " . $profesor1->velocidad . "<br><br>";

// Modificar atributos directamente
$profesor1->aguante += 20; // Aupentar el aguante del profesor
$profesor2->conocimiento += 5; // El profesor tene más conocimientos lo que permite poner trabajos más duros
$profesor3->asignatura = "ADT"; // Cambia de especialidad

echo "=== DESPUÉS DE MODIFICACIONES ===<br>";
echo "Profesor 1 aguante: " . $profesor1->aguante . "<br>";
echo "Profesor 2 conocimiento: " . $profesor2->conocimiento . "<br>";
echo "Profesor 3 asignatura: " . $profesor3->asignatura . "<br><br>";

// Crear un array de profesores
$profesores = [
    $profesor1,
    $profesor2,
    $profesor3,
    new Profesor("María Ruiz", "Literatura", 40, 95, 6, 7),
    new Profesor("Juan Díaz", "Química", 70, 75, 9, 4)
];

// Mostrar todos los profesores
echo "=== TODOS LOS PROFESORES ===<br>";
foreach ($profesores as $indice => $profesor) {
    echo "Profesor " . ($indice + 1) . ": " . $profesor->nombre .
        " - " . $profesor->asignatura .
        " (aguante: " . $profesor->aguante .
        ", Conocimiento: " . $profesor->conocimiento . ")<br>";
}
