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

echo "<br>";

// Ejemplo 3
$nombre = "David Extremadura";
$ciudad = "Madrid";
$continente = "Asia";
$edad = 42;
$mayoria_edad = 18;
if($edad >= $mayoria_edad){
    echo "$nombre es mayor de edad";
    if($continente == "Europa"){
        echo " y es de $ciudad";
    } else {
        echo " y no es de Europa.";
    }
} else {
    echo "$nombre no es mayor de edad";
}

echo "<br>";

//Ejemplo 4
$dia = 6;
if($dia == 1){
    echo "Lunes";
}elseif ($dia == 2) {
    echo "Martes";
}elseif ($dia == 3) {
    echo "Miercoles";
}elseif ($dia == 4) {
    echo "Jueves";
}elseif ($dia == 5) {
    echo "Viernes";
}elseif ($dia > 5) {
    echo "Fin de semana";
}

echo "<br>";

//Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 16;
if (($edad_oficial >= $edad1) && ($edad_oficial <= $edad2)){
    echo "Estas en la edad de trabajar";
} else {
    echo "No puedes trabjar";
}

echo "<br>";
$pais = "Francia";
if($pais == "España" || $pais == "Mexico" || $pais == "Colombia"){
    echo "En este pais se habla español";
} else {
    echo "No se habla español";
}

echo "<br>";

// SWITCH

$dia = 9;
switch ($dia){
    case 1: 
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default :
        echo "Fin de semana";
}

echo "<br>";

// GOTO
goto myMark;
echo "Instruccion 1";
echo "Instruccion 1";
echo "Instruccion 1";
myMark:
    echo "Me he saldato un par de instrucciones";
