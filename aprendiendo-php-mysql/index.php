<?php

/*
 * URL: localhost/PHP/MASTER-PHP/aprendiendo-php-mysql/
 */

/* Se crea una base de datos
 * URL: http://localhost/phpmyadmin
 * User: root
 * Pass:
 * BBDD: phpmysql
 */

// Crear la conexion con la base de datos
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "phpmysql";
// $conexion = mysqli_connect($host, $username, $passwd, $dbname, $port, $socket);
$conexion = mysqli_connect($host, $username, $passwd, $dbname);
// var_dump($conexion -> connect_errno);
//var_dump($conexion);
echo "<hr>";
foreach ($conexion as $key => $value) {
    if (is_array($conexion->$key)) {
        echo "$key => ";
        echo '<pre>';
        print_r($conexion->$key);
        echo '</pre>';
    } else {
        echo "$key => " . ($conexion->$key) . "<br>";
    }
}