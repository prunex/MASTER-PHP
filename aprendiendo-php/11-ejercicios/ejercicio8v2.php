<?php

$top = 100000;

// Version 1
for ($i = 2; $i <= $top; $i++) {
    $divisiones = 0;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $divisiones++;
        }
    }
    echo "$i";
    if ($divisiones === 0 ) {
        echo " es primo <br>";
    } else {
        echo "<br>";
    }
}
$ver1 = (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]);
echo "Execution time: " . $ver1;
//
//echo "<hr>";

// Version 2
//for ($i = 2; $i <= $top; $i++) {
//    $primo = true;
//    for ($j = 2; $j < $i; $j++) {
//        if ($i % $j == 0) {
//            $primo = false;
//            break;
//        }
//    }
//    echo "$i";
//    if ($primo) {
//        echo " es primo <br>";
//    } else {
//        echo "<br>";
//    }
//}
//
//$ver2 = (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]);
//echo "Execution time: " . $ver2;
//echo "<hr>";

// Version 3
//for ($i = 2; $i <= $top; $i++) {
//    $primo = true;
//    for ($j = 2; $j < $i/2; $j++) {
//        if ($i % $j == 0) {
//            $primo = false;
//            break;
//        }
//    }
//    echo "$i";
//    if ($primo) {
//        echo " es primo <br>";
//    } else {
//        echo "<br>";
//    }
//}
//
//$ver2 = (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]);
//echo "Execution time: " . $ver2;
//echo "<hr>";
