<?php session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # RECIBIR LOS DATOS
    $usuario = filter_var(strtolower($_POST["usuario"]), FILTER_SANITIZE_STRING);
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    // echo "$usuario $password $password2";

    // Guardar errores 
    $errores = "";

    if (empty($usuario) or empty($password) or empty($password2)) {
        # MENSAJE: Completar todos los datos
        $errores .= "<li>Por favor, rellena todos los datos correctamente</li>";
    } else {


        # CONEXION: realiza conexion a la base de datos
        try {

            $conexion = new PDO("mysql:host=localhost;dbname=login_practica", "udemy", "4u3p7px6");

        } catch (PDOException $error) {

            # MENSAJE: error
            echo "Lo siento no podemos realizar la solicitud, inténtelo nuevamente. " . $error->getMessage();
        }

        #VALIDACION: usuario no exista
        $statement = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1");
        $statement->execute(array(":usuario" => $usuario));

        // metodo fetch devuelve false si el usuario no existe
        $resultado = $statement->fetch();
        print_r($resultado);

        if ($resultado != false) {
            # MENSAJE
            $errores .= "<li>El nombre de usuario ya existe</li>";
        } else {
            # code...
        }

    }


}


require_once "./views/registrate.view.php";


?>