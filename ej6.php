<?php
// crear una clase factura que te nga atributos iva, base,  fecha, impuestos, importe bruto, estado(pagado o no). constructor con base, fecha e iva. crear setters para todos los atributos, crear una funcion que imprima en pantalla toda la info de la factura

class Factura
{
    public $iva;
    public $base;
    public $fecha;
    public $impuestos;
    public $importe_bruto;
    public $estado;

    public function __construct($base, $fecha, $iva){
        $this->base=$base;
        $this->fecha=$fecha;
        $this->iva=$iva;
    }

    public function setIva($iva){
        $this->iva=$iva;
    }
    public function setBase($base){
        $this->base=$base;
    }
    public function setFecha($fecha){
        $this->fecha=$fecha;
    }
    public function setImpuestos($impuestos){
        $this->impuestos=$impuestos;
    }
    public function setImportebruto($importe_bruto){
        $this->importe_bruto=$importe_bruto;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function info(){
        var_dump($this);
        echo "Factura:
        <br>IVA: ".$this->iva
        ."<br>Base: ".$this->base
        ."<br>Fecha: ".$this->fecha
        ."<br>Impuestos: ".$this->impuestos
        ."<br>Importe bruto: ".$this->importe_bruto
        ."<br>Estado: ".$this->estado;
    }
}

$factura1 = new Factura("[base]", "[fecha]", "[impuestos]");
$factura1->info();
?>