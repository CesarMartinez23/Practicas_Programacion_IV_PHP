<?php
   // funcion de colores, tendra un valor predeterminado verde 

   function colores($colores = "Blanco"){
    return "<p> Su color favorito es: $colores</p>";
   }

   // pasamos un valor como un parametro
   echo colores("Negro");

   // sino se pasa un valor como argumento
   // tomara el valor por defecto
   echo colores();

   // valores por defectos 

   function saludos($nombre){
    $nombre .= "Buenas tardes";
   }
   $nombre ="Cesar Martinez";
   saludos($nombre);
   echo $nombre ."<br/><br/>";

   // declaramos un arreglo llamdo fruta
   $fruta = array("Melon", "Mango", "Sandia");

   // creamos una funcion llamada frutas y pasaremos un argumento fruta 

   function frutas($fruta){
     //llamando al arreglo de fruta y agregamos una fruta al arreglo
     array_push($fruta, "Papaya");
   }
   // llamando a la funcino fruta 
   frutas($fruta) ."<br/>";
   //var_dump($fruta) ."<br/>";

   function saludo(&$nombre){
       $nombre .= ", Buenas tardes";
   }
   $nombre = "Mateo Martinez";
   saludo($nombre);
   echo $nombre  ."<br/><br/>";

   // funciones anonimas

   // definimos una funcion anonima 

   $saludo = function(){
    return "Hello World";
   };
   echo $saludo()."<br/><br/>";

   // añadiendo la funcion en otra

   function saludosss($saludar){
      echo $saludar()."<br/><br/>";
    }

   saludosss(function(){
    return "Buenos dias";
   });


   // clausuras 

   $color = "Rojo";
   $mostrar = function() use($color){
    echo "Su color favorito es: $color"."<br/><br/>";
   };
   $mostrar();

   // Si se quiere alterar 

   $colorA = "Rojo";

   $mostrarr = function() use(&$colorr){
    echo $colorr = "Verde"."<br/><br/>";
   };
   $mostrarr();
   echo $colorr; // mostrara el Rojo    


   // funciones anonimas callbacks
   $saludo = function($nombre){
    printf("Hola ". $nombre);
   };
   
   $saludo("Ana"); 
   call_user_func($saludo, "Amiga ");


   // declaraciones de tipo
   /*
   function saludo(array $nombre){
     echo "Hola" .join(" ",$nombre);
   }
   saludo(["Cesar", "Mateo"]);
   */

   // declaraciones de tipo de evolucion 
   function suma($num1, $num2):int{
     return $num1 + $num2;
   }

   var_dump(suma(10,10));










?>