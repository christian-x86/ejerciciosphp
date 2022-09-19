<?php
class Pedido{
    
    public $nombre;
    public $direccion;
    public $tlf;
    public $productos;
    public $precios;
    public $total;

    public function __construct($nombre, $direccion, $tlf){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->tlf=$tlf;
        
    }

    public function setProductos($productos){
        $this->productos=$productos;
    }
    public function setPrecios($precios){
        $this->precios=$precios;
    }

    public function mostrar(){

        echo "Nombre y apellidos: ".$this->nombre."<br>Dirección: ".$this->direccion."<br>Telefono: ".$this->tlf."<br><table style='border: solid black 1px;'><tr><td>Nombre</td><td>Cantidad</td><td>Precio</td>";

        foreach ($this->productos as $key => $value) {

            if ($value[0]==""||$value[0]==0) continue;

            echo "<tr><td>$key</td><td>".$value[0]."</td><td>".$value[1]."€</td></tr>";
            $this->total+=$value[0]*$value[1];
        }
        
        echo "<tr><td>Total</td><td colspan='2'>".$this->total."€</td></tr></table>";
    }
}

?>

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
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="direccion">Dirección: </label>
        <input type="text" name="direccion" id="direccion"><br>
        <label for="tlf">Telefono: </label>
        <input type="tel" name="tlf" id="tlf"><br><br>
        <label for="">Patatas: </label>
        <input type="number" name="patatas" id="">
        <label for="">Cebollas: </label>
        <input type="number" name="cebollas" id="">
        <label for="">Pimientos: </label>
        <input type="number" name="pimientos" id="">
        <label for="">Huevos: </label>
        <input type="number" name="huevos" id="">
        <label for="">Manzanas: </label>
        <input type="number" name="manzanas" id=""><br>
        <input type="submit" value="Enviar"><br><br>
    </form>

    <?php

    if ($_POST) {
        $pedido=new Pedido($_POST["nombre"], $_POST["direccion"], $_POST["tlf"]);
        
        $pedido->setPrecios(
            [
                "patata"=>1,
                "cebolla"=>2,
                "pimiento"=>3,
                "huevo"=>4,
                "manzana"=>5
            ]
        );
    
        $pedido->setProductos(
            [
                "Patatas"=>[$_POST["patatas"],$pedido->precios["patata"]],
                "Cebollas"=>[$_POST["cebollas"],$pedido->precios["cebolla"]],
                "Pimientos"=>[$_POST["pimientos"],$pedido->precios["pimiento"]],
                "Huevos"=>[$_POST["huevos"],$pedido->precios["huevo"]],
                "Manzanas"=>[$_POST["manzanas"],$pedido->precios["manzana"]]
                ]
        );
        $pedido->mostrar();
    }
    ?>

</body>
</html>