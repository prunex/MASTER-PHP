<?php

/*
 * URL: localhost/PHP/MASTER-PHP/aprendiendo-php-mysql/index.php
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
    echo "connected successfully <br>";
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
//$notas = mysqli_fetch_assoc($query_notas);
//$notas = mysqli_fetch_object($query_notas);
//var_dump((mysqli_fetch_assoc($query_notas)));
//echo "<hr>";
//var_dump(mysqli_fetch_object($query_notas));
//echo "<hr>";
//var_dump($notas);

// Leer los datos
while($nota = mysqli_fetch_assoc($query_notas)){
    //var_dump($nota);
    echo $nota["id"] . ") " . $nota["titulo"] . " => " . $nota["descripcion"] . "<br>";
}
//foreach(mysqli_fetch_assoc($query_notas) as $nota => $value){
//    echo $nota . " => " . $value . "<br>";
//}

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