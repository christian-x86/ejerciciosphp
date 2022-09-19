<?php
class Pedido{
    
    public $nombre;
    public $direccion;
    public $tlf;
    public $productos;
    public $precio_patata;
    public $precio_cebolla;
    public $precio_pimiento;
    public $precio_huevo;
    public $precio_manzana;
    public $total;

    public function __construct($nombre, $direccion, $tlf, $precio_patata, $precio_cebolla, $precio_pimiento, $precio_huevo, $precio_manzana){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->tlf=$tlf;
        $this->precio_patata=$precio_patata;
        $this->precio_cebolla=$precio_cebolla;
        $this->precio_pimiento=$precio_pimiento;
        $this->precio_huevo=$precio_huevo;
        $this->precio_manzana=$precio_manzana;
    }

    public function setProductos($productos){
        $this->productos=$productos;
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
        $pedido=new Pedido($_POST["nombre"], $_POST["direccion"], $_POST["tlf"], 1,2,3,4,5,6);
        $pedido->setProductos(
            [
                "Patatas"=>[$_POST["patatas"],$pedido->precio_patata],
                "Cebollas"=>[$_POST["cebollas"],$pedido->precio_cebolla],
                "Pimientos"=>[$_POST["pimientos"],$pedido->precio_pimiento],
                "Huevos"=>[$_POST["huevos"],$pedido->precio_huevo],
                "Manzanas"=>[$_POST["manzanas"],$pedido->precio_manzana]
                ]
        );
        $pedido->mostrar();
    }
    ?>

</body>
</html>