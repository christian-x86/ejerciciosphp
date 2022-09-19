<?php
// formulario index .php (nombre , edad, sueldo), va a salario php, muestra los datos y 1. si falta alguno muestra "faltan datos", 2. si edad menor que 18 "no es una edad valida" 3. si el sueldo es mayor de 40000 "cambie el valor de las retenciones"

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
    <form action="salario.php" method="post">
        <label for="nombre"> Nombre: </label>
        <input type="text" name="nombre" id="">
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="">
        <label for="sueldo">Sueldo: </label>
        <input type="number" name="sueldo" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>