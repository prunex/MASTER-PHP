<?php

/*
 * Linux/UNIX, Windows:
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/12-funciones/variables.php
 * 
 * MacOS: 
 * http://localhost/MASTER-PHP/aprendiendo-php/12-funciones/variables.php
 */

 /* 
 * Variables locales: 
 * Son las que se define dentro de una funcion y no se pueden ser usadas
 * fuera de la funcion, solo estan disponibles dentro.
 * A no ser que hagamos un return.
 * 
 * Variables globales:
 * Son las que se declaran fuera de una funcion y estan dispobiles tanto dentro 
 * que fuera de la funcion.
 * Para usarla dentro de una funcio hay que declarla global dentro de la misma
 * funcion.
 */

// Variable global
$saludo = "Hola, mundo!";

function holaMundo() {
    //Sino no declaramos la variable global no se puede usar.
    global $saludo;
    echo $saludo;

    // Por defecto una variable local, en este caso, dentro de una funcion
    // no se puede usar fuera de la funcion, a no ser que la dicha funcion
    // la devuelve donde luego llamandola podemos usarla.
    return $year = 2020;
}

echo holaMundo();

// FUNCIONES VARIABLES
function buenosDias() {
    return "Hola! Buenos dias!";
}

function buenasTardes() {
    return "Buenas tardes!";
}

function buenasNoches() {
    return "Buenas noches!";
}

$horario = "buenasNoches";
echo "<br/>".$horario();

$horario2 = "Noches";
$miFuncion = "Buenas" . $horario2;
echo $miFuncion;