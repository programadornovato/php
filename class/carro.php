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
    function setAlto($alto){
        if($alto>=1 && $alto <= 2){
            $this->alto=$alto;
            echo "Tu nueva altura es $this->alto <br>";
        }
        else{
            echo "Parametro de altura no aceptado<br>";
        }
    }
    function setLargo($largo){
        if($largo>=2 && $largo <= 4){
            $this->$largo=$$largo;
            echo "Tu nuevo $largo es $this->$largo <br>";
        }
        else{
            echo "Parametro de $largo no aceptado<br>";
        }
    }
    function setColor($color){
        if($color=="Blanco" || $color=="Azul" || $color=="Rojo" ){
            $this->color=$color;
            echo "Tu nuevo color es $this->color <br>";
        }
        else{
            echo "Parametro de color no aceptado<br>";
        }
    }
    /*
    function __set($name, $value)
    {
        $this->$name=$value;
    }
    */
    function __get($name)
    {
        return $this->$name;
    }
    protected $marca;
    protected $modelo;
    protected $alto;
    protected $largo;
    protected $color;
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