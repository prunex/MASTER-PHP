<?php

/*
 * URL: localhost/PHP/MASTER-PHP/aprendiendo-php/21-directorios/index.php
 * 
 * Carpetas o directorios
 */

// Creacion de carpeta$
// Se hace con la funcion mkdir() donde recibe varios parametros
//      $pathname   = (string) La ruta de la carpeta junto con la carpeta
//      $mode       = (int) Por defecto es 0777, lo que significa el acceso
//                      más amplio posible
//      $recursive  = (boolean) Permite la creación de carpetas añadidas
//                      especificadas en el nombre de la ruta.
// Devuelve un booleano 
// URL: https://www.php.net/manual/en/function.mkdir.php
$pathname = "mi_carpeta";
$mode = 0777;
$bolCrearCarpeta = mkdir($pathname, $mode);
//var_dump($bolCrearCarpeta);
if (is_dir($pathname)) {
    echo "Se ha creado la carpeta '$pathname'";
} else {
    echo "No se ha creado la carpeta '$pathname'";
}
echo "<br>";
// NOTA: Se debe de dar los permisos necesarios a la carpeta raiz para poder 
//          realizar los cambios necesarios
// Borrar carpeta
// Se hace con la funcion rmdir() 
// Recibe cibe un parametro
// $dirname     =   (string) La ruta a la carpeta. 
// Devuelve un booleano
//$pathname = "";
//$bolBorrarCarpeta = rmdir($pathname);
if (is_dir($pathname)) {
    if ($bolBorrarCarpeta) {
        echo "Se ha borrado la carpeta '$pathname'";
    }
}
echo "<br>";
echo "El contenido de la carpeta '$pathname'<br>";
// Recorer el contenido de una carpeta
if ($gestor = opendir("./" . $pathname)) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != "." && $archivo != "..") {

            echo $archivo . "<br>";
        }
    }
}