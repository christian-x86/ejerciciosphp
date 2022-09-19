<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: solid black 1px;
        }
    </style>
</head>
<body>
<?php
    
function func_table($x,$y){
    echo "<table>";
    for ($i=0; $i < $x; $i++) { 
        echo "<tr>";
        for ($j=0; $j < $y; $j++) { 
            echo "<td>$i, $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

func_table(3,3);

?>
</body>
</html>