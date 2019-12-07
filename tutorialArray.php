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
        //ARRAY INDEXADO
        $autos[]="Roadster";
        $autos[]="Model X";
        $autos[]="Model S";
        $autos[]="Cybertruck";
        sort($autos);
        //array_push($autos,"Model Y","Model 3");
        foreach($autos as $llave=>$elemento){
            echo $llave." ".$elemento."<br>";
        }
        */
        
        //ARRAY ASOCIATIVO
        $autos=array(
            "Roadster"=>50,
            "Model X"=>40,
            "Model S"=>20,
            "Cyberruck"=>80
        );
        
        //echo $autos["Cyberruck"];
        //echo is_array($autos) ? "Es un arreglo" : "No es un arreglo";
        $autos["Model 3"]=40;
        $autos["Model Y"]=10;
        ksort($autos);
        foreach ($autos as $llave => $auto){
            echo $llave." ".$auto."<br>";
        }
        
        ?>
</body>

</html>