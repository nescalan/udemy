<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Ejercicio 1 - Unidades de Temperatura</title>
</head>

<body>
    <main>
        <div class="header">
            <h1>Ejercicio 1</h1>
        </div>

        <!-- FORM: Formulario para seleccionar los grados celsius -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
            <fieldset>
                <legend>Conversor de Temperatura</legend>

                <div class="celsius">
                    <label for="celsius">Grados Celsius</label>
                    <input name="celsius" type="number" step="any" placeholder="°C" min="-18" max="104" value="<?php if ($resultCelsius != 0) {
                        echo $resultCelsius;
                    } ?>">
                </div>
                <!-- <div class="range">
                    <input id="howYouRateIt" name="range" type="range" min="1" max="10" value="5"
                        onchange="showValue(this.value)">
                    <span id="range">5</span>
                </div> -->
                <div class="farenheit">
                    <label for="farenheit">Grados Farenheit</label>
                    <input name="farenheit" type="number" step="any" placeholder="°F" min="-20" max="100" value="<?php if ($resultFarenheit != 0) {
                        echo $resultFarenheit;
                    } ?>">
                </div>
            </fieldset>

            <!-- BOTONES -->
            <div class="botones">
                <button name="submit">Realizar cálculo</button>
                <button name="clear">Limpiar campos</button>
            </div>
        </form>
    </main>

    <script>
        function showValue(newValue) {
            document.getElementById("range").innerHTML = newValue;
        }
    </script>
</body>

</html>