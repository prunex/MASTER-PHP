<?php
/*
 * URL: 
 * localhost/PHP/MASTER-PHP/aprendiendo-php/19-validacion/index.php
 */
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validacion de formularios PHP</title>
    </head>
    <body>

        <h1>Validacion de formularios PHP</h1>

        <!-- PHP START-->
        <?php
        if (isset($_GET["error"])) {
            $error = $_GET["error"];

            if ($error === "faltan_valores") {
                echo "<strong style='color:red'>Introduce todos los datos correctamente.</strong>";
            }
            
            if ($error === "nombre") {
                echo "<strong style='color:red'>Introduce el nombre correctamente.</strong>";
            }
            
            if ($error === "apellido") {
                echo "<strong style='color:red'>Introduce el apellido correctamente.</strong>";
            }
            
            if ($error === "edad") {
                echo "<strong style='color:red'>Introduce la edad correctamente.</strong>";
            }
            
            if ($error === "correo") {
                echo "<strong style='color:red'>Introduce el correo correctamente.</strong>";
            }
            
            if ($error === "password") {
                echo "<strong style='color:red'>Introduce una contraseña de minimo 5 caracteres</strong>";
            }
            
        }
        ?>
        <!-- PHP FINISH-->


        <!-- Form START-->
        <form method="POST" action="procesar_formulario.php">

            <label for="nombre">Nombre
                <input type="text" name="nombre" placeholder="Antonio"
                       required="required" pattern="[A-Za-z]+"
                       autofocus="autofocus"/>
            </label>
            <br>

            <label for="apellidos">Apellidos
                <input type="text" name="apellidos" placeholder="Garcia"
                       required="required" pattern="[A-Za-z]+"/>
            </label>            
            <br>

            <label for="edad">Edad
                <input type="number" name="edad" pattern="[0-9]+"/>
            </label>            
            <br>

            <label for="email">Correo
                <input type="email" name="email"/>
            </label>            
            <br>

            <label for="pass">Contraseña
                <input type="password" name="pass"/>
            </label>            
            <br>

            <input type="submit" value="Enviar"/>
            <br>
            <a href="index.php">Inicio</a>

        </form>
        <!-- Form FINISH-->

    </body>
</html>