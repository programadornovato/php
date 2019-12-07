<!doctype html>
<html lang="en">

<head>
    <title>Tutorial Array</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
        //ARRAY ASOCIATIVO
        $autos=array(
            "Roadster"=>array(
                "precio"=>50,
                "puertas"=>4,
                "imagen"=>"roadster.jpg"
            ),
            "Model X"=>array(
                "precio"=>60,
                "puertas"=>5,
                "imagen"=>"modelX.jpg"
            ),
            "Model S"=>array(
                "precio"=>70,
                "puertas"=>5,
                "imagen"=>"modelS.jpg"
            ),
            "Cyberruck"=>array(
                "precio"=>90,
                "puertas"=>6,
                "imagen"=>"cybertruck.jpg"
            )
        );
        //var_dump($autos);
        foreach ($autos as $modelo => $caracteristicas) {
            echo "$modelo<br>";
            foreach ($caracteristicas as $caracteristica => $valor) {
                if($caracteristica=="imagen")
                    echo "<img src='images/$valor' height='200' />";
                else
                    echo "&nbsp&nbsp&nbsp&nbsp$caracteristica : $valor<br>";
            }
            echo "<br>";
        }
        
        ?>
</body>

</html>