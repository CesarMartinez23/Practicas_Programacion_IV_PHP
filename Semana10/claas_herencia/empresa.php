<?php
     require_once ("classEmpleado.php");
     require_once ("classCliente.php");

     // objeto de empleado
     $empleado = new Empleado(213463568, "Kevin Alexander", 21);
     $empleado -> setPuesto("Administrador");
     
     echo $empleado -> getDatosPersonales();
     echo "Puesto: " .$empleado -> getPuesto();

     // objeto de cliente 
     $cliente = new Cliente(3384348, "Yascis Yasmin", 18);
     $cliente -> setCredito("$ 1000 ");

     echo $cliente -> getDatosPersonales();
     echo "Credito: ".$cliente -> getCredito();
?>