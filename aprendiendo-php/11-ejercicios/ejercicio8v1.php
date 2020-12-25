<?php

/*
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/11-ejercicios/ejercicio8v1.php
 * Ejercicio 8v1
 * Recojer dos numero por la URL ($_GET) e imprime todos los numeros impares
 * entre los dos valores introducidas
 */

//var_dump($_GET);
if ($_GET) {
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $num1 = (int) $_GET["num1"];
        $num2 = (int) $_GET["num2"];
        //var_dump($num1);

        if ($num1 > 1 && $num2 > 1) {
            if ($num1 > $num2) {
                $aux = $num1;
                $num1 = $num2;
                $num2 = $aux;
            }

            echo "Los valores introducidos por la URL son: <br>" .
            "$num1 de tipo " . gettype($num1) . " y <br>" .
            "$num2 de tipo " . gettype($num2) . ".";

            echo "<hr>";
            
            $primos = 0;

            for ($i = $num1; $i <= $num2; $i++) {
                //echo "$i <br>";
                $divisiones = 0;
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $divisiones++;
                    }
                }
                echo "$i";
                if ($divisiones == 0) {
                    $primos++;
                    echo " es primo.";
                } 
                echo "<br>";
            }
            echo "Hay $primos numeros primos. <br>";
        } else {
            echo "Debes de introducir numeros mayores que 1.";
        }
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

// http://localhost/PHP/MASTER-PHP/aprendiendo-php/11-ejercicios/ejercicio8v1.php?num1=4&num2=30

//echo floor(5 / 2);
echo "Execution time: " . (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]);