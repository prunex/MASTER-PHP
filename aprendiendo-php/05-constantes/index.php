<?php

// Constantes
// Es un contenedor de información que no puede cambiar/variar.

define('nombre', 'Remus Pruna');
define('web', 'prunex.com');

echo '<h1>'.nombre.'</h1>';
echo '<h2>'.web.'</h2>';

//variable
$web = "ripruna.es";
echo $web;

echo "<br>";

$web = "www.ripruna.es";
echo $web;

echo "<br>";

// Constantes predefinidas
echo PHP_VERSION."<br>";
echo PHP_EXTENSION_DIR."<br>";
echo __LINE__."<br>";
echo __DIR__."<br>";
echo __FILE__."<br>";
echo PHP_OS."<br>";