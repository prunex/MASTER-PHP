<?php

/* 
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/12-funciones
 */

function muestraNombre(){
    echo "Remus <br>";
    echo "Ionut <br>";
    echo "Pruna <br>";    
    echo "<hr>";
}

//muestraNombre();
//muestraNombre();
//muestraNombre();

function tabla ($num){
    echo "Tabla de multiplicacion con $num: <br/>";
    for ($i = 0; $i <= 10; $i++){
        echo "$i * $num = " . ($i * $num) . "<br/>";
    }
}

//tabla(55);

// localhost/PHP/MASTER-PHP/aprendiendo-php/12-funciones/?num=55
//var_dump($_GET);
if($_GET){
    if(isset($_GET["num"])){
        echo $_GET["num"];
        tabla((int)$_GET["num"]);
    } else {
        tabla(55);
    }
}

echo "<hr>";

function calculadora ($num1, $num2 = 10){
    echo " $num1 + $num2 = " . ($num1 + $num2) . "<br/>";
    echo " $num1 - $num2 = " . ($num1 - $num2) . "<br/>";
    echo " $num1 * $num2 = " . ($num1 * $num2) . "<br/>";
    if ($num1 != 0 || $num2 != 0){
        echo " $num1 + $num2 = " . ($num1 + $num2) . "<br/>";
    } else {
        echo "No se puede hacer una division con cero. <br/>";
    }   
    echo "<hr>";
}

calculadora(4, 76);
calculadora(6);


function suma ($num1, $num2 = 10){
    return $num1 + $num2;
}

echo suma(5) . "<br/>";

echo "<hr>";

function saludo($nombre){
    $myCadena = "";
    $myCadena .= "Hola, ";
    $myCadena .= $nombre . "!";
    $myCadena .= "<br/>";
    //var_dump($myCadena);
    return $myCadena;
}
echo saludo("Remus");

echo "<hr>";


//Ejercicio
function getNombre($nombre){
    return "El nombre es: $nombre";
}
function getApellidos($apellidos){
    return "Los apellidos son $apellidos";
}
function devuelveNombreApellidos ($nombre, $apellidos){
    $myTexto = getNombre($nombre). "<br/>"
            . getApellidos($apellidos);
    return $myTexto;
}
echo devuelveNombreApellidos("Remus", "Pruna");