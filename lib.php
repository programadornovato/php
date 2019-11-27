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
            echo 'El resultado de la operacion es: ' . ($num1 + $num2);
        }
        if ($operador == 'resta') {
            echo 'El resultado de la operacion es: ' . ($num1 - $num2);
        }
        if ($operador == 'multiplicacion') {
            echo 'El resultado de la operacion es: ' . ($num1 * $num2);
        }
        if ($operador == 'divicion') {
            echo 'El resultado de la operacion es: ' . ($num1 / $num2);
        }
        if ($operador == 'modulo') {
            echo 'El resultado de la operacion es: ' . ($num1 % $num2);
        }
        if ($operador == '') {
            echo 'Humano, debes de seleccionar un operador matematico ';
        }
    }
    
?>