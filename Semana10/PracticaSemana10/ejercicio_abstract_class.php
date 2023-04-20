<?php

    // Creacion de una clase abstracta
    abstract class Instrumento{
        public $tipo;

        public function tocar()
        {
            echo "<h1>Tocando: </h1>";
        }

        // Creacion de una funcion abstracta dentro de la clase abstracta, esta solo se crea y no se define su implementacion.
        abstract function getInstrumento();
    }

    // Clase Guitarra que hereda de la clase abstracta Instrumento.
    class Guitarra extends Instrumento{
        // Funcion para obtener el tipo de instrumento que se esta tocando.
        public function getInstrumento()
        {
            // Retorna la variable creada al inicio de la clase abstracta la cual es el tipo de instrumento que se esta tocando.
            return $this->tipo;
        }
    }

    // Clase Saxofon
    class Saxofon extends Instrumento{
        public function getInstrumento()
        {
            return $this->tipo;
        }
    }

    // Clase Violin
    class Violin extends Instrumento{
        public function getInstrumento()
        {
            return $this->tipo;
        }
    }

    $guitarra = new Guitarra();
    $saxofon  = new Saxofon();
    $violin   = new Violin();

    $guitarra->tipo="<p>Instrumento de Cuerdas (Guitarra)</p>";
    $saxofon->tipo="<p>Intrumento de Aire (Saxofon)</p>";
    $violin->tipo="<p>Instrumento de Cuerdas 2 (Violin)</p>";

    echo $guitarra->tocar();
    echo $guitarra->getInstrumento();

    echo "<br>";

    echo $saxofon->tocar();
    echo $saxofon->getInstrumento();

    echo "<br>";

    echo $violin->tocar();
    echo $violin->getInstrumento();


?>