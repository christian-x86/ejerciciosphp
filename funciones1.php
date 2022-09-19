<?php
$agenda = [
    "lunes" => "tarea1",
    "martes" => "tarea2",
    "miércoles" => "tarea3",
    "jueves" => "tarea4",
    "viernes" => "tarea5",
    "sábado" => "tarea6",
    "domingo" => "tarea7"
];

function ver_agenda($agenda){
    foreach ($agenda as $key => $value) {
        echo "El $key hay que hacer: $value </br>";
    }
}
ver_agenda($agenda);

echo "<hr>";

function func_tabla($x){
    for ($i=0; $i <= 10; $i++) { 
        echo "$x x $i = ".$x*$i."</br>";
    }    
}
func_tabla(2);

$arr=[1,2,3];
function func_media($arr){
    $res=0;
    foreach ($arr as $key => $value) {
        $res += $value;
    }
    echo $res/count($arr);
}

func_media($arr);

echo "<hr>";

function func_darvuelta($cadena){
    echo strrev($cadena);
}
func_darvuelta("hola");
echo "<hr>";
function func_palindromo($cadena1,$cadena2){
    $cadena1=strtoupper(str_replace(" ","", $cadena1));
    $cadena2=strtoupper(str_replace(" ","", $cadena2));
    if (strrev($cadena1) == $cadena2) {
        echo "Es un palindromo";
    }
}
func_palindromo("Hola","aLo h");

echo "<hr>";

$arr=[1,2,3];
function func_media2($arr){
    return array_sum($arr)/count($arr);
}

echo func_media2($arr);
?>