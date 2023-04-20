<?php
   require_once ("classPerson.php");


   class Cliente extends Persona{
    private $credito;


    function __construct($dpi, $nombre, $edad){
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setCredito($credito){
        $this -> credito = $credito;
    }

    public function getCredito(){
        return $this -> credito;
    }
    
   }
?>