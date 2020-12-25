<?php

/* 
 * localhost/PHP/MASTER-PHP/aprendiendo-php/12-funciones/variables.php
 * 
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

function holaMundo(){
    //Sino no declaramos la variable global no se puede usar.
    global $saludo; 
    echo $saludo;
}
holaMundo();