<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Imprimir por pantalla - Master en php</title>
    </head>
    <body>
        <h1>Master en PHP - prunex</h1>
        <?php
            // Titulo de la seccion (tambien comentario de una linea)
            echo "<h3>Listado de videojuegos</h3>";
            
            /*
             * Esta es la lista de 
             * videojuegos moderna 
             * y tambien comentario 
             * de varias lineas
             */
            echo "<ul>"
                . "<li>GTA</li>"
                . "<li>Fifa</li>"
                . "<li>Mario Bros</li>"
                . "</ul>";
            
            //echo "<br><label>Hola</label>";
            
            // Parafo explicativo
            echo "<p>Esta es toda" . " - " . "lista de juegos</p>";
        ?>
    </body>
    
</html>
