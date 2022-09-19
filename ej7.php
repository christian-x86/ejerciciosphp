<?php
// Clase producto, nombre, precio, construct (nombre, precio=0), resumen()(nombre precio), pvp(precio*1,21)

class Producto{
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio=0){
        $this->nombre=$nombre;
        $this->precio=$precio;
    }

    public function resumen(){
        echo "El producto: ".$this->nombre." cuesta: ".$this->precio."€ con iva: ".$this->pvp()."€";
    }
    public function pvp(){
        return $this->precio*1.21;
    }
}

$producto1=new Producto("A",10);
$producto1->resumen();

class Cd extends Producto{
    public $longitud;

    public function __construct($nombre, $precio, $longitud){
        parent::__construct($nombre, $precio);
        $this->longitud=$longitud;
    }

    public function resumen(){
        parent::resumen();
        echo " duración:". $this->longitud;
    }
}
echo "<br>";
$cd1=new Cd("CD1", 20, 5);
$cd1->resumen();

// clase libro , hija de producto, constructor (num paginas),  cambiar metodo resumen para añadir num paginas

class Libro extends Producto{
    public $num_paginas;

    public function __construct($nombre, $precio, $num_paginas){
        parent::__construct($nombre, $precio);
        $this->num_paginas=$num_paginas;
    }

    public function resumen(){
        parent::resumen();
        echo " número de páginas: ".$this->num_paginas;
    }
}
echo "<br>";
$libro1 = new Libro("Nombre libro", 15, 80);
$libro1->resumen();

// Libro antiguo hija de libro, atributo anio, construct, cambia resumen

class LibroAntiguo extends Libro{
    public $anio;

    public function __construct($nombre, $precio, $num_paginas, $anio){
        parent::__construct($nombre, $precio, $num_paginas);
        $this->anio=$anio;
    }

    public function resumen(){
        parent::resumen();
        echo " publicado en el año: ".$this->anio;
    }
}
echo "<br>";
$libroantiguo1=new LibroAntiguo("Nombre libro antiguo", 20, 120, 1920);
$libroantiguo1->resumen();

// clase imagen, nombre , ruta ,borde =0, construct( , ,), metodo muestra imagen;

class Imagen{
    public $nombre;
    public $ruta;
    public $borde;

    public function __construct($nombre, $ruta, $borde=0){
        $this->nombre=$nombre;
        $this->ruta=$ruta;
        $this->borde=$borde;
    }

    public function mostrar(){
        echo "<img src='".$this->ruta."/".$this->nombre."' alt='' style='border:".$this->borde."px solid black;'><p>".$this->nombre."</p>";
    }
}


// clase imagen plus hija  de imagen, atr ancho, alto, construct,  mostrar

class ImagenPlus extends Imagen{
    public $alto;
    public $ancho;

    public function __construct($nombre, $ruta, $borde, $alto, $ancho){
        parent::__construct($nombre, $ruta, $borde);
        $this->alto=$alto;
        $this->ancho=$ancho;
    }
    
    public function __toString(){
        return "<img src='".$this->ruta."/".$this->nombre."' alt='' style='border:".$this->borde."px solid black;height:".$this->alto."px;width:".$this->ancho."px;'><p>".$this->nombre."</p>";
    }
}

echo "<br>";
$imagen1=new ImagenPlus("wireframe1.png", "../restaurante/misc/wireframe", 3, 200, 200);
// echo $imagen1 llama a __toString()
echo $imagen1;
?>