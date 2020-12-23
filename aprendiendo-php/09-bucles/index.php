<?php

// URL http://localhost/PHP/MASTER-PHP/aprendiendo-php/09-bucles/

// While
$numero = 0;
while ($numero <= 100){
    echo $numero;
    if ($numero !=100){
        echo ", ";
    }else {
        echo ".";
    }
    $numero++;
}

echo "<hr>";

// Ejemplo
//http://localhost/PHP/MASTER-PHP/aprendiendo-php/09-bucles/?numero=33
if(isset($_GET["numero"])){
    $numero = (int)$_GET["numero"];
}else{
    $numero = 1;
}

echo "<h7>Tabla de multiplicar con $numero </h7><br>";

$contador = 1;
while($contador <= 10){
    
    echo "$numero x $contador = " . ($numero * $contador) . "<br>";
    $contador++;
}

echo "<hr>";

// DO WHILE
$num = 11;
$cont = 1;
do{
    echo $num . " * " . $cont . " = " . ($num * $cont) . "<br>";
    $cont++;
}while($cont < 11);

echo "<hr>";

