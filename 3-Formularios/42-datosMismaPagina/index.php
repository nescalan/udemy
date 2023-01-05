<?php

if ($_POST) {
    echo $_POST["firstName"];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS: Reset -->
    <link rel="stylesheet" href="./reset.css">
    <!-- CSS: Custom Styles -->
    <link rel="stylesheet" href="./css/global.css">
    <title>Enviado datos de un Formularios con PHP a la misma pagina</title>
</head>

<body>
    <div class="container">
        <div class="title">
            <h1>42 Misma Pagina</h1>
            <h2>Welcome</h2>
            <p>Log in to your App to continue</p>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <label for="firstName">Nombre:</label>
            <input type="text" name="firstName" id="firstName">

            <label for="sexo">Hombre</label>
            <input type="radio" name="sexo" id="sexo" value="hombre">

            <label for="sexo">Mujer</label>
            <input type="radio" name="sexo" id="sexo" value="mujer">

            <label for="terms">Aceptas los terminos</label>
            <input type="checkbox" name="terms" id="terms">

            <button type="submit" value="default" class="btnSubmit">Submit</button>
        </form>
    </div>
</body>

</html>