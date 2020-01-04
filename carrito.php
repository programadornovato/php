<!doctype html>
<html lang="en">

<head>
    <title>carrito</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <table class="table table-striped">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Nombre</th>
                                <th><button type="submit" name="agregar" class="btn btn-primary"><i class="fa fa-cart-plus"></i></button></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "db_empresa.php";
                            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                            $query = "SELECT nombre FROM productos LIMIT 10;";
                            $res = mysqli_query($con, $query);
                            if(isset($_REQUEST['producto'])){
                                setcookie("producto",serialize($_REQUEST['producto']),time()+3000);
                            }
                            while ($row = mysqli_fetch_assoc($res)) {
                                if(isset($_REQUEST['producto'])){
                                    $esta=in_array($row['nombre'],$_REQUEST['producto']);
                                }else{
                                    $listaProducto=unserialize($_COOKIE['producto']);
                                    $esta=in_array($row['nombre'],$listaProducto);
                                }
                            ?>
                                <tr>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><input type="checkbox" name="producto[]" value="<?php echo $row['nombre']; ?>" <?php echo $esta?" checked='checked' ":" "; ?> ></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>