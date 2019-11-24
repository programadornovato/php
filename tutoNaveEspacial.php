<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nave espacial</title>
</head>
<body>
    <?php
    /*
    echo (10<=>10)."</br>";
    echo (20<=>10)."</br>";
    echo (10<=>20)."</br>";
    */
    $edad=16;
    $acceso=$edad<=>18;

    if($acceso==-1){
        echo "Nel morro, no puedes entrar</br>";
    }
    if($acceso==0){
        echo "Simon pasaste por poco</br>";
    }
    if($acceso==1){
        echo "Simon pasele señor</br>";
    }

    ?>
</body>
</html>