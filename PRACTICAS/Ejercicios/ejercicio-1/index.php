<?php //index.php

// Declaracion de variables
$celsius = (int) $_POST["celsius"];
$farenheit = (int) $_POST["farenheit"];
$resultCelsius = 0;
$resultFarenheit = 0;

if (isset($_POST["submit"])) {
    if (!empty($_POST["celsius"])) {
        $resultFarenheit = ($celsius * 9 / 5) + 32;
        echo "Result Farenheit: $resultFarenheit";
    }

    if ($_POST["farenheit"] != "") {
        $resultCelsius = (-17.22 * 9 / 5) + 32;
    }
}

if (isset($_POST["clear"])) {
    $resultCelsius = 0;
    $resultFarenheit = 0;

}


require "./view/index.view.php";

?>