<?php

/*
 * URL: localhost/PHP/MASTER-PHP/aprendiendo-php/14-arrays/funciones.php
 */

$array2_superheroes = array("Batman", "Superman", "Wonder Woman", "Green Lantern", "Aquaman");

var_dump($array2_superheroes);

echo "</br>";

// Ordenar ascedente un array utilizando la funcion integrada sort($array);
//sort($array2_superheroes);
asort($array2_superheroes);
var_dump($array2_superheroes);
// la funcion asort($array) hace lo mismo pero al cambio de sort($array),
//      mantiene la asociacion de indices
// Es decir que sobreescribe la primera posicion del array con el primer
//      elemento que lo encuentra alfabeticamente.

echo "</br>";

// Ordenar descendente un array utilizando la funcion integrada asort($array);
arsort($array2_superheroes);
var_dump($array2_superheroes);

echo "</br>";

$array_numeros = array(1,5,7,3,9);
var_dump($array_numeros);
echo "</br>";
sort($array_numeros);
var_dump($array_numeros);

// Añadir elementos al array al final de la lista
echo "</br>";
var_dump($array2_superheroes);
$array2_superheroes[] = "Cyborg";
echo "</br>";
var_dump($array2_superheroes);
//Tambien se puede utilizar array_push($array, "elemento-array")
//      podemos introducir tantos elementos que deseamos seperados por coma
echo "</br>";
array_push($array2_superheroes, "Hawkgirl");
var_dump($array2_superheroes);

// Extraer el ultimo elemento del final del array
//      array_pop($array);
// Un alternativa sera unset()
//      unset($array[indice]);

echo "<br/><hr/>";

// Seleccionar una o más claves aleatorias de un array
// Declaramos nuestro array $entrada
$entrada = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
var_dump($entrada);
echo "</br>";
// En una variable guardamos 
$claves_aleatorias = array_rand($entrada, 2);
echo $entrada[$claves_aleatorias[0]] . "</br>";
echo $entrada[$claves_aleatorias[1]] . "</br>";
var_dump($claves_aleatorias);

echo "<br/>";

// Devolucion de un array con los elementos en orden inverso
var_dump(array_reverse($entrada));

// Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito
echo "<br/><hr/>";
$array_colores = array(0 => 'azul', 1 => 'rojo', 2 => 'verde', 3 => 'rojo');
var_dump($array_colores);
echo "<br/>";
var_dump(array_search('verde', $array_colores)); // $clave = 2;
echo "<br/>";
var_dump(array_search('rojo', $array_colores));  // $clave = 1;
echo "<br/>";
var_dump(array_search('blanco', $array_colores));  // false;
echo "<br/>";

// Contar todos los elementos de una array o algo de un objeto
var_dump(count($array_colores));