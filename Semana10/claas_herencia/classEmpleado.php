<?php
   // llamamos nuestro archivo de classPerson.php
   require_once ("classPerson.php");

   // creamos nuestra clase empreado que va a heredar parametro de la clase persona 
   class Empleado extends Persona{
    // la clase empledo va a tener un propiedad
    protected $puesto;

    // asignamos el metodo constructor 
    function __construct($dpi, $nombre, $edad){
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setPuesto($puesto){
        $this -> puesto = $puesto;
    }

    public function getPuesto(){
        return $this -> puesto;
    }
   }
   
?>