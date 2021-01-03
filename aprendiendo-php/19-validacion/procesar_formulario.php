<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$error = "faltan_valores";

if (!empty($_POST["nombre"]) &&
        !empty($_POST["apellidos"]) &&
        !empty($_POST["edad"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["pass"])) {
    $error = "OK";

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = (int)$_POST["edad"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    //Validar el nombre
    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) {
        $error = "nombre";
    }
    
    //Validar los apellidos 
    if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) {
        $error = "apellido";
    }
    
    //Validar el edad
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = "edad";
    }
    
    //Validar los correo 
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "email";
    }
    
    //Validar la contraseña
    if (empty($pass) || strlen($pass) < 5) {
        $error = "password";
    }
    
//    var_dump($_POST);
//    var_dump(gettype($edad));
//    die();
    
    
} else {
    $error = "faltan_valores";
}
if ($error != "OK") {

    header("Location:index.php?error=$error");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        <h1>Formulario completado</h1>
        <?php if ($error === "OK"): ?>
            <p><?= $nombre ?></p>
            <p><?= $apellidos ?></p>
            <p><?= $edad ?></p>
            <p><?= $correo ?></p>
            <p><?= $email ?></p>
            <p><?= $pass ?></p>
        <?php endif; ?>

        <br><a href="index.php">Inicio</a>
    </body>
</html>