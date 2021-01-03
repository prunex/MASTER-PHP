<?php

/* 
 * URL: 
 * localhost/PHP/MASTER-PHP/aprendiendo-php/15-ejercicios/ejercicio1b.php
 * 
 * Ejercicio 2:
 * Escribir un codigo en PHP mientras que su longitud sea menor que 120.
 * Mostrarlo por pantalla.
 */

$coleccion = array();
$limite = 20;
for ($i= 0; $i < $limite; $i++){
    array_push($coleccion, rand(1, $limite));
}

foreach ($coleccion as $key => $value) {
    echo "[$key]: $value <br>";
}

//var_dump($coleccion);
