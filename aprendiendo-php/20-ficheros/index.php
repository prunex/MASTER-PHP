<?php

/*
 * localhost/PHP/MASTER-PHP/aprendiendo-php/20-ficheros/
 * 
 * Lectura de ficheros de texto
 */



// La apertura de un fichero se hace con la funcion de php llamada "fopen"
// fopen($filename, $mode);
// $filename = nombre de fichero en forma de string
// $mode = el modo en que se abre el dicho fichero. Lo mas usado es "r", "
$filename = "fichero_texto.txt";
$mode = "a+";
$archivo = fopen($filename, $mode);

// Lectura de un fichero se hace con la funccion fgets();
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido . "<br>";
}


// Insertar o escribir en el fichero de text con fwrite()
// Es posible si el modo de apertura del fichero se hace con escritura tb
$text = "Soy un texto metido desde php <br>";
fwrite($archivo, $text);
// NOTA: En sistemas OS Linux/UNIX se debe de dar permisos de lectura y 
//      escritura para que se puedan hacer modificaciones sobre el dicho
//      fichero. sudo chown -R www-data:www-data fichero_texto.txt
// El cierre de un fichero se hace con la funcion "fclose"
fclose($archivo);


// Copiar un fichero con la funccion copy()
// La funccion recibe dos parametros de tipo string tanto con el origen que con
//      el destino.
$source = $filename;
$destination = "fichero_copiado2.txt";
copy($source, $destination) or die("Error al copiar el fichero '$source'");
// URL 'or': https://www.php.net/manual/es/language.operators.logical.php
// URL 'die()': https://www.w3schools.com/php/func_misc_die.asp
// NOTA: Para que la dicha funccion haga su efecto de copiar, se debe de tener 
//      los permisos de lectura y escritura sobre la dicha carpeta de destino.
// Renombrar un fichero con la funccion rename()
// DEF: Intenta cambiar el nombre de olname a newname, moviendolo entre
//      directorios si es necesario. Si se cambia el nombre de un arhivo y
//      existe un nuevo nombre, se sobreescribirá. Si se cambia el nombre de
//      un directorio y existe un nuevo nombre, esta emitirá una advertencia
// FUNCIONALIDAD: Recibe dos parametros de tipo string con el nombre del
//      repectivamente primero y el segundo fichero.
$oldName = $destination;
$newName = "fichero_texto_v2";
rename($oldName, $newName) or die("Error al renombrar");
// NOTA: Para que la dicha funccion haga su efecto de copiar, se debe de tener 
//      los permisos de lectura y escritura sobre la dicha carpeta de destino.
// Borrar un fichero con la funccion unlink()
$filename = "fichero_copiado.txt";
// unlink($filename) or die("Error al borrar");

// Comprabacion de la existencia de un fichero con la funccion file_exists()
// Tambien comprueba la existencia de una carpeta
// La funccion devuelve un boolean
//$filename = $destination;
$fileExists = file_exists("fichero_texto.txt");
//var_dump($filename);
if ($fileExists) {
    echo "El fichero '$filename' existes";
} else {
    echo "El fichero '$filename' NO existes";
}
