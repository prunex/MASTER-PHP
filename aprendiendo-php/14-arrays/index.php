<?php

/*
 * Linux/UNIX, Windows:
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/14-arrays
 * 
 * MacOS:
 * http://localhost/MASTER-PHP/aprendiendo-php/14-arrays 
 */ 
 
/* 
 * Arrays
 * DEF: Es un colecion o conjunto de datos/valores del mismo tipo, 
 *      bajo un unico nombre. Para acceder a los valores del array se puede usar
 *      indice numerico o alfanumerico
 */

// Declaracion de un array vacio version 1
$array1_vacio = array();
var_dump($array1_vacio);
echo "<br/>";
var_dump(gettype($array1_vacio));

echo "<hr/>";

// Declaracion de un array con contenido version 1
$array2_superheroes = array("Batman", "Superman", "Wonder Woman", "Green Lantern", "Aquaman");
var_dump($array2_superheroes);
echo "<br/>";

// Acceder a un elemento en concreto de nuestro array version 1
echo $array2_superheroes[4];
echo "<br/>";
var_dump($array2_superheroes[4]);

echo "<hr/>";

// Declaracion de un array version version2
$array3_vacio = [];
var_dump($array3_vacio);
echo "<br/>";
var_dump(gettype($array3_vacio));

echo "<hr/>";

// Declaracion de un array con contenido version 2
$array4_coches = ["Volkswagen", "Skoda", "Seat", "Lamborghini", "Porsche"];
var_dump($array4_coches);

echo "<hr/>";

// Recorer un array con for
echo "<ul>";
for ($i = 0; $i < count($array4_coches); $i++) {
    echo "<li>" . $array4_coches[$i] . "</li>";
}
echo"</ul>";

echo "<hr/>";

// Recorer un array con foreach v1
// $array4_coches -> Es nuestro array
// $key -> Es la posicion
// $value -> Es el valor de la dicha posicion del array
foreach ($array4_coches as $key => $value) {
    // $array4[x] = Valor
    echo "\$array4_coches[" . $key . "] = " . $value . "</br>";
}

echo "<hr/>";

// Recorer un array con foreach v2
// $array4_coches -> Es nuestro array
// $value -> Es el valor del array
// NOTA: No nos requiere la posicion (key)
foreach ($array4_coches as $value) {
    echo $value . "</br>";
}

echo "<hr/>";

// Array asociativo
// Anteriormente hemos trabajado con los arrays normales pero ahora vamos a 
//      un indice asociativo al valor de nuestro array.
// Se declara asi
$personas = array(
    "nombre" => "Remus",
    "apellidos" => "Pruna",
    "web" => "google.es"
);
var_dump($personas);
echo "</br>";
echo $personas["apellidos"];
echo "</br>";
//  Recorer un array asociativo for foreach version completa
foreach ($personas as $key => $value) {
    echo "\$personas[$key]= $value </br>";
}

echo "<hr/>";

// Array multidimensional
$array_contactos = array(
    array(
        "nombre" => "Remus",
        "apellido" => "Pruna",
        "web" => "remuspruna.es"
    ),
    array(
        "nombre" => "Pepe",
        "apellido" => "Llario",
        "web" => "pepellario.es"
    ),
    array(
        "nombre" => "Manolo",
        "apellido" => "Manuel",
        "web" => "manolomanuel.es"
    ),
    array(
        "nombre" => "Paco",
        "apellido" => "Pacolino",
        "web" => "pacopacolino.es"
    ),
);
var_dump($array_contactos);
echo "</br>";

foreach ($array_contactos as $key => $values) {
    echo "[$key] ";
    foreach ($values as $key => $value) {
        echo $key .": " . $value . "; ";
    }
    echo "</br>";
}