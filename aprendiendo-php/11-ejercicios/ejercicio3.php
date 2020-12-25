<?php

/*
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/11-ejercicios/ejercicio3.php
 * Ejercicio 3
 * Escribir un programa que imprime por pantalle los cuadrados de los 40 
 * primeros numeros naturales
 * PD: Utilizar los tres tipos de bucles
 */

$top = 40;

function alCuadrado($i){
    //v1
    //echo $i . " ^ 2 = " . ($i * $i) . "<br>";
    
    //v2
    //echo "$i ^ 2 = ". ($i*$i) . "<br>";
    
    //v3
    $exprExponencial = pow($i,2);
    echo "$i ^ 2 = $exprExponencial <br>";
}

// WHILE
echo "WHILE <br>";
$i = 1;
while ($i <= $top) {
    alCuadrado($i);
    $i++;
}

echo "<hr>";

// DO - WHILE
echo "DO - WHILE <br>";
$i = 1;
do{
    alCuadrado($i);
    $i++;
}while ($i<=$top);

echo "<hr>";

// FOR
echo "FOR <br>";
for($i = 1; $i<=$top; $i++){
    alCuadrado($i);
}