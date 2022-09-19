<?php
// select: tipo_vivienda (adosado, unifamiliar, piso), select zona(centro, periferia), radio num habs(1,2,3), input (precio), input (tamaño), checkboxes extras (garaje, trastero, piscina), textarea (observaciones), cuando le demos  submit muestra un mensaje con lo que pedimos.
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
    <form action="" method="post">
        <select name="tipo_vivienda" id="">
            <option value="adosado">Adosado</option>
            <option value="unifamiliar">Unifamiliar</option>
            <option value="piso">Piso</option>
        </select>
        <select name="zona" id="">
            <option value="centro">Centro</option>
            <option value="periferia">Periferia</option>
        </select><br>
        <label>Número de habitaciones: </label><br>
        <input type="radio" name="num_habs" id="1" value="1">
        <label for="1">1</label><br>
        <input type="radio" name="num_habs" id="2" value="2">
        <label for="2">2</label><br>
        <input type="radio" name="num_habs" id="3" value="3">
        <label for="3">3</label><br>
        <label for="tamano">Tamaño: </label>
        <input type="number" name="tamano" id=""><br>
        <label for="tamano">Precio: </label>
        <input type="number" name="precio" id=""><br>
        <input type="checkbox" name="garaje" id="garaje" value="garaje">
        <label for="garaje">Garaje</label><br>
        <input type="checkbox" name="trastero" id="trastero" value="trastero">
        <label for="trastero">Trastero</label><br>
        <input type="checkbox" name="piscina" id="piscina"  value="piscina">
        <label for="piscina">Piscina</label><br>
        <label for="observaciones">Observaciones: </label><br>
        <textarea name="observaciones" id="observaciones" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
    if ($_POST) {
        echo "Se busca un ";

        if (isset($_POST["tipo_vivienda"])) {
            echo $_POST["tipo_vivienda"];
        }

        echo " ubicado en ".$_POST["zona"]." con ".$_POST["num_habs"]." habitaciones, de ".$_POST["tamano"]." m2, con un precio de ".$_POST["precio"]." €, con";
        
        if (isset($_POST["garaje"])) {
            echo " garaje,";
        }
        if (isset($_POST["trastero"])) {
            echo " trastero,";
        }
        if (isset($_POST["piscina"])) {
            echo " piscina,";
        }
        
        echo " observaciones: ".$_POST["observaciones"];
    }
    ?>
</body>
</html>