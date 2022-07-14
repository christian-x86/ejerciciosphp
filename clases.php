<?php
class Alumno{
    public $nombre;
    public $apellido;
    public $dni;
    public $email;

    public function setNombre($minombre){
        $this->nombre = $minombre;
    }
    public function setApellido($miapellido){
        $this->apellido = $miapellido;
    }
    public function setDni($midni){
        $this->dni = $midni;
    }
    public function setEmail($miemail){
        $this->email = $miemail;
    }

    public function getNombre(){
        return $this->nombre;
    }


}


class Trabajador{
    public $nombre_apellidos;
    public $dni;
    public $sueldo;
    
    // function setNombre_apellidos($minombre_apellidos){
    //     $this->nombre_apellidos=$minombre_apellidos;
    // }
    
    // function setDni($midni){
    //     $this->dni=$midni;
    // }

    // function setSueldo($misueldo){
    //     $this->sueldo=$misueldo;
    // }

    public function __construct($nombre_apellidos,$dni,$sueldo){
        $this->nombre_apellidos=$nombre_apellidos;
        $this->dni=$dni;
        $this->sueldo=$sueldo;
    }

    public function getNombre_apellidos(){
        return $this->nombre_apellidos;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getSueldo(){
        return $this->sueldo;
    }

    public function dameinfo(){
        echo "El trabajador ". $this->nombre_apellidos." tiene el dni: ".$this->dni." cobra un sueldo de ". $this->sueldo."€";
    }
}
// $trabajador1=new Trabajador;
$trabajador1=new Trabajador("Manolo", "123456789",1500);
// $trabajador1 -> setNombre_apellidos("Manolo Rodríguez");
// $trabajador1 -> setDni("12345678C");
// $trabajador1 -> setSueldo(1500);
$trabajador1 -> dameinfo();


class Clase1{
    public $cabecera;
    public $color_fondo;
    public $alineacion;
    
    public function imprimir(){
        echo "<h1 style='background-color:".$this->color_fondo."; text-align:".$this->alineacion."'>".$this->cabecera."</h1>";
    }
}
// $clase_a = new Clase1;
// $clase_a->cabecera = "esto es un h1";
// $clase_a->color_fondo = "green";
// $clase_a->alineacion = "center";
// $clase_a->imprimir();

echo "<hr>";
class Inmueble{
    public $m2;
    public $precio_unitario;

    public function __construct($m2,$precio_unitario){
        $this->m2=$m2;
        $this->precio_unitario=$precio_unitario;
    }

    public function calcular(){
        return $this->m2*$this->precio_unitario;
    }
}

$inmueble1=new Inmueble(50,1000);
echo "Precio: ".$inmueble1->calcular();

// clase persona, atributo nombre, constructor, método para introducir nombre, otro devuelva nombre
echo "<hr>";

class Persona{
    public $nombre;
    public $edad;

    public function __construct($nombre,$edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function getEdad(){
        return $this->edad;
    }
}

$persona1=new Persona("Manolito",50);

echo $persona1->getNombre().", ".$persona1->getEdad();

// clase empleado, atributos nombre, sueldo, constructor, método info y si debe pagar o no impuestos(si sueldo mayor que 18000)
echo "<hr>";

class Empleado{
    public $nombre;
    public $sueldo;

    public function __construct($nombre, $sueldo){
        $this->nombre=$nombre;
        $this->sueldo=$sueldo;
    }

    public function info(){

        if ($this->sueldo > 18000) {
            echo "El empleado con nombre: $this->nombre y sueldo: $this->sueldo debe de pagar impuestos.";
        }else{
            echo "El empleado con nombre: $this->nombre y sueldo: $this->sueldo no debe de pagar impuestos.";
        }
    }
}

$empleado1=new Empleado("Manolo", 180000);
$empleado1->info();

// clase gato, atributo nombre, edad, constructor, método  info,  y maullar.
echo "<hr>";
class Gato{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    public function info(){
        echo "El gato con nombre: ".$this->nombre." tiene ".$this->edad." años";
    }
    public function maullar(){
        echo "El gato ".$this->nombre." dice MIAU.";
    }
}

$gato1=new Gato("Misifu", 5);
$gato1->maullar();

// clase perro, nombre, raza, edad, construct(nombre), método dar raza y edad
echo "<hr>";

class Perro{
    public $nombre;
    public $edad;
    public $raza;

    public function __construct($nombre){
        $this->nombre=$nombre;
    }

    public function setEdad($edad){
        $this->edad=$edad;
    }

    public function setRaza($raza){
        $this->raza=$raza;
    }

    public function ladrar(){
        echo "Mi perro ".$this->nombre." de raza ".$this->raza." dice GUAU.";
    }
}

$perro1=new Perro("crispy");
$perro1->setRaza("dálmata");
$perro1->ladrar();

echo "<hr>";

class Empresa{
    public $nombre;
    public $nif;
    public $direccion;
    public $tel;
    public $email;

    public function __construct($nombre, $nif){
        $this->nombre=$nombre;
        $this->nif=$nif;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function setTel($tel){
        $this->tel=$tel;
    }
    public function setEmail($email){
        $this->email=$email;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getNif(){
        return $this->nif;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getTel(){
        return $this->tel;
    }
    public function getEmail(){
        return $this->email;
    }

    public function info(){
        echo "Datos de la empresa: ".$this->nombre.", ".$this->nif.", ".$this->direccion.", ".$this->tel.", ".$this->email;
    }
}
$empresa1=new Empresa("Plásticos Maruchi",  "123456789");
$empresa1->setDireccion("C/ la bolsa, 31");
$empresa1->setTel("952123456");
$empresa1->setEmail("hola@plasticosmaruchi.com");
$empresa1->info();

class Mascota{
    public $nombre;

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
}

echo "<hr>";

class Pez extends Mascota
{
    public $especie;
    public $color;

    public function setEspecie($especie){
        $this->especie=$especie;
    }
    public function getEspecie(){
        return $this->especie;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }
    public function info(){
        echo "Datos del pez:".$this->nombre.", ".$this->especie.", ".$this->color.".";
    }
}

$animal1=new Pez;
$animal1->setNombre("Octopussy");
$animal1->info();

// clase artículo, Nombre del artículo y precio, constructor (nombre y precio),  método info
echo "<hr>";

class Articulo{
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio){
        $this->nombre=$nombre;
        $this->precio=$precio;
    }

    public function info(){
        echo "El artículo ".$this->nombre." tiene un precio de: ".$this->precio;
    }
}

$articulo1=new Articulo("[nombre articulo]", 10);
$articulo1->info();
echo "<hr>";
class Articulo_rebajado extends Articulo
{
    public $precio_rebajado;
    
    public function __construct($precio_rebajado,$nombre, $precio){
        parent::__construct($nombre, $precio);
        $this->precio_rebajado=$precio_rebajado;
    }
    
    public function info(){
        parent::info();
        echo " y un precio rebajado: ".$this->precio_rebajado;
    }
}

$articulo2=new Articulo_rebajado("[precio rebajado]","[nombre del artículo]","[precio]");
$articulo2->info();

// clase hijo de articulo, libro, atributo autor, editorial, constructor de todo,
echo "<hr>";
class Libro extends Articulo
{
    public $autor;
    public $editorial;

    public function __construct($nombre, $precio, $autor, $editorial){
        parent::__construct($nombre, $precio);
        $this->autor=$autor;
        $this->editorial=$editorial;
    }
    public function info(){
        parent::info();
        echo " con autor: ".$this->autor." y editorial: ".$this->editorial;
    }
}

$libro1=new Libro("[Título]", "[Precio]", "[Autor]", "[Editorial]");
$libro1->info();

echo "<hr>";

class Plato{

    public $nombre;
    public $descripcion;
    public $celiaco;
    public $vegano;
    public $precio;

    public function __construct($nombre, $descripcion){
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
    }

    public function setCeliaco($celiaco){
        $this->celiaco=$celiaco;
    }
    public function setVegano($vegano){
        $this->vegano=$vegano;
    }
    public function setPrecio($precio){
        $this->precio=$precio;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getCeliaco(){
        return $this->celiaco;
    }
    public function getVegano(){
        return $this->vegano;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function info(){
        echo "Nombre: ".$this->nombre.", descripción: ".$this->descripcion;
        if ($this->celiaco) {
            echo ", Apto para celiacos";
        }else {
            echo ", No apto para celiacos";
        }
        if ($this->vegano) {
            echo ", Apto para veganos";
        }else {
            echo ", No apto para veganos";
        }
        echo  ", precio: ".$this->precio;
    }
}

$plato1 = new Plato("nombre del plato", "descripción del plato");
$plato1->setCeliaco(true);
$plato1->setVegano(false);
$plato1->setPrecio(9.95);
$plato1->info();

// clase hija entrante, atributo tipo (racion, media o tapa) en el constructor, modificar la func info para  que calcule el precio (tapa 1/3, media 1/2, precio original ración)
echo "<hr>";

class Entrante extends Plato
{
    function __construct($nombre, $descripcion, $tipo){
        parent::__construct($nombre, $descripcion);
        $this->tipo=$tipo;
    }
    function info(){
        parent::info();
        echo ", es de tipo ".$this->tipo." con un precio de ";
        switch ($this->tipo) {
            case 'racion':
                echo $this->precio;
                break;
            case 'media':
                echo $this->precio/2;
                break;
            case 'tapa':
                echo $this->precio/3;
                break;
            default:
                
                break;
        }
    }
}
$plato2 = new Entrante("nombre entrante", "desc entrante", "media");
$plato2->setPrecio(20);
$plato2->info();

echo "<hr>";

// Clase abstracta
abstract class CocheAbstract
{
    abstract public function getRuedas();
}

// Interfaces
interface Automovil{
    public function getTipo();
    public function getRuedas();
}

class Coche implements Automovil
{
    public function getTipo(){
        echo "Coche";
    }
    public function getRuedas(){
        echo "4";
    }
}
class Moto implements Automovil
{
    public function getTipo(){
        echo "Moto";
    }
    public function getRuedas(){
        echo "2";
    }
}
// Clase con funcion public STATIC

class greeting{
    public static function welcome(){
        echo "Hello World!";
    }
}

greeting::welcome();

// interfaz acciones que tenga función moverse y otra comer
echo "<hr>";

interface Acciones{
    public function moverse();
    public function comer();
}

class Gato1 implements Acciones
{
    public function moverse(){
        echo "El gato se mueve sigilosamente";
    }
    public function comer(){
        echo "El gato come ratones";
    }
}

$gato1=new Gato1;
$gato1->moverse();
echo "<hr>";

class Boa implements Acciones{
    public function moverse(){
        echo "La boa repta";
    }
    public function comer(){
        echo "la boa come ratones pero sin masticar";
    }
}

$boa1=new Boa;
$boa1->moverse();

echo "<hr>";

?>