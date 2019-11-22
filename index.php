<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    include "lib.php";
    $chancla="Si te alcanzo</br>";
    cambioAlcance();
    echo $chancla;
    echo $_SERVER['HTTP_HOST'];
    ?>
</body>
</html>
