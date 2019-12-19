<!doctype html>
<html lang="en">

<head>
    <title>Crear</title>
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
                <?php
                include_once "db_empresa.php";
                $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                if ($conexion == false) {
                    die("Humano hay un error en ela conexion arreglalo " . mysqli_error($conexion));
                }
                if (isset($_REQUEST['guardar'])) {
                    $sql = "INSERT INTO usuarios (user                     ,pass                       ) VALUE
                                                ('" . $_REQUEST['user'] . "','" . $_REQUEST['pass'] . "');";
                    $resultado = mysqli_query($conexion, $sql);
                    if ($resultado == true) {
                        header("Location: editarUser.php?id=".mysqli_insert_id($conexion));
                    } else {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Error al crear tu registro <?php echo mysqli_error($conexion) ?></strong>
                        </div>
                <?php
                    }
                }
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>User</label>
                        <input type="text" class="form-control" name="user">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pass">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary" name="guardar">Guardar <i class="fa fa-save"></i> </button>
                        <a href="listaUser.php" class="btn btn-warning">Cancelar <i class="fa fa-backward"></i></a>
                    </div>
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
<?php
mysqli_close($conexion);
?>

</html>