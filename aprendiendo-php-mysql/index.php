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

// LINKS
// https://phppot.com/mysql/mysql-fetch-using-php/
// https://www.php.net/manual/es/mysqli-result.fetch-array.php
// https://www.php.net/manual/en/class.mysqli-result.php
//$notas = mysqli_fetch_assoc($query_notas);
// var_dump(mysqli_fetch_object($query_notas)) ;
//var_dump((mysqli_fetch_assoc($query_notas)));
//echo "<hr>";
//var_dump(mysqli_fetch_object($query_notas));
//echo "<hr>";
//var_dump($notas);
//// Obtiene la cantidad de columnas de una consulta
//echo "Hay " . mysqli_num_fields($query_notas) . " columnas.";
////var_dump(mysqli_num_fields($query_notas));
//echo "<br>";
//
//// Obtener el numero de columnas de una consulta
//echo "Hay " . mysqli_num_rows($query_notas) . " filas.";
//echo "<br>";
//
//// Dibujar una tabla con nombres de las columnas
//echo "<table style='border: 1px solid black'>";
//echo "<tr>";
//$row = mysqli_fetch_assoc($query_notas);
//foreach ($row as $column => $key){
//    echo "<th>" . $column . "</th>";
//}
//echo "</tr>";
//echo "<tr>";
//while($nota = mysqli_fetch_assoc($query_notas)){
//    //var_dump($nota);
//    //echo $nota["id"] . ") " . $nota["titulo"] . " => " . $nota["descripcion"] . "<br>";
//    echo "<td>" . $nota["id"] . "</td>";
//    echo "<td>" . $nota["titulo"] . "</td>";
//    echo "<td>" . $nota["descripcion"] . "</td>";
//    echo "<td>" . $nota["color"] . "</td>";
//}
//echo "</tr>";
//echo "</table>";
//
//// Leer los datos
////while($nota = mysqli_fetch_assoc($query_notas)){
////    //var_dump($nota);
////    echo $nota["id"] . ") " . $nota["titulo"] . " => " . $nota["descripcion"] . "<br>";
////}
////foreach(mysqli_fetch_assoc($query_notas) as $nota => $value){
////    echo $nota . " => " . $value . "<br>";
////}


echo "gettype(). Obtener el tipo de variable <br>";
var_dump(gettype($query_notas)); //Object
echo "<hr>";
//
echo "Mostrar la informacion sobre la variable <br>";
echo "Representa el conjunto de resultados obtenido de una consulta en la base de datos.<br>";
var_dump($query_notas);
echo "<hr>";
//
//echo "mysqli_fetch_all(). Obtener todas las filas en un array asociativo, numérico, o en ambos<br>";
//var_dump(mysqli_fetch_all($query_notas));
//echo "<hr>";
//
// echo "mysqli_fetch_array(). Obtiene una fila de resultados como un array asociativo, numérico, o ambos<br>";
//var_dump(mysqli_fetch_array($query_notas));
//echo "<hr>";
//
// echo "mysqli_fetch_assoc(). Obtener una fila de resultado como un array asociativo<br>";
//var_dump(mysqli_fetch_assoc($query_notas));
//echo "<hr>";
//
//echo "mysqli_fetch_field_direct(). Obtener los metadatos de un único campo<br>";
//var_dump(mysqli_fetch_field_direct($query_notas, 3));
//echo "<hr>";
//
//echo "mysqli_fetch_field(). Retorna el próximo campo del resultset<br>";
//var_dump(mysqli_fetch_field($query_notas));
//echo "<hr>";
//
//echo "mysqli_fetch_fields(). Devuelve una matriz de objetos que representan los campos en un conjunto de resultados. Cantidad de columnas de una consulta.<br>";
//var_dump(mysqli_fetch_fields($query_notas));
//echo "<hr>";
//
//echo "mysqli_fetch_object(). Devuelve la fila actual de un conjunto de resultados como un objeto.<br>";
//var_dump(mysqli_fetch_object($query_notas));
//echo "<hr>";
//
//echo "mysqli_fetch_row(). Obtener una fila de resultados como una matriz enumerada.<br>";
//var_dump(mysqli_fetch_row($query_notas));
//echo "<hr>";
//
//echo "mysqli_num_fields(). Obtenga el número de campos en un resultado.<br>";
//var_dump(mysqli_num_fields($query_notas));
//echo "<hr>";
//
//echo "mysqli_field_seek(). Establecer el puntero de resultado en un desplazamiento de campo especificado. <br>";
//var_dump(mysqli_field_seek($query_notas, 0));
//echo "<hr>";
//
//echo "mysqli_fetch_lengths(). Devuelve una matriz que contiene las longitudes de cada columna de la fila actual dentro del conjunto de resultados. <br>";
//var_dump(mysqli_fetch_lengths($query_notas));
//echo "<hr>";
//
//echo "mysqli_num_rows(). Obtiene el número de filas en un resultado.<br>";
//var_dump(mysqli_num_rows($query_notas));
//echo "<hr>";

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