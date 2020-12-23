<?php

/*
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/11-ejercicios/ejercicio2.php
 * Ejercicio 2.
 * Escribir un script en PHP que nos muestre por pantalla todos los numeros por
 * pantalla que hay de 1 al 100
 */

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

echo 6 % 2;
