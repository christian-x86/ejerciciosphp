<?php
// Formulario de pedido para Panadería, -barras de pan 1€, -croissant: 1,50€,  -Napolitanas 2€, calcular total (cantidad*precio), que  muestre una tabla con cantidad, nombre producto, precio

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pedido.php" method="post">
        <label for="cantidad_pan">Pan: </label><input type="number" name="cantidad_pan" id="">
        <label for="cantidad_croissant">Croissant: </label><input type="number" name="cantidad_croissant" id="">
        <label for="cantidad_napolitana">Napolitana: </label><input type="number" name="cantidad_napolitana" id="">
        <input type="submit" value="Enviar">
    </form>

    
</body>
</html>