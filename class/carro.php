<?php
    class carro
    {
        function __construct($marca,$modelo,$alto=1.5,$largo=3,$color="Blanco")
        {
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->alto=$alto;
            $this->largo=$largo;
            $this->color=$color;
        }
        function arrancar(){
            $this->velocidad=0;
        }
        function acelerar($aceleracion){
            $this->velocidad+=$aceleracion;
        }
        function giro($direccion){
            if($direccion=="derecha"){
                $this->angulo+=45;
                if($this->angulo>=360){
                    $this->angulo=0;
                }
            }
            if($direccion=="izquierda"){
                $this->angulo-=45;
                if($this->angulo<=-360){
                    $this->angulo=0;
                }
            }

        }
        function setImage($path){
            $this->imagen=$path;
        }
        var $marca;
        var $modelo;
        var $alto;
        var $largo;
        var $color;
        var $velocidad;
        var $angulo;
        var $imagen;
    }
