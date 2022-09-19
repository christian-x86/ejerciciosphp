<?php

class Pedido{
    public $nombre;
    public $direccion;
    public $tlf;
    public $patatas;
    public $cebollas;
    public $pimientos;
    public $huevos;
    public $manzanas;

    public function __construct($nombre, $direccion, $tlf){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->tlf=$tlf;
    }

    public function setPatatas($patatas){
        $this->patatas=$patatas;
    }
    public function setCebollas($cebollas){
        $this->cebollas=$cebollas;
    }
    public function setPimientos($pimientos){
        $this->pimientos=$pimientos;
    }
    public function setHuevos($huevos){
        $this->huevos=$huevos;
    }
    public function setManzanas($manzanas){
        $this->manzanas=$manzanas;
    }
    public function mostrar(){
        echo "Nombre y apellidos: ".$this->nombre."<br>Dirección: ".$this->direccion."<br>Telefono: ".$this->tlf;

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

        $pedido->mostrar();
    }
    ?>

</body>
</html>