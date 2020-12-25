<?php

/*
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/11-ejercicios/ejercicio4.php
 * Ejercicio 4
 * Recojer dos numeros por la URL (parametro GET) y haz todas las operaciones
 * basicas de una calculadora (suma, resta, multiplicacion y division) de los
 * dichos numeros
 */

//var_dump($_GET);
//echo "<br>";

if ($_GET) {
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $num1 = (int)$_GET["num1"];
        $num2 = (int)$_GET["num2"];
        
        echo "Calculadora. <br>";
        echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
        echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
        echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
        if (!($num1 == 0 || $num2 == 0)){
            echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
        } else {
            echo "No se puede hacer divisiones con 0 (cero)";
        }
    }
} else {
    echo "Introduce correctamente los paramentros y valores por la URL <br>";
    echo "Donde al final de la URL, justo despues de '.php' se introduce <br>";
    echo "el signo de interogacion, el parametro, el signo igual y el valor.";
    echo "<br>";
    echo "Si se introduce mas de un parametro,"
        ." se separan con el signo ampersand";
    echo "<br>";
    echo "Ejemplo: URL.php?num1=4&num2=3";
}