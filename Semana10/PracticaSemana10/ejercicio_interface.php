<?php

    interface iVolante{
        public function girar();
    }

    interface iPito{
        public function pitar();
    }

    class Coches implements iVolante, iPito{
        private $girar;
        private $pito;

        function __construct($_girar, $_pito){
            $this->girar = $_girar;
            $this->pito = $_pito;
        }

        public function girar()
        {
            return $this->girar;
        }

        public function pitar()
        {
            return $this->pito;
        }
    }

    $coche1 = new Coches("Giro: Giro a la izquierda ", "Pito: pip pip");
    echo $coche1->girar();
    echo $coche1->pitar();

    echo "<br>";

    $coche2 = new Coches("Giro: Giro a la derecha ", "Pito: din din");
    echo $coche2->girar();
    echo $coche2->pitar();

    echo "<br>";

    $coche3 = new Coches("Giro: No puedo girar choque ", "Pito: poooommmm");
    echo $coche3->girar();
    echo $coche3->pitar();
?>