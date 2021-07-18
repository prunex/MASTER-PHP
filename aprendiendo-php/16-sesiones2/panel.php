<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
error_reporting(0);
$varsession = $_SESSION["usuario"];

if($varsession == null || $variable_normal = ""){
    echo "No tiene autorizacion";
    die(); // deja de cargar la pagina HTML
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1>Panel de administracion</h1>
        <h2>Bienvenido: <?php echo $_SESSION["usuario"] ?></h2>
        <a href="cerrar_sesion.php">Cerrar sesion</a>
    </body>
</html>