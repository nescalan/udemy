<?php
$servername = "localhost";
$username = "root";
$password = "4u3p7px6";
$database = "curso_php_ajax";

// Intenta conectarte a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a MySQL";

// Resto de tu código para interactuar con la base de datos

// Cierra la conexión cuando hayas terminado
$conn->close();
?>