<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Personal Data</title>
</head>

<body>
  <?php
    $personas = array(
        array('nombre' => 'Cesar Martinez', 'ciudad' => 'Santa Rosa de Lima', 'edad' => 21, 'codigo' => 'SMIS055621' ),
        array('nombre' => 'Gisela Espinoza', 'ciudad' => 'San Miguel', 'edad' => 22, 'codigo' => 'SMIS0000' )
    );

    $tabla = '<table class="table">
    <tr class="bg-primary">
      <th scope="col">Nombre</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Edad</th>
      <th scope="col">Codigo</th>
    </tr>';

    foreach($personas as $persona) {
        $tabla .='<tr>';
        $tabla .='<td>' . $persona['nombre'] .'</td>';
        $tabla .='<td>' . $persona['ciudad'] .'</td>';
        $tabla .='<td>' . $persona['edad'] .'</td>';
        $tabla .='<td>' . $persona['codigo'] .'</td>';

        $tabla .= '</tr>';
    }
    $tabla .= '</table>';

    echo $tabla;
    ?>
</body>

</html>