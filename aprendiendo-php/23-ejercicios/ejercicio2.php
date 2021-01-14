<?php

/* 
 * URL: localhost/PHP/MASTER-PHP/aprendiendo-php/23-ejercicios/ejercicio2.php
 * 
 * Ejercicio 2
 * 1. Debe de ser una funcion
 * 2. Debe de validar un correo con filter_var
 * 3. Recojer una variable por GET y validarla
 * 4. Mostrar el resultado
 */

function validarEmail($email){
    $status = "No valido";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }
    return $status;
}

if(isset($_GET["email"])){
    echo validarEmail($_GET["email"]);
} else {
    echo "Pasa por GET un email valido...";
}
// Valid URL
// http://localhost/PHP/MASTER-PHP/aprendiendo-php/23-ejercicios/ejercicio2.php?email=hola@hola.com
// No valid URL
// http://localhost/PHP/MASTER-PHP/aprendiendo-php/23-ejercicios/ejercicio2.php?email=hola@hola