<?php
$servername = "localhost";
$username = "root";
$password = "4u3p7px6";
$database = "curso_php_ajax";

// Intenta conectarte a la base de datos
$conexion = new mysqli($servername, $username, $password, $database);

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