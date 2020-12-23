<?php

/*
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/11-ejercicios/ejercicio2.php
 * Ejercicio 3
 * Escribir un programa que imprime por pantalle los cuadrados de los 40 
 * primeros numeros naturales
 * PD: Utilizar el bucle while
 */

$i = 1;
while ($i <= 40) {
    echo $i . " ^ 2 = " . ($i * $i) . "<br>";
    $i++;
}

