<?php

// Operadores artiméticos

$numero1 = 65;
$numero2 = 33;

echo "$numero1 + $numero2 = " . ($numero1 + $numero2) . "<br>";
echo "$numero1 - $numero2 = " . ($numero1 - $numero2) . "<br>";
echo "$numero1 * $numero2 = " . ($numero1 * $numero2) . "<br>";
echo "$numero1 / $numero2 = " . ($numero1 / $numero2) . "<br>";
echo "$numero1 % $numero2 = " . ($numero1 % $numero2) . "<br>";


// Operadores de incremento y decremento ++ y --
//Valor inicial
$year = 2019;
// Valor prefix
$year1 = ++$year;
echo "\$year: $year, \$year1: $year";
echo "<br>";
//Valor postfix
$year1 = $year++;
echo "\$year: $year, \$year1: $year1";
echo "<br>";


// Operadores de asignacion
$edad = 55;
echo $edad; echo "<br>";
echo $edad+=5; echo "<br>";
echo ($edad + 5); echo "<br>";