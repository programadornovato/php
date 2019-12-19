<!doctype html>
<html lang="en">

<head>
    <title>Editar</title>
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
                <?php
                include_once "db_empresa.php";
                $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                if ($conexion == false) {
                    echo "Error conexion" . mysqli_error($conexion);
                }
                if (isset($_REQUEST['guardar'])) {
                    $sql = "UPDATE usuarios SET
                    user='" . $_REQUEST['user'] . "',
                    pass='" . $_REQUEST['pass'] . "'
                    WHERE id='" . $_REQUEST['id'] . "';
                    ";
                    $resultado = mysqli_query($conexion, $sql);
                    if ($resultado == false) {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong><?php echo "Error al actualizar ".mysqli_error($conexion); ?></strong>
                        </div>
                    <?php

                        } else {
                            ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Actualizacion exitosa</strong>
                        </div>
                <?php
                    }
                }
                $sql = "SELECT 
                    id, 
                    user,
                    pass
                    FROM usuarios
                    WHERE id='" . $_REQUEST['id'] . "'
                    ;
                    ";
                $resulSet = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($resulSet, MYSQLI_ASSOC);
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>User</label>
                        <input type="text" class="form-control" name="user" value="<?php echo $row['user'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Pass</label>
                        <input type="password" class="form-control" name="pass" value="<?php echo $row['pass'] ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
                    <a href="listaUser.php" class="btn btn-warning">Cancelar</a>
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
<?php
mysqli_close($conexion);
?>