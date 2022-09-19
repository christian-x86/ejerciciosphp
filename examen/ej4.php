<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: solid black 1px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="filas">Filas: </label>
        <input type="number" name="filas" id="filas">
        <label for="columnas">Columnas: </label>
        <input type="number" name="columnas" id="columnas">
        <input type="submit" value="Enviar">
    </form>
    <br>
    
    <?php
    
    if ($_POST) {
        $columnas=$_POST["columnas"];
        $filas=$_POST["filas"];

        echo "<table>";
        for ($i=0; $i < $filas; $i++) { 
            echo "<tr>";
            for ($j=0; $j < $columnas; $j++) { 
                echo "<td>Esta es la celda de la fila ".($i+1).", y la columna ".($j+1)."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    
    ?>

</body>
</html>