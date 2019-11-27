<?php
    function desdeAqui(){
        echo "desde una funcion </br>";
    }
    function cambioAlcance(){
        $GLOBALS['chancla']="No, no me alcanzaste</br>";
    }
    function operacionesMat($operador='',$num1=0,$num2=0)
    {
        if ($operador == 'suma') {
            $resultado=$num1 + $num2;
            echo 'El resultado de la operacion es: ' . $resultado;
        }
        if ($operador == 'resta') {
            $resultado=$num1 - $num2;
            echo 'El resultado de la operacion es: ' . $resultado;
        }
        if ($operador == 'multiplicacion') {
            $resultado=$num1 * $num2;
            echo 'El resultado de la operacion es: ' . $resultado;
        }
        if ($operador == 'divicion') {
            $resultado=$num1 / $num2;
            echo 'El resultado de la operacion es: ' . $resultado;
        }
        if ($operador == 'modulo') {
            $resultado=$num1 % $num2;
            echo 'El resultado de la operacion es: ' . $resultado;
        }
        if ($operador == 'incremento') {
            $resultado=++$num1;
            echo 'El resultado de la operacion es: ' . $resultado;
        }
        if ($operador == 'decremento') {
            $resultado=--$num1;
            echo 'El resultado de la operacion es: ' . $resultado;
        }
        if ($operador == 'exponencial') {
            $resultado=$num1**$num2;
            echo 'El resultado de la operacion es: ' . $resultado;
        }
        if ($operador == '') {
            echo 'Humano, debes de seleccionar un operador matematico ';
        }
    }
    
?>