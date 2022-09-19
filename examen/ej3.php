<?php
class Alumno{
    public $nombre;
    public $apellidos;
    public $dni;
    public $curso;

    public function __construct($nombre, $apellidos, $dni){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->dni=$dni;
    }

    public function alta($curso){
        $this->curso=$curso;
    }

    public function baja(){
        $this->curso=NULL;
    }

}

$alumno1 = new Alumno("Pepe", "Rodriguez", "123456789");
$alumno1->alta("primero");
var_dump($alumno1);
echo "<br>";
$alumno1->baja();
echo "<br>";
var_dump($alumno1);
?>