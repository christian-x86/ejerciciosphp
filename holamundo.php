<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

for ($i=1; $i <= 6; $i++) { 
    echo "<h$i>Hola mundo</h$i>";
}

$i = 1;
while ($i <= 6) {
    echo "<h$i>Hola mundo</h$i>";
    $i++;
}

$i=1;
do {
    echo "<h$i>Hola mundo</h$i>";
    $i++;
} while ($i <= 6);

?>
</body>
</html>
