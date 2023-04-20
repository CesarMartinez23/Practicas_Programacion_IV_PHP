<?php

  //funciones de cadena
  $cadena = "Programacion Computacional IV";

  // strtolower todo minuscula
  echo strtolower($cadena) ."<br/><br/>";

  // strtoupper todo mayuscula
  echo strtoupper($cadena) ."<br/><br/>";

  // para contar el numero de caracteres 
  echo "El numero de caracteres: " .strlen($cadena) ."<br/><br/>";

  // substr para subtraer el fragmentos de una cadena
  echo "La palabra subtraida es: " .substr($cadena, 0,12) ."<br/><br/>";

  // Para reemplazar valores de una cadena en especifico 
  echo str_replace("IV", "V", $cadena) ."<br/><br/>";

  // Para contar caracteres quitandole lo que se han especificado
  echo strpos($cadena, "IV") ."<br/><br/>";

  // Para encriptar valores en de 40 caracteres hexadecimal 
  echo sha1($cadena) ."<br/><br/>";

  // Para encriptar valores en de 32 caracteres hexadecimal  
  echo md5($cadena) ."<br/><br/>";

  // para contar las palabras de una cadena
  echo str_word_count($cadena) ."<br/><br/>";

  // Para convertir la primera letra de una cadenas en Mayuscula
  echo ucfirst($cadena) ."<br/><br/>";

  // la primera letra en minuscula
  echo lcfirst($cadena) ."<br/><br/>";




?>