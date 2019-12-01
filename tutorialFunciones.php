<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tutorial Funciones</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                    <?php
                    /*
                        $dominio="HTTPS://WWW.Programadornovato.com</br>";
                        echo (strtolower($dominio));

                        $nombre="eugenio chaparro maya</br>";
                        echo ($nombre=ucwords($nombre));

                        $oracion="mi nombre es $nombre";
                        echo(ucfirst($oracion));
                    */
                    function suma($num1=0,$num2=0){
                        return ($num1+$num2);
                        
                    }
                    echo (suma(null,6));

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>