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
//echo date('l, d M Y');
setlocale(LC_TIME,"spanish");
echo strftime("%A %d de %B del %Y");

echo "</br>";

$fecha = date('w');
switch ($fecha) {
    case '1':
        echo "lunes";
        break;
    case '2':
        echo "martes";
        break;
    case '3':
        echo "miércoles";
        break;
    case '4':
        echo "jueves";
        break;
    case '5':
        echo "viernes";
        break;
    default:
        echo "fin de semana";
        break;
}
?>

</body>
</html>