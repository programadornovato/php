<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variale Estatica</title>
</head>
<body>
    <?php
    function incrementar(){
        static $contador=4;
        $contador++;
        echo $contador."</br>";
    }
    incrementar();//5
    incrementar();//6
    incrementar();//7
    incrementar();//8
    ?>
</body>
</html>