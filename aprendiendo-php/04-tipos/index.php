<?php
/*
 * TIPOS DE DATOS:
 *  - Entero (int / integer): 99
 *  - Flotante / decimales (float / double): 3.45
 *  - Cadenas (string): "ejemplo1", 'ejemplo2'
 *  - Boleano: 0, FALSE, 1, TRUE
 *  - null
 *  - Array/Vectores (coleciones de datos)
 *  - Objetos (conjunto de datos y funcions o metodos independientes)
 */

$numero = 44;
echo gettype($numero)."<br>";

$decimal = 2.2;
echo gettype($decimal)."<br>";

$texto = "esto es un texto";
echo gettype($texto)."<br>";

$verdadero = true;
echo gettype($verdadero)."<br>";

$nula = null;
echo gettype($nula)."<br>";

$_ = null;
echo gettype($_)."<br>";

/*
 * - El nombre de una variable no puede empezar con un numero
 *      pero puede contener numeros.
 *      Ej: $variable1, $v4r14bl3, etc.
 * - El nombre de una variable solo puede existir, como caracter especial,
 *      guillon bajo o underscores.
 *      Ej: $_hola, $_hola_, $h_o_l_a, $_h_o_l_a_, $_, $__, etc.
 * - El nombre de una variable pude y sera recomndable tener el tipo 
 *      de nomeclatura tal llamado camelCase o caja camello.
 *      Se aplica a variable cuyo nombre contiene una frase
 *      o palabras compuestas.
 *      Ej: $estoEsUnEjemploDeCamelCase
 */

$_hola = "hola";

$mi_nombre = "Remus Pruna";
var_dump($mi_nombre);

echo "<br>";

$mi_nombre_array[] = "Remus";
$mi_nombre_array[] = "Pruna";
var_dump($mi_nombre_array);
echo "<br>";
echo gettype($mi_nombre_array)."<br>";

// Usando las comillas dobles se puede introcudor la variable sin concatenar.
echo "el valor de la variable numero es $numero";
echo "<br>";

// Si se necesita usar un nombre de una variable dentro de una cadena de texto
// se usa contrabara
echo "el valor de la variable \$numero es $numero";
echo "<br>";

// Usando comilla simple solo se puede concatenar
echo 'El valor de la variable $numero es' . $numero;
echo "<br>";

