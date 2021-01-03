<?php
/*
 * URL: 
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/17-cookies/borrar_cookies.php
 * 
 * Se puede borrar una cookie con la funccion 'unset()' junto con su forsaje
 * caducacion.
 */

$nombreCookie1 = "micookie";
$nombreCookie2 = "unyear";

if (isset($_COOKIE[$nombreCookie1])) {
    // Se borra el valor
    unset($_COOKIE[$nombreCookie1]);
    // Se caduca de manera forzada
    setcookie($nombreCookie1, "", time() - 1);
    echo "La cookie se ha borrado.";
}

$varURL = "ver_cookies.php";
header("Location:" . $varURL);
?>

<a href="crear_cookies.php">Crear las Cookies</a>
<a href="ver_cookies.php">Carga las Cookies</a>
<a href="borrar_cookies.php">Borrar las Cookies</a>