<?php
include "functions.php";

// Verificamos si va a editar o agregar nuevo registro
if (isset($_GET['cod'])) {
    $cod = $_GET['cod'];
    $data = getData();
    $record = $data[$cod];
    $action = "editar";
} else {
    $record = [
        'name' => '',
        'lastName' => '',
        'age' => ''
    ];
    $action = "guardar";
}
?>

<form action="crud.php" method="POST">
    <input type="text" name="action" id="action" value="<?= $action ?>">
    <?php 
        if ($action == "editar") { ?>
            <input type="text" name="cod" id="cod" value="<?php echo $cod; ?>">
    <?php  } ?>
   
    Nombre:
    <input type="text" name="name" id="name" value="<?php echo $record['name']; ?>">
    Apellido:
    <input type="text" name="lastName" id="lastName" value="<?php echo $record['lastName']; ?>">
    Edad:
    <input type="number" name="age" id="age" value="<?php echo $record['age']; ?>">
    <button type="submit">Guardar</button>
</form>