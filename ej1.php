<?php
$compra = 30;

if ($compra < 30) {
    echo "Se cobran 30 € de gastos de envío";
}elseif ($compra >= 30 && $compra < 90) {
    echo "Te faltan ".(90-$compra)." € para envío gratuito.";
}else {
    echo "Gastos de envío gratuitos.";
}
echo "<hr>";
$compra2=18;
$tipo="mascota";

if ($compra2<19) {
    if ($tipo == "mascota") {
        echo "no se puede enviar";
    }else{
        echo "los gastos de envío son 9€";
    }
}elseif ($compra2>=10 && $compra2<40) {
    echo "los gastos de envío son 9€";
}elseif ($compra2>=40) {
    echo "gastos de envío gratis";
    if ($compra >= 200) {
        echo "ha recibido un código de descuento";
    }
}
?>