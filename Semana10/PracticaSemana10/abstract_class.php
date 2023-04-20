<?php

    // Clase abstracta
    abstract class Mascota{
        public $nombre;

        public function saludar(){
            echo "Funcion no abstracta ";
        }

        // Metodo Abstracto
        abstract function getNombre();
    }

    // Establecer herencia

    class Gato extends Mascota{
        public function getNombre(){
            return $this->nombre;
        }
    }

    $gato = new Gato();
    $gato->nombre = "Doky";
    echo $gato->saludar();
    echo $gato->getNombre();
    
?>