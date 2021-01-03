<?php

/*
 * URL: 
 * localhost/PHP/MASTER-PHP/aprendiendo-php/15-ejercicios/ejercicio5.php
 * 
 * Ejercicio 5
 * Crea un aray con el contenido de la tabla:
 * 
 * ACCION       AVENTURA        DEPORTES
 * GTA          Assains Creed   FIFA19
 * COD          Crash           PES 19
 * PUBG         POP             Moto GP 19
 * 
 * Cada fila debe ir en un fichero separado (includes)
 * Representa los datos dados en una tabla
 */

$tabla = array(
    "ACCION" => array("GTA 5", "Call of Duty", "PUBG"),
    "AVENTURA" => array("Assasin's Creed", "Crash Banditcoot", "Prince of Persia"),
    "DEPORTES" => array("FIFA 19", "PES 19", "MOTO GP 19")
);
//var_dump(array_keys($tabla));
$categorias = array_keys($tabla);
?>

<table border="1">
    <?php require_once "ejercicio5/encabezados.php" ?>
    <?php require_once "ejercicio5/primera.php" ?>
    <?php require_once "ejercicio5/segunda.php" ?>
    <?php require_once "ejercicio5/tercera.php" ?>
</table>