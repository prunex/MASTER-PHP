<?php

/* 
 * Conexion
 */

// Crear la conexion con la base de datos
$servidor = "localhost";
$usuario = "toor";
$password = "qwer.1234";
$basededatos = "blog_master";
//$port = 3306;
// $conexion = mysqli_connect($host, $username, $passwd, $dbname, $port, $socket);
$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($conexion, "SET NAMES 'UTF8'");