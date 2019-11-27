<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones Matematicas.php</title>
</head>
<body>
    <?php
        $num1=rand(0,50);
        echo "El resultado de rand es ".$num1."</br>";

        $num2=pow(5,3);
        //$num2=5**3;
        echo "El resultado del exponencial es ".$num2."</br>";

        $num3=round(1.5,0,PHP_ROUND_HALF_DOWN);
        echo "Desea redondear sus (.5) y entonces terminas pagando ".$num3."</br>";

        //CASTING IMPLICITO
        $num4="5";
        $num4=$num4+1;
        echo "El resultado del casting es: ".$num4."</br>";

        //CASTING EXPLICITO
        $num5="5";
        echo "El tipo de dato de la variable es ".gettype($num5)."</br>";

        $num6=(float)"6";
        echo "El tipo de dato de la variable es ".gettype($num6)."</br>";
    ?>
</body>
</html>