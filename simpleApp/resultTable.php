<?php
// Incluimos el archivo de funciones
include "functions.php";

// Obtenemos los datos
$data = getData();
?>

<a href="form.php">Nuevo Registro</a><br>   
<table>
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <?php foreach($data as $cod => $record) { ?>
        <tr>
            <td><?php echo $record['name']; ?></td>
            <td><?php echo $record['lastName']; ?></td>
            <td><?php echo $record['age']; ?></td>
            <td>
                <a href="form.php?cod=<?php echo $cod; ?>">Editar</a>

                <form action="crud.php" method="POST">
                    <input type="hidden" name="action" id="action" value="eliminar">
                    <input type="hidden" name="cod" id="cod" value="<?php echo $cod; ?>">
                    <button type="submit" onclick="return confirm('Estas seguro que deseas eliminar el registro de <?php echo($record['name'] . " " . $record['lastName']) ?> ?');">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>