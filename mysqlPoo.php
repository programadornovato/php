<!doctype html>
<html lang="en">

<head>
    <title>Mysql Poo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>precioCompra</th>
                            <th>precioVenta</th>
                            <th>fechaCompra</th>
                            <th>categoria</th>
                            <th>unidadesEnExistencia</th>
                            <th>foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once "db_empresa.php";
                        //$conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
                        $conexion = new mysqli($db_host, $db_user, $db_pass, $db_database);
                        if ($conexion->errno) {
                            die("Error de conexion");
                        }
                        $query = "SELECT id,nombre,precioCompra,precioVenta,fechaCompra,categoria,unidadesEnExistencia,foto FROM productos;";
                        //$resultSet=mysqli_query($conexion,$query);
                        $resultSet = $conexion->query($query);
                        if ($conexion->errno) {
                            die($conexion->error);
                        }
                        //while($row=mysqli_fetch_assoc($resultSet))
                        while ($row = $resultSet->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?> </td>
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['precioCompra'] ?></td>
                                <td><?php echo $row['precioVenta'] ?></td>
                                <td><?php echo $row['fechaCompra'] ?></td>
                                <td><?php echo $row['categoria'] ?></td>
                                <td><?php echo $row['unidadesEnExistencia'] ?></td>
                                <td><?php echo $row['foto'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
        $conexion->close();
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>