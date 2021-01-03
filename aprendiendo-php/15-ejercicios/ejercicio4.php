<?php

/*
 * URL: 
 * localhost/PHP/MASTER-PHP/aprendiendo-php/15-ejercicios/ejercicio4.php
 * 
 * Ejercicio 4
 * Crea un script en php que tenga 4 variables predefinidas cada una con los
 * siguientes tipos de valores: array, string, int y booleana.
 * Que se imprime por pantalla un mensaje segun el tipo de valor que tiene 
 * cada variable.
 * 
 */

$varArray = array();
$varString = "Hola, mundo!";
$varInt = 69;
$varBool = true;

echo tipoVariableV1($varString);

// Functions START
function tipoVariableV1($variable) {
    $resultado = "The variable is a ";
    if (is_array($variable)) {
        if (!empty($variable)) {
            $resultado .= "not a ";
        }
        $resultado .= "empty array.";
    } else if (is_string($variable)) {
        if (!empty($variable)) {
            $resultado .= "not a ";
        }
        $resultado .= "empty string.";
    } else if (is_integer($variable)) {
        if (!empty($variable)) {
            $resultado .= "not a ";
        }
        $resultado .= "empty integer.";
    } else if (is_bool($variable)) {
        if (!empty($variable)) {
            $resultado .= "not a ";
        }
        $resultado .= "empty boolean.";
    }
    return $resultado;
}

function checkEmpty($variable) {
    if (!empty($variable)) {
        $resultado .= "not a ";
    }
}

// Functions FINISH