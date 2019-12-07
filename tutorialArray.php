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
    <div class="container mt-3">
        <div class="row">

            <?php
            include_once "autos.php";
            //var_dump($autos);
            foreach ($autos as $modelo => $caracteristicas) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/<?php echo $caracteristicas['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo $modelo; ?></strong></h5>
                            <p class="card-text">
                                <strong>Precio</strong> :<?php echo $caracteristicas['precio'] ?><br>
                                <strong>Puertas</strong> :<?php echo $caracteristicas['puertas'] ?>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>