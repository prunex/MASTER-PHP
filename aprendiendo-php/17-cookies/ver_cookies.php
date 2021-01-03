<?php

/*
 * URL: 
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/17-cookies/ver_cookies.php
 * 
 * Se muestra el valor de nuestas cookies con $_COOKIES que es una variable 
 * superglobal de tipo array asociativo
 */

$nombreCookie1 = "micookie";
$nombreCookie2 = "unyear";

readCookie($nombreCookie1);
readCookie($nombreCookie2);

function readCookie($cookie) {
    if (isset($_COOKIE[$cookie])) {
        echo "El valor del cookie '$cookie' es: " . $_COOKIE[$cookie];
    } else {
        echo "El cookie introducido/elegido no exite";
    }
    echo "<br>";
}
?>

<a href="crear_cookies.php">Crear las Cookies</a>
<a href="ver_cookies.php">Carga las Cookies</a>
<a href="borrar_cookies.php">Borrar las Cookies</a>