
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
<table>
        <tr>
            <td>Cantidad</td>
            <td>Producto</td>
            <td>Precio</td>
        </tr>
        <tr>
            <td><?php echo $_POST["cantidad_pan"] ?></td>
            <td>Barras de pan</td>
            <td>1€</td>
        </tr>
        <tr>
            <td><?php echo $_POST["cantidad_croissant"] ?></td>
            <td>Croissant</td>
            <td>1,50€</td>
        </tr>
        <tr>
            <td><?php echo $_POST["cantidad_napolitana"] ?></td>
            <td>Napolitanas</td>
            <td>2€</td>
        </tr>
        <tr>
            <td colspan=2>Total: </td>
            <td>
                <?php
                if ($_POST) {
                    $total = $_POST["cantidad_croissant"]*1.5+$_POST["cantidad_napolitana"]*2+$_POST["cantidad_pan"]*1 ." €";
                    echo $total;
                }
                ?>
            </td>
        </tr>
    </table>
    <?php
    // class pedido,  atributo pedido, metodo mostrar_total
    class Pedido{
        public $pan;
        public $croissant;
        public $napolitana;

        function __construct($pan, $croissant, $napolitana){;
            $this->pan=$pan;
            $this->croissant=$croissant;
            $this->napolitana=$napolitana;
        }

        public function mostrar_total(){
            return $this->pan+$this->croissant*1.5+$this->napolitana*2;
        }
    }
    $pedido1=new Pedido($_POST["cantidad_croissant"],$_POST["cantidad_napolitana"],$_POST["cantidad_pan"]);
    echo $pedido1->mostrar_total();
    ?>
</body>
</html>