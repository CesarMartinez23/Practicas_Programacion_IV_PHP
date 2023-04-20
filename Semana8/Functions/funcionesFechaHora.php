<?php
   // funciones de fecha y hora en php
   // date(format,[timestamp]);
   echo time() ."<br/><br/>";
   // mostrar identificadores de horas disponibles

   /*
   $identificadore = DateTimeZone::listIdentifiers();
   foreach($identificadore as $key => $valores){
    echo $valores."<br/><br/>";
   }
   */

   // Establecer una zona horaria 

   /*
   $identificador = "Pacific/Wake";
   date_default_timezone_set($identificador);
   echo date_default_timezone_get();
   */

   // cambiar de zona horaria 
   echo "El tiempo en: " .date_default_timezone_get(). " es " .date("H: i: s") ."<br/><br/>";   
   date_default_timezone_set("Pacific/Wake");
   echo "El tiempo en: " .date_default_timezone_get(). " es " .date("H: i: s")."<br/><br/>";

   // funcion mktime

   //mktime(hour, minute, second, month, day, year, is_dst);


   echo mktime(0,0,0,10,13,2025)."<br/><br/>";

   // funciones de fecha 
   // hora y fecha completa
   echo date("r")."<br/><br/>";

   // am 
   echo date("a")."<br/><br/>";
   echo date("A")."<br/><br/>";

   // devuelve la hora sin cero a la izquierda 
   echo date("g")."<br/><br/>";
   echo date("G")."<br/><br/>";

   //
   echo date("h")."<br/><br/>";
   echo date("H")."<br/><br/>";

   // 
   echo date("i")."<br/><br/>";
   echo date("s")."<br/><br/>";

   // parametros del dia 

   // devuelve el mes con ceros a la izquierda 

   echo date("d")."<br/><br/>";

   // devuelve el mes sin ceros a la izquierda 
   echo date("j")."<br/><br/>";

   // devuelve las primera tres letras del nombre del dia 
   echo date("D")."<br/><br/>";

   // devuelve las el nombre del dia 
   echo date("l")."<br/><br/>";

   // devuelve el dia de semana sin cero a la izquierda 

   echo date("w")."<br/><br/>";

   // devuelve el año sin espacios iniciales 
   echo date("z")."<br/><br/>";

   // devuel el numero del mes con ceros a la izquiersa 
   echo date("m")."<br/><br/>";

   // devuelve el numero del mes sin cero a la izquierda 
   echo date("n")."<br/><br/>";

   // devuelve el nombre del mes 
   echo date("F")."<br/><br/>";

   // devuelve el numero del mes 
   echo date("t")."<br/><br/>";

   // parametros para año

   // devuelve el si el año es bisiesto o 0 si no es un año bisiesto

   echo date("L")."<br/><br/>";

   // devuelve el formato en año de cuatro digitos
   echo date("Y")."<br/><br/>";

   // devuelve dos digito año formato 

   echo date("y")."<br/><br/>";
?>