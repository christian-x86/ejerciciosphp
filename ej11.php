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
        <label for="frase">Escribe una frase a traducir: </label>
        <input type="text" name="frase" id="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
    $arr=[
        "es" => "is",
        "lunes" => "monday",
        "manzana" => "apple",
        "blanco" => "white",
        "hola" => "hello",
        "negro" => "black",
        "verde" => "green"
    ];
    if ($_POST) {

        $frase=str_replace(",", "", $_POST["frase"]);
        $frase=str_replace(".", "", $frase);
        $frase=strtolower($frase);
        echo "Frase: ".$_POST["frase"]."<br>";
        $frase_a=explode(" ",$frase);
        echo "<br>Traducción:<br>";
        foreach ($frase_a as $key => $value) {
            if (array_key_exists($value, $arr)) {
                echo $value." => ".$arr[$value]."<br>";
                //sustituye las palabras en español para mostrar las palabras en ingles en la frase en español
                $frase_a[$key]=$arr[$value];
            }
        }
        echo "<br>".implode(" ",$frase_a);
    }
    ?>
</body>
</html>