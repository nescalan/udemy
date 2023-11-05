<?php

$conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');

if ($conexion->connect_errno) {
    $respuesta = [
        'error' => true
    ];
} else {
    $conexion->set_charset("utf8");

    // $respuesta = mysqli_query($conexion, "SELECT nombre FROM clientes WHERE nombre LIKE '" . $texto . "%'");
    $respuesta = mysqli_query($conexion, "SELECT * FROM usuarios");

    if (mysqli_num_rows($respuesta) > 0) {
        $newArray = array();

        while ($row = mysqli_fetch_assoc($respuesta)) {
            $newArray[] = $row;
        }

        echo json_encode($newArray);
    }
}

?>