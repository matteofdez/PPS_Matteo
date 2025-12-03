 <?php
    class trabajo
    {
        public $nombre;
        public $dificultad;
        public $asignatura;
        
        /**
         * Constructor de la clase Trabajo
         * @param string $nombre Nombre del trabajo
         * @param float $dificultad dificultad del trabajo
         * @param string $asignatura asignatura a la que pertenece el trabajo
         */
        function __construct($nombre, $dificultad, $asignatura)
        {
            $this->nombre = $nombre;
            $this->dificultad = $dificultad;
            $this->asignatura = $asignatura;
        }
    }
