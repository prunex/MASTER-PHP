<?php

/*
 * Linux/UNIX, Windows:
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/12-funciones/predefinidas.php
 * 
 * MacOS: 
 * http://localhost/MASTER-PHP/aprendiendo-php/12-funciones/predefinidas.php
 */


$nombre = "Remus Pruna";
var_dump($nombre);

echo "<br/>";

$formato_fecha = "d-m-Y"; //26-12-2020
echo date($formato_fecha);
echo "<br/>";
echo time();

echo "<br/>";

// Matematicas
echo "Raiz cuadrada de 10 es " . sqrt(10);
echo "<br/>";

echo "Número aleatorio entre 10 y 40: " . rand(10, 40);
echo "<br/>";

echo "Numero PI: " . pi();
echo "<br/>";

echo "Redondear: " . round(7.49076554, 4);
echo "<br/>";

// Mas funciones generales utiles
echo gettype(23);
echo "<br/>";

if (is_string($formato_fecha)){
    echo "La variable es de tipo string";
}

echo "<br/>";
if(!is_float($formato_fecha)){
    echo "La variable no es un numero con decimales sino " . gettype($formato_fecha);
}

// Comprobacion la existencia de una variable
echo "<br/>";
if(isset($edad)){
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

// Limpiador de espacio innecesario
echo "<br/>";
$frase = "     contenido       ";
echo $frase;
//var_dump ($frase);
echo "<br/>";
echo trim($frase);

// Eliminar variables / indices 
echo "<br/>";
$year = 2020;
//unset($year);
echo $year;

// Comprobacion de existencia de contenido de una variable
echo "<br/>";
$texto = NULL;
if(empty($texto)){
    echo "La variable esta vacia";
} else {
    echo "La variable no esta vacia";
}

// Contar caracteres de un string
echo "<br/>";
$cadena = "12345";
echo "La cadena '$cadena' tiene " . strlen($cadena) . " caracteres.";

// Encontrar la posicion de un carater en un string
echo "<br/>";
$frase = "Hola, mundo!";
$caracter = "un";
echo "El caracter '$caracter' del string '$frase' se encuentra "
        ."en la posicion " . strpos($frase, $caracter) . ".";

// Reemplazar palabras de un string
echo "<br/>";
echo str_replace("mundo", "Remus", $frase);


// Cambio entre mayusculas y minusculas
echo "<br/>";
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);