<?php
/*
 * URL: localhost/PHP/MASTER-PHP/aprendiendo-php/22-subidas/index.php
 * 
 * Subidas de archivos
 */
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subidas archivos PHP</title>
    </head>
    <body>
        <h1>Subir imagenes con PHP</h1>

        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <br>
            <input type="submit" value="Enviar">
        </form>

        <h1>Listado de imagenes</h1>
        <?php
        $gestor = opendir(("./images"));
        if ($gestor):
            while (($image = readdir($gestor)) !== false):
                if ($image != "." && $image != ".."):
                    echo "<img src='images/$image' ><br>";
                endif;
            endwhile;
        endif;
        ?>
    </body>
</html>
