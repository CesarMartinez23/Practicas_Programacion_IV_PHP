<?php
// Incluimos en el archivo con las funciones
include "functions.php";

// Obtener la accion a realizar
$action = $_POST['action'];

// Obtenemos los valores
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];

if ($action == "guardar") {
    // Guardar los datos en un array
    saveData($name, $lastName, $age);
    // Redirigir
    header('Location: index.php');
}

if ($action == "editar") {
    $cod = $_POST['cod'];

    // Actualizar datos
    updateData($cod, $name, $lastName, $age);
    // Redirigir
    header('Location: index.php');
}

if ($action == "eliminar") {
    $cod = $_POST['cod'];

    // Llamado a la funcion eliminar
    deleteData($cod);
    // Redirigir
    header('Location: index.php');
}
?>