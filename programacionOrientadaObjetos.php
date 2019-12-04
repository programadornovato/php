<!doctype html>
<html lang="en">

<head>
    <title>Programacion Orientada a Objetos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .card-img-top{
            width: 100%;
            height: 10vw;
            object-fit: over;
        }
    </style>
</head>

<body>
    <?php
    include_once "class/carro.php";
    $lamborgini1 = new carro("Lamborgini", 2020);
    $lamborgini1->setImage("images/lambo.jpeg");
    $bmw1 = new carro("BMW", 2020, 1.3, 4, "Rojo");
    $bmw1->setImage("images/bmw.jpeg");
    $cybertruck1 = new carro("Tesla", "Cyber truck 2021");
    $cybertruck1->setImage("images/cyber.jpeg");
    ?>
    <div class="container mt-3">
        <div class="row">

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $lamborgini1->imagen; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lamborgini1->marca."".$lamborgini1->modelo; ?></h5>
                        <p class="card-text">
                            <?php 
                            echo "Largo: ".$lamborgini1->largo."<br>";
                            echo "Alto: ".$lamborgini1->alto."<br>";
                            echo "Color: ". $lamborgini1->color."<br>";
                            ?>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $bmw1->imagen; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $bmw1->marca."".$bmw1->modelo; ?></h5>
                        <p class="card-text">
                            <?php 
                            echo "Largo: ".$bmw1->largo."<br>";
                            echo "Alto: ".$bmw1->alto."<br>";
                            echo "Color: ". $bmw1->color."<br>";
                            ?>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $cybertruck1->imagen; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $cybertruck1->marca."".$cybertruck1->modelo; ?></h5>
                        <p class="card-text">
                            <?php 
                            echo "Largo: ".$cybertruck1->largo."<br>";
                            echo "Alto: ".$cybertruck1->alto."<br>";
                            echo "Color: ". $cybertruck1->color."<br>";
                            ?>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>