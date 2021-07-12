<?php

/* 
 * URL: 
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/16-sesiones/index.php
 * 
 * Cookies
 * Almacena y persiste datos del usuario mientras que navega en un sitio web
 * hasta que cierra sesion o cierra el navegador.
 */

// Iniciar la sesion
session_start();

//variable local
$variable_normal = "Soy una cadena de texto";

//variable de sesion
$_SESSION["variable_persistento"] = "Hola, soy  una sesion activa";

echo $variable_normal."<br>";
echo $_SESSION["variable_persistento"];