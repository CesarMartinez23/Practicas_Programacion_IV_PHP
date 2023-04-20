<?php 
    // //  Declaraciones de variables
    // $num1 = 10;
    // $num2 = 5;
    // $operacion = "suma";

    // Evaluar si se esta enviando algo
    if (isset($_POST["enviar"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = strtolower($_POST["operacion"]);


    // Operaciones a realizar
    $operaciones = ["suma","resta","multiplicacion","division"];

    // Evaluar
    if(!in_array($operacion, $operaciones)){
        echo "La operacion no es valida";
        exit();
    }

    // Evaluar
    switch ($operacion) {
        case "suma":
            $resultado = $num1 + $num2;
            break;
        case "resta":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            break;
        case "division":
            if ($num2 ==0) {
                echo "No se puede dividir por cero";
                exit();
            }
            $resultado = $num1 / $num2;
            break;
        default:
            echo "La operacion no existe";
            break;
    }

    echo "El resultado de la $operacion de $num1 y $num2 es: $resultado";
}
?>