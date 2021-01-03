<?php

/* 
 * URL: 
 * localhost/PHP/MASTER-PHP/aprendiendo-php/15-ejercicios/ejercicio3.php
 * 
 * Ejercicio 3
 * Programa que compruebe si una variable esta vacia donde luego rellenarla
 * con texto en minusculas y mostrarlo en mayusculas
 */

$texto = "";
if(empty($texto)){
    $texto .= "esto es un texto de pruebas";
    if($texto === strtolower($texto)){
        echo strtoupper($texto);
    }else{
        echo "El texto introducido tiene una o mas mayusculas.";
    }
}
var_dump();
