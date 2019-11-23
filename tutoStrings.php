<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .rojo{
            color: red;
        }
    </style>
    <title>Strings</title>
</head>
<body>
    <?php
    /*
    $saludo="saludos desde programado novato";
    echo "<p class=\"rojo\"> Hola humano $saludo </p>";
    */
    /*
    srtcmp hola hola
           1234 1234=0
    srtcasecmp
    */
    $string1="programadornovato";
    $string2="ProgramadorNovato";
    /*
    $resultado=strcmp($string1,$string2);
    //echo "El resultado es $resultado</br>";
    if($resultado==0){
        echo "Simon, si son iguales</br>";
    }
    else{
        echo "Nel pastel, no son iguales</br>";
    }
    */
    if($string1==$string1){
        echo "Simon, si son iguales</br>";
    }
    else{
        echo "Nel pastel, no son iguales</br>";
    }
    ?>
</body>
</html>