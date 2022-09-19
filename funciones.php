<?php
function ptaeur($pta){
    return $pta/166.386;
}
echo "Pesetas a euros: ".ptaeur(1000)." €<br>";

function eurpta($eur){
    return $eur*166.386;
}
echo "Euros a pesetas: ".eurpta(1000)." pesetas<br>";

function par($num){
    if ($num%2==0) {
        echo "numero par";
    }else {
        echo "numero impar";
    }
}

echo par(3)."<br>";

function caracter($texto){
    return $texto[0];
}
echo caracter("Hola")."<br>";

function mayor($x,$y){
    if ($x>$y) {
        echo $x." es mayor que ".$y;
    }elseif ($x<$y) {
        echo $x." es menor que ".$y;
    }else {
        echo "son iguales";
    }
}
echo mayor(2,5)."<br>";



function iva($precio, $tipo){
    switch ($tipo) {
        case '0':
            return 1.04*$precio;
            break;
        case '1':
            return 1.1*$precio;
            break;
        case '2':
            return 1.21*$precio;
            break;
    }
}
echo "Precio con iva".iva(10,2)."<br>";

function imc($peso,$altura){
    $resultado = $peso/(pow($altura,2));
    if ($resultado<18.5) {
        echo $resultado." bajo peso";
    }elseif ($resultado>=18.5 && $resultado<25) {
        echo $resultado." normal";
    }elseif ($resultado>=25 && $resultado<30) {
        echo $resultado." sobrepeso";
    }else {
        echo $resultado." obesidad";
    }
    
}
echo imc(60,1.78)."<br>";

function espacio($cadena){
    for ($i=0; $i < strlen($cadena); $i++) { 
        if ($cadena[$i]==" ") {
            echo $i;
        }
    }
}
echo espacio("hola que tal")."<br>";

function media4($x,$y,$z,$n){
    return (($x+$y+$z+$n)/4);
}
print media4(1,2,3,4)."<br>";


$random_number_array = range(0, 100);
shuffle($random_number_array );
$random_number_array = array_slice($random_number_array ,0,10);


function media($array){
    $a=0;
    for ($i=0; $i < count($array); $i++) {       
        $a=$a+$array[$i];
    }
    return $a/count($array);
}

print media($random_number_array)."<br>";
?>