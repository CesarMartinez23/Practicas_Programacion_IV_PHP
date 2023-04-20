<?php

    // Creacion de interface
    interface iMascota{
        public function getNombre();
        public function getEdad();
    }

    interface iMamifero{
        public function sonido();
    }


    // Implementacion de interfaces en clases
    class Gato implements iMascota, iMamifero{
        private $nombre;
        private $edad;

        function __construct($_nombre, $_edad, $_sonido){
            $this->nombre= $_nombre;
            $this->edad= $_edad;
            $this->sonido= $_sonido;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function getEdad()
        {
            return $this->edad;
        }

        public function sonido()
        {
            return $this->sonido;
        }
    }

    $gato = new Gato("Don kike ", 22, " miauu");
    echo $gato->getNombre();
    echo $gato->getEdad();
    echo $gato->sonido();

    echo "<br>";

    $gato2 = new Gato("Pancho ", 10, " grrrr");
    echo $gato2->getNombre();
    echo $gato2->getEdad();
    echo $gato2->sonido();


?>