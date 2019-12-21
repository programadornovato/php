<!doctype html>
<html lang="en">

<head>
    <title>Consultas preparadas</title>
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
                <form>
                    <div class="form-group">
                        <label>Existencia</label>
                        <input type="text" name="existencia" class="form-control" value="<?php echo $_REQUEST['existencia'] ?? 0; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary" name="buscar" value="buscar">Buscar</button>
                    </div>
                </form>
                <?php
                include_once "db_empresa.php";
                $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                $query = "SELECT id,nombre,precioCompra,categoria,unidadesEnExistencia FROM productos
                    WHERE unidadesEnExistencia=?;";
                $sentencia = mysqli_prepare($conexion, $query);
                $existencia = $_REQUEST['existencia'] ?? 0;
                mysqli_stmt_bind_param($sentencia, "i", $existencia);
                $resultado = mysqli_stmt_execute($sentencia);
                if ($resultado == true) {
                ?>
                    <table class="table table-striped table-inverse">
                        <thead class="thead-inverse">
                            <tr>
                                <th>id</th>
                                <th>nombre</th>
                                <th>precioCompra</th>
                                <th>categoria</th>
                                <th>unidadesEnExistencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            mysqli_stmt_bind_result($sentencia,$id, $nombre, $precioCompra, $categoria, $unidadesEnExistencia);
                            while (mysqli_stmt_fetch($sentencia)) {
                            ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $nombre; ?></td>
                                    <td><?php echo $precioCompra; ?></td>
                                    <td><?php echo $categoria; ?></td>
                                    <td><?php echo $unidadesEnExistencia; ?></td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                <?php
                }
                ?>
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