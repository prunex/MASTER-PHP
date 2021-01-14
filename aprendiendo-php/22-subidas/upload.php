<?php

$archivo = $_FILES["archivo"];
//var_dump($archivo);
//die();
// NOTA: En PHP se debe de configurar la variable "upload_max_filesize" de 2MB
//      a una cantidad de megas mas grade que se acopla a nuestros requisitos.
//      Tambien se debe de cambiar la variable post_max_size. Es la variable
//      que PHP nos permite subir fichero por el metodo POST en un formulario.

$nombreArchivo = $archivo["name"];
$tipoArchivo = $archivo["type"];

//var_dump(in_array($tipoArchivo, array("image/jpg", "image/jpeg", "image/png", "image/gif"), true));
if (!is_dir("images")) {
    mkdir("images", 0777);
}
if (in_array($tipoArchivo, array("image/jpg", "image/jpeg", "image/png", "image/gif"), true)) {

    header("Refresh: 3; URL=index.php");
    move_uploaded_file($archivo["tmp_name"], "images/" . $nombreArchivo);
    echo "<br>Imagen subida correctamente";
} else {
    header("Refresh: 3; URL=index.php");
    echo "Sube una imagen con un formato correcto.";
}

// NOTA: Se debe de dar los permisos necesarios a la carpeta raiz para poder 
//          realizar los cambios necesarios