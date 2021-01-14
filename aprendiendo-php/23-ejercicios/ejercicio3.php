<?php
/*
 * URL: localhost/PHP/MASTER-PHP/aprendiendo-php/23-ejercicios/ejercicio3.php
 * 
 * Ejercicio 3
 * Hacer una interfaz de usuario (formulario) con dos inputs y 4 botonoes
 * - Sumar
 * - Restart
 * - Dividir
 * - Multiplicar
 */

$resultado = false;
if (isset($_POST["n1"]) && isset($_POST["n2"])) {

    if (isset($_POST["sumar"])) {
        $resultado = "El resultado es es: " . ($_POST["n1"] + $_POST["n2"]);
    }

    if (isset($_POST["restar"])) {
        $resultado = "El resultado es es: " . ($_POST["n1"] - $_POST["n2"]);
    }

    if (isset($_POST["multiplicar"])) {
        $resultado = "El resultado es es: " . ($_POST["n1"] * $_POST["n2"]);
    }

    if (isset($_POST["dividir"])) {
        $resultado = "El resultado es es: " . ($_POST["n1"] / $_POST["n2"]);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form action="" method="POST">
            <label for="n1">Numero 1:
                <input type="number" name="n1">
            </label>
            <br>
            <label for="n2">Numero 2:
                <input type="number" name="n2">
            </label>

            <br><input type="submit" value="Sumar" name="sumar"/>
            <br><input type="submit" value="Restar" name="restar"/>
            <br><input type="submit" value="Multiplicar" name="multiplicar"/>
            <br><input type="submit" value="Dividir" name="dividir"/>
        </form>

        <?php
        if ($resultado != false) {
            echo "<h1>$resultado<h1>";
        }
        ?>

    </body>
</html>