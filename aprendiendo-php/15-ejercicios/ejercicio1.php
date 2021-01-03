<?php

/* 
 * URL: localhost/PHP/MASTER-PHP/aprendiendo-php/15-ejercicios/ejercicio1.php
 * 
 * Ejercicio1
 * Se da un array con 8 numeros donde se debe de hacer sobre el mismo array
 * lo siguiente:
 * - Recorer el array y muestro por pantalla (posicion + elemento)
 * - Ordenarlo ascedente y mostralo por pantalla
 * - Mostrar su longitud
 * - Buscar un elemento en concreto y mostrarlo por pantalla tanto el elemento
 *      como su posicion
 */

//Declaracion del array
$arrayNumeros = array(12, 24, 28, 5, 1, 2, 10, 17);

// Recorer el arrau y muestro por pantalla (posicion + elemento)
echo "Recorer el array y muestro por pantalla (posicion + elemento)";
echo "<br>";
for($i= 0; $i<count($arrayNumeros); $i++){
    echo "\$arrayNumeros[$i] = $arrayNumeros[$i] <br>" ;
}

echo "<hr>";

// Ordenarlo ascedente y mostralo por pantalla
echo "Ordenarlo ascedente y mostralo por pantalla";
echo "<br>";
sort($arrayNumeros);
for($i= 0; $i<count($arrayNumeros); $i++){
    echo "\$arrayNumeros[$i] = $arrayNumeros[$i] <br>" ;
}

echo "<hr>";

// Mostrar su longitud
echo "Mostrar su longitud";
echo "<br>";
echo "La longitud del array es de " . count($arrayNumeros) . " elementos. <br>";

echo "<hr>";

// Buscar un elemento en concreto y mostrarlo por pantalla tanto el elemento
//      como su posicion
echo "Buscar un elemento en concreto y mostrarlo por pantalla tanto el" .
        "elemento como su posicion. <br>";
$elemento = 11;
echo "El el elemento $elemento del array se encuentra en la poscion " .
        array_search($elemento, $arrayNumeros) .
        "<br>";
