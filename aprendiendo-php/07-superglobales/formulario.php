<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario HTML</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            <label>Nombre: </label>
            <input type="text" name="nombre">
            
            <br><br>
            
            <label>Apellidos: </label>
            <input type="text" name="apellidos">
            
            <br><br>
            
            <input type="submit" value="Enviar datos">            
        </form>
    </body>
</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

