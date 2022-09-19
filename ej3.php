<?php
// Crear una variable y asignar valor "a-a-r-e-f-a", 1. cambiar "a" por "tortuga", 2. separar en un array por  "-", 3. calcular el nº de elementos del array
$cadena = "a-a-r-e-f-a";
$cadena2 = str_replace("a", "tortuga", $cadena);
$arr=explode("-", $cadena2);
var_dump($arr);
echo "<br>Número de elementos: ".count($arr);
?>