<?php
// Archivos
// $file = 'datos.txt';
define("FILE", "datos.txt");

// Funcion para listar datos
function getData()
{
    //  Si el archivo no existe, lo crea
    if (!file_exists(FILE)) {
        file_put_contents(FILE, '');
    }
    // Obteneer los datos del archivo
    $data = file_get_contents(FILE);
    $data = json_decode($data, true);

    // Si los datos no son array, lo inicializamos
    if (!is_array($data)) {
        $data = [];
    }
    return $data;
}
//Funcion para guardar datos
function saveData($name, $lastName, $age)
{
    // Obtenemos los datos actuales del archivo
    $data = getData();

    // Crear nuevo registro
    $record = [
        "name" => $name,
        "lastName" => $lastName,
        "age" => $age
    ];

    // Agregar el nuevo registro al array de datos
    $data[] = $record;

    // Convertir el array a formato json y lo guardamos
    $data = json_encode($data);
    file_put_contents(FILE, $data);
}

// Funcion para modificar un registro
function updateData($cod, $name, $lastName, $age){
    // Obtenemos los datos actuales del archivo
    $data = getData();

    // Actualizamos el registro correspondiente
    $data[$cod]['name'] = $name;
    $data[$cod]['lastName'] = $lastName;
    $data[$cod]['age'] = $age;

    // Convertir a formato json
    $data = json_encode($data);
    file_put_contents(FILE, $data);
}

// Funcion para eliminar
function deleteData($cod){
    // Obtener los datos
    $data = getData();

    // Eliminar registro
    unset($data[$cod]);

    // Reindexar
    $data = array_values($data);

    // Convertir ael array a formato JSON y guardar archivo
    $data = json_encode($data);
    file_put_contents(FILE, $data);
}
?>