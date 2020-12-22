<?php

// URL http://localhost/PHP/MASTER-PHP/aprendiendo-php/10-bucle-for
// Ejemplo .
// Tabla de multiplicacion pasando parametro por la URL
if (isset($_GET["numero"])) {
    //http://localhost/PHP/MASTER-PHP/aprendiendo-php/10-bucle-for/?numero=7
    $numero = (int) $_GET["numero"];
} else {
    //http://localhost/PHP/MASTER-PHP/aprendiendo-php/10-bucle-for
    $numero = 6;
}

for ($i = 0; $i <= 10; $i++) {
    
    if ($numero == 45){
        echo "Operacion denegada";
        break;
    }
    
    echo $numero . " * " . $i . " = " . ($numero * $i) . "<br>";
}
// http://localhost/PHP/MASTER-PHP/aprendiendo-php/10-bucle-for/?numero=7