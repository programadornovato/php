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
        /*
        //INDICE INDEXADO
        $autos[]="Roadster";
        $autos[]="Model X";
        $autos[]="Model S";
        $autos[]="Cybertruck";
        echo $autos[0];
        */
        /*
        //INDICE ASOCIATIVO
        $autos["Roadster"]=50;
        $autos["Model X"]=40;
        $autos["Model S"]=20;
        $autos["Cyberruck"]=80;
        echo $autos["Cyberruck"];
        */
        /*
        //INDICE INDEXADO
        $autos=array(
            "Roadster",
            "Model X",
            "Model S",
            "Cyberruck"
        );
        echo $autos[2];
        */
        //INDICE ASOCIATIVO
        $autos=array(
            "Roadster"=>50,
            "Model X"=>40,
            "Model S"=>20,
            "Cyberruck"=>80
        );
        echo $autos["Cyberruck"];
        ?>
</body>

</html>