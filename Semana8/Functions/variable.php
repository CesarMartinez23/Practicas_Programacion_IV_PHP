<?php
    //ejemplo de variables 
    // nuestra primera variable 

    /*
    $num1 = 5;
    // variables numero dos 
    $num2 = 5;


    // vamos a mostrar el resultado de suma num1 con num2 

    $resultado = $num1 + $num2;

    // para imprimir nuestros resultado

    echo  "El resultado de sumar  $num1 + $num2 es igual a: $resultado";

    // Concatenar 

    $nombre = "Kevin";

    $concatenacion = "Hola $nombre";

    echo "$concatenacion";

    //constante en php 
    define ("PI", 3.1415926);
    define ("BR", "<br />");
    define ("LIBRO", "PHP 6");

    print(PI);
    print(LIBRO);

    $suma = PI * $num1;

    echo "El resultado de es: $suma";

    // la condiciona if //

    // la condicinal else 

    if ($clima == "lluvia"){
        echo "Esta lloviendo";
    } else {
        echo "No esta lloviendo";
    }

    // la condicinal switch case

    switch($dia){

        case "lunes":
            $texto = "¡Feliz dia lunes!";
            break;

        case "martes":
            $texto = "¡Feliz dia Martes!";
            break;
        
        case "Miercoles": 
            $texto = "¡Feliz dia Miercoles!";
            break;
        
        case "Jueves":
            $texto = "¡Feliz dia jueves";
            break;
        
        case "Viernes":
            $texto = "¡Feliz dia viernes";
            break;   
    }
    print ($texto);

    // Default o valor por omision

    switch($dia){

        case "lunes":
            echo "Feliz dia Lunes";
            break;

        case "martes":
            echo "Feliz dia Martes";
            break;

        default: 
    }

   

    // ciclo for

    for ($i = 0; $i <=10; $i++){

        echo "Cliclo actual:" . $i . "<br />";
    }

    if($i == 11){
        echo "fin del ciclo";
    } else {
        echo "error";
    }
   

    // while loop

    $x = 27;
    if($x > 26 ){
        echo "fin de ciclo";
    }else {

        while($x < 25):
            echo "While se repite <br />";
        endwhile;
    }

    

    // do while loop


    $x=26;

    do{
        echo "se repite al menos una ves <br />";
    }while($x < 25);

    

     // foreach

     $valor = array(5,4,3,2,1, "hola mundo");
     foreach($valor as $key):
        echo $key ."<br />";
     endforeach;

    // arrays numericos 

    $numero = array("Luna", "Acosta", "Kevin", "Alexander");

    echo $numero[0] ."<br />";
    echo $numero[1] ."<br />";
    echo $numero[2] ."<br />";
    echo $numero[3] ."<br />";
    

    // recoriendo un array mediante un bucle

    // arreglo numerico
    
    $nombre = array("Luna", "Acosta", "Kevin", "Alexander");

    // recoriendo bucle

    //con foreach

    foreach($nombre as $key){
       echo $key ."<br />";
    }

    // con for

    for ($i=0; $i<$nombre;$i++):
        echo $nombre[$i]. "<br />";
    endfor;

    // array personasciativo

    $colores = array(
        "Kevin" => array("Azul", "Verde", "Rojo"),
        "Luna" => array("Negro", "Amarillo", "Blanco")
    );

    echo $colores["Kevin"][0]. "<br />";
    echo $colores["Luna"][2]. "<br />";

   

    // foreach con arreglos 

    //arreglo asociativo 

    $micolors = array(
        "Yascis" => array("Blanco", "Negro"),
        "Jordy" => array("Azul","Rojo")
    );

    foreach($micolors as $nombre => $valua){
        echo "<h2>$nombre </h2> <b> Le gustan los colores : </b ><br />";
        foreach ($valua as $colores):
            echo $colores. "<br/>";
        endforeach;
    }
    

    // Array multidimensional numerico 

    $multiDimensional = array(
        array("Jordy", "Katerin", "Carmen"),
        array(23, 24, 45),
        array("Masculino", "Femenino", "Femenino")
    );
    

    // recorremos nuestro array

    echo "Nombre: " .$multiDimensional[0][1]."<br />";
    echo "Edad: " .$multiDimensional[1][1] ."<br />";
    echo "Sexo: " .$multiDimensional[2][1] ."<br />";

   
   // array multidimesional numerico

   $Mnumerico = array(

    array("Luna", "Acosta", "Kevin"),
    array(24,45,54),
    array("Lic. ", "Ing. ", "Doc. ")
   );

   foreach($Mnumerico as $key => $valua){

    foreach($valua as $datos):
        echo $datos. "<br />";
    endforeach;
   }

   

    // array multidimesional numerico

    $multiDimensional3 = array(
        array("Jose", "Juan", "Pedro"),
        array(20,30,28),
        array("Masculino", "Femenino", "Masculino")
    );

    // utilizando for 
    for ($i=0; $i<count($multiDimensional3); $j++){
        echo "<br/> Fila: " .$i ."<br />";
        for($j = 0; $j<count($multiDimensional3[$i]); $j++){
            echo $multiDimensional3[$i][$j] ."<br />";
        } 
    }

  


    // array multidimensional numerico

    $asoc = array(
        "Jose" => array(22, "Masculino"),
        "Kevin" => array(19, "Masculino"),
        "Sandra" => array(25, "Femenino")

    );

    // recorrer el array 

    foreach($asoc as $key=>$valor){
        echo "<b/>$key</b><br/>";
        foreach($valor as $datos){
            echo  $datos ."<br/>";
        } 
    }

    */

    // agregando mas claves

    $personas = array(
        "Cesar" => array("Edad" => 22, "Sexo" => "Masculino"),
        "Mateo" => array("Edad" => 13, "Sexo" => "Masculino"),
        "Ana" => array("Edad" => 43, "Sexo" => "Femenino")
    );

    foreach($personas as $key=>$valor){
        echo "<br/><b><hr/>Nombre: </b>$key<br/>";
        foreach($valor as $key2 => $datos){
            echo "<b>".$key2 .": </b>";
            echo $datos ."<br/>";
        }        
    }
    
?>