<?php /*
 * URL: 
 * localhost/PHP/MASTER-PHP/aprendiendo-php/18-formularios/index.php
 * 
 * Formularios
 * Un formulario se crea en fichero HTML dentro de las etiqutas <form>
 * Dicha etiqueta puede tener 3 atributos: action, method y enctype.
 * - 'action' contiene como valor la ruta donde se va a enviar el formulario.
 *      Si se deja sin valor, solamente con las comillas simple o dobles,
 *      significa que los datos se enviaran en la misma pagina.
 * - 'method' puede tener como valor "POST" o "GET" segun el metodo 
 *      que necesitamos.
 * - 'enctype' especifica como se deben codificar los datos del formulario al 
 *      enviarlos al servidor. 
 *      SOLO se usa "enctype" cuando el metodo es POST
 * Dentro de las etiquetas de form se introduce las etiquetas input de rigor
 * 
 */ ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data"> 
            
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" placeholder="Antonio"
                   autofocus="autofocus"/>
            <br>
            
            <label for="apellido">Apellido: </label>
            <input type="text" name="apellido" placeholder="García"/>          
            <br>
            
            <label for="anyo">Año: </label>
            <input type="text" name="anyo" value="<?=date("Y")?>" 
                   disabled="disabled" minlength="4" maxlength="4"/>
            <br>
            
            <label for="botonNada">Boton que no hace nada: </label>
            <input type="button" name="botonNada" value="Boton"/>
            <br>
            
            <label for="sexo">Sexo: </label> 
            <label for="hombre">Hombre 
                <input type="checkbox" name="sexo" value="hombre" 
                       checked="checked"/></label>
            <label for="mujer">Mujer             
            <input type="checkbox" name="sexo" value="Mujer"/>
            </label>           
            <br>
            
            <label for="color">Color</label>
            <input type="color" name="color"/>            
            <br>
            
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha"/>            
            <br>
            
            <label for="correo">Correo</label>
            <input type="mail" name="coreo"/>            
            <br>
            
            <label for="archivo">Archivo</label>
            <input type="file" name="archivo"/>            
            <br>
            
            <label for="numero">Numero</label>
            <input type="number" name="numero"/>            
            <br>
            
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya"/>            
            <br>
            
            <label for="continente">Radio Button para continentes:</label>
            <labe for="continente">
                <input type="radio" name="continente" value="America"/>America
            </label>
            <label>
                <input type="radio" name="continente" value="Europa"/>Europa
            </label>
            <label>
                <input type="radio" name="continente" value="Asia"/> Asia
            </label>
            
            <br>
            <label for="web">Pagina WEB</label>
            <input type="URL" name="web"/>
            
            <br>
            <label for="areatexto">Resumen</label>
            <textarea name="areatexto"></textarea>
            
            <br>
            <label for="selectPeliculas">Peliculas</label>
            <select name="selectPeliculas">
                <option value="europa">Europa</option>
                <option value="asia">Asia</option>
                <option value="australia">Australia</option>
            </select>
            
            <br>
            <input type="submit" value="submit" />
        </form>
    </body>
</html>

