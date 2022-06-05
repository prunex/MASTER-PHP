<?php
/*
 * URL: localhost/PHP/MASTER-PHP/aprendiendo-php/23-ejercicios/ejercicio1.php
 * 
 * Ejercicio 1
 * Crear una sesion que aumente su valor en uno o disminuye en uno en funcion
 * de si al parametro GET counter esta a uno o a cero.
 */

session_start();

if (!isset($_SESSION["numero"])) {
    $_SESSION["numero"] = 0;
}
if (isset($_GET["counter"]) && $_GET["counter"] == 1) {
    $_SESSION["numero"] += 1;
}

if (isset($_GET["counter"]) && $_GET["counter"] == 0) {
    $_SESSION["numero"] -= 1;
}
//EOF
?>

<h1>El valor de la sesion numeor es: <?= $_SESSION["numero"] ?></h1>

<a href="ejercicio1.php?counter=1">Aumentar el valor</a>
<br>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>

