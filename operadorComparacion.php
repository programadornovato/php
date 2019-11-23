<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Operadores de comparacion</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button name="enviar" type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
        <?php
        if (isset($_GET["enviar"])) {
            if ($_GET["email"] == "eugenio@programadornovato.com" && $_GET["pass"] == "123456") {
                echo "Simon carnal ya entraste";
            } else {
                echo "Nel carnal ya valste aqui no entras";
            }
        }

        ?>
    </div>

    <?php

    /*
    $var1="5";
    $var2=5;
    $var3="programadornovato";

    if($var1!==$var3){
        echo "Nel pastel, no son iguales</br>";
    }
    else{
        echo "Simon carnal, si son iguales</br>";
    }
    */
    ?>
</body>

</html>