<?php
/*
 * URL http://localhost/PHP/MASTER-PHP/aprendiendo-php/11-ejercicios/ejercicio1.php
 * Ejercicio 1
 * Crear dos variables "pais" y "continentes" y mostrar su valor 
 * por pantalla (imprimir).
 * Poner un comentario con el tipo de dato.
 */

$pais = "España"; //string
$continete = "Europa"; // string
echo "El pais $pais pertenece al continente $continete.";
echo "<br>";
echo "\$pais es de tipo " . gettype($pais) . " y \$continente es de tipo "
        . gettype($continete);