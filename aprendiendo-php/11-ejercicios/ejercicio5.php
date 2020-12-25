<?php

/*
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/11-ejercicios/ejercicio5.php
 * Ejercicio 5
 * Recojer dos numero por la URL ($_GET) e imprime todos los numero entre 
 * los dos valores introducidas
 */

//var_dump($_GET);
if ($_GET) {
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $num1 = (int) $_GET["num1"];
        $num2 = (int) $_GET["num2"];
        //var_dump($num1);
        
        if ($num1 > $num2){
            $aux = $num1;
            $num1 = $num2;
            $num2 = $aux;
        }
        
        echo "Los valores introducidos por la URL son: <br>" .
        "$num1 de tipo " . gettype($num1) . " y <br>" .
        "$num2 de tipo " . gettype($num2) . ".";
    }
} else {
    echo "Introduce correctamente los paramentros y valores por la URL <br>";
    echo "Donde al final de la URL, justo despues de '.php' se introduce <br>";
    echo "el signo de interogacion, el parametro, el signo igual y el valor.";
    echo "<br>";
    echo "Si se introduce mas de un parametro,"
    . " se separan con el signo ampersand";
    echo "<br>";
    echo "Ejemplo: URL.php?num1=4&num2=3";
}

echo "<br> <hr>";

for ($i = $num1; $i <= $num2; $i++) {
    echo "$i <br>";
}