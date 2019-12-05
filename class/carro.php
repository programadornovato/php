<?php
class carro
{
    function __construct($marca, $modelo, $alto = 1.5, $largo = 3, $color = "Blanco")
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->alto = $alto;
        $this->largo = $largo;
        $this->color = $color;
    }
    function arrancar($pass)
    {
        if($pass=="123" || $this->acceso==true){
            $this->acceso=true;
            $this->velocidad = 0;
        }
        else{
            $this->acceso=false;
            echo "Error de acceso en arrancar<br>";
        }
    }
    function acelerar($aceleracion)
    {
        if($this->acceso==true){
           $this->velocidad += $aceleracion;
        }
        else{
            echo "Error de acceso en acelerar<br>";
        }
    }
    function giro($direccion)
    {
        if($this->acceso==true){
            if ($direccion == "derecha") {
                $this->angulo += 45;
                if ($this->angulo >= 360) {
                    $this->angulo = 0;
                }
            }
            if ($direccion == "izquierda") {
                $this->angulo -= 45;
                if ($this->angulo <= -360) {
                    $this->angulo = 0;
                }
            }
        }
        else{
            echo "Error de acceso al girar<br>";
        }
    }
    function setImage($path)
    {
        $this->imagen = $path;
    }
    var $marca;
    var $modelo;
    var $alto;
    var $largo;
    var $color;
    var $velocidad;
    var $angulo;
    var $imagen;
    protected $acceso=false;
}

class hibrido extends carro
{
    var $motor;
    var $cargaElectrica;
    function __construct($marca, $modelo, $alto = 1.5, $largo = 3, $color = "Blanco",$tipoMotor="H1")
    {
        parent::__construct($marca, $modelo, $alto, $largo, $color);
        $this->motor=$tipoMotor;
    }
    function acelerar($aceleracion)
    {
        if($this->acceso==true){
            $this->velocidad += $aceleracion;
            $this->cargaElectrica=$this->cargaElectrica+($aceleracion/2);
        }
        else{
            echo "Error de acceso al acelerar hibrido<br>";
        }
    }
}

class IA extends hibrido{
    var $detecta;
    function setDetecta($queDetecta){
        $this->detecta=$queDetecta;
    }
}