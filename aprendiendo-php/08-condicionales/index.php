<?php
// URL http://localhost/PHP/MASTER-PHP/aprendiendo-php/08-condicionales/
/* 
 * OPERADORES DE COMPARACION
 * ==   Igual
 * ===  Identico
 * !=   Diferente
 * <>   Diferente
 * !==  No identico
 * <    Menor que estricto
 * >    Mayor que estricto
 * <=   Menor o igual que
 * >=   Mayor o igual que
 */

// Ejemplo 1
$color = "rojo";
if($color === "rojo"){
    echo "El color es rojo";
} else {
    echo "El color no es rojo"; 
}

echo "<br>";

// Ejemplo 2
$year = 2020;
if ($year == date("Y")){
    echo "Los años son identicos";
} else {
    echo "Los años no son identicos";
}

// Ejemplo 3
$edad = 42;
$mayoria_edad = 18;
