<?php
// class menu, atr menu (array asociativo, enlace y label), con setter, metodo mostrarMenu()

class Menu{
    public $menu;

    public function setMenu($menu){
        $this->menu=$menu;
    }

    public function mostrarMenu(){
        echo "<ul>";
        foreach ($this->menu as $key => $value) {
            echo "<li><a href='$key'>$value</a></li>";
        }
        echo "</ul>";
    }
}
$arr=[
    "inicio.php"=>"Inicio",
    "aboutus.php"=>"Sobre nosostros",
    "login.php"=>"Log in"
];
// clase hija plus, que añade clase a l ul

class MenuPlus extends Menu{
    public $estilo;

    public function setEstilo($estilo){
        $this->estilo=$estilo;
    }

    public function mostrarMenu(){
        echo "<div class='$this->estilo'>";
        parent::mostrarMenu();    
        echo "</div>";
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
    .menu ul {
        list-style: none;
        display: flex;
        width: 50%;
        margin: 50px auto;
        justify-content: space-between;
    }
    .menu li{
        padding: 10px 25px;
        border: 1px solid #333;
        border-radius: 5px;
        font-size: 25px;
    }
    .menu li a{
        text-decoration: none;
        color: #333;
    }
    </style>
</head>
<body>
<?php

$menu1 = new MenuPlus;
$menu1->setMenu($arr);
$menu1->setEstilo("menu");
$menu1->mostrarMenu();

?>

</body>
</html>