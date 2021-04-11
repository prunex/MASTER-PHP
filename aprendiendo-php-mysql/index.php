<?php

/*
 * URL Linux/Windows: localhost/PHP/MASTER-PHP/aprendiendo-php-mysql/index.php
 * URL MacOSX: localhost:8888/MASTER-PHP/aprendiendo-php-mysql/index.php
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

// Obtener la informacion
while($nota = mysqli_fetch_assoc($query_notas)){
    echo $nota["id"] . "<br>";
    echo $nota["titulo"] . "<br>";
    echo $nota["descripcion"] . "<br>";
    echo $nota["color"] . "<br>";
}

// FUNCCION€$ INICIO

function checkError($conexion) {
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
}

// FUNCCION€$ FIN