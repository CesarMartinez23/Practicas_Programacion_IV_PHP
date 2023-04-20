 <?php
    // clase persona 
    class Persona{
        public $dpi;
        public $nombre;
        public $edad;

        function __construct($dpi, $nombre, $edad){
            $this -> dpi = $dpi;
            $this -> nombre = $nombre;
            $this -> edad = $edad;
        }

        // creamo un metodo de datos personales
        public function getDatosPersonales(){
            $datos = "
            <h2>DATOS PERSONES: </h2>
            DPI: {$this -> dpi} <br/>
            NOMBRE : {$this -> nombre} <br/>
            EDAD : {$this -> edad} <br/>
            ";
            return $datos;
        }
    }
?>