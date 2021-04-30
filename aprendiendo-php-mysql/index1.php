<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * URL Linux/Windows: 192.168.1.10/PHP/MASTER-PHP/aprendiendo-php-mysql/index1.php
 * URL MacOSX: localhost:8888/MASTER-PHP/aprendiendo-php-mysql/index1.php
 */

/* Se crea una base de datos
 * URL: http://localhost/phpmyadmin
 * User: toor
 * Pass: qwer.1234
 * BBDD: phpmysql
 */

// Crear la conexion con la base de datos
$host = "localhost";
$username = "toor";
$passwd = "qwer.1234";
$dbname = "phpmysql";
//$port = 3306;
// $conexion = mysqli_connect($host, $username, $passwd, $dbname, $port, $socket);
$conexion = mysqli_connect($host, $username, $passwd, $dbname);
//var_dump($conexion);
echo "<hr>";

// Comprobar conexion
if (mysqli_connect_errno()) {
    if ($conexion) {
        checkError($conexion);
    } else {
        echo "Check input for username, password and dbname";
    }
} else {
    echo "Connected successfully <br>";
}

echo "<hr>";

// Hacer una consulta para configurar los caracteres
$link = $conexion;
$query = "SET NAMES 'utf8'";
mysqli_query($link, $query);
echo "<br>";

// Consulta SELECT
$link = $conexion;
$query = "SELECT * FROM notas";
$query_notas = mysqli_query($link, $query);

// LINKS
// https://phppot.com/mysql/mysql-fetch-using-php/
// https://www.php.net/manual/es/mysqli-result.fetch-array.php
// https://www.php.net/manual/en/class.mysqli-result.php

//echo "mysqli_fetch_fields(). Devuelve una matriz de objetos que representan los campos en un conjunto de resultados. Cantidad de columnas de una consulta.<br>";
//var_dump(mysqli_fetch_fields($query_notas));
//echo "<hr>";

$columnsList = mysqli_fetch_fields($query_notas);
//$filesList = mysqli_fetch_assoc($query_notas);
//var_dump($filesList);

echo "<table border='1'>";
echo "<tr>";
foreach($columnsList as $valor){
    echo "<th>".$valor->name."</th>";
}
echo "</tr>";

while ($fila = mysqli_fetch_assoc($query_notas)){
    echo "<tr>";
//    echo "<td>" . $fila["id"] . "</td>";
//    echo "<td>" . $fila["titulo"] . "</td>";
//    echo "<td>" . $fila["descripcion"] . "</td>";
//    echo "<td>" . $fila["color"] . "</td>";
    foreach ($fila as $data){
        echo "<td>" . $data . "</td>";
    }
    echo "</tr>";
}

echo "</table>";