<?php

/*
 * http://localhost/PHP/MASTER-PHP/aprendiendo-php/11-ejercicios/ejercicio6.php
 * Ejercicio 6
 * Mostrar una table de HTML con las tablas de multiplicar del 1 al 10
 */

echo "<table border='1'>";
echo "Tabla de multiplicacion <br>";
echo "<tr>";
for ($i = 0; $i <= 10; $i++) {
    echo "<td>Con $i </td>";
//    for ($j = 0; $j <= 10; $j++){
//        echo "$i * $j = " . ($i*$j) . "<br>";
//    }
}
echo "</tr>";
echo "<tr>";
for ($i = 0; $i <= 10; $i++) {
    echo "<td>";
    
    for ($j = 0; $j <= 10; $j++){
        echo "$i * $j  = ". ($i * $j) ."<br>";
    }
    echo "</td>";
}
echo "</tr>";

echo "</table>";
