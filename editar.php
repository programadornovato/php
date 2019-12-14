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
                if (isset($_GET['guardar'])) {
                    $sql = "UPDATE productos SET
                    nombre='" . $_GET['nombre'] . "',
                    precioCompra='" . $_GET['precioCompra'] . "',
                    precioVenta='" . $_GET['precioVenta'] . "',
                    fechaCompra='" . $_GET['fechaCompra'] . "',
                    categoria='" . $_GET['categoria'] . "',
                    unidadesEnExistencia='" . $_GET['unidadesEnExistencia'] . "'
                    WHERE id='" . $_GET['id'] . "';
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
                    `id`, 
                    `nombre`, 
                    `precioCompra`, 
                    `precioVenta`, 
                    `fechaCompra`, 
                    `categoria`, 
                    `unidadesEnExistencia` 
                    FROM `productos`
                    WHERE id='" . $_GET['id'] . "'
                    ;
                    ";

                $resulSet = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($resulSet, MYSQLI_ASSOC);
                ?>
                <form>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Precio compra</label>
                        <input type="text" class="form-control" name="precioCompra" value="<?php echo $row['precioCompra'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Precio venta</label>
                        <input type="text" class="form-control" name="precioVenta" value="<?php echo $row['precioVenta'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Fecha compra</label>
                        <input type="text" class="form-control" name="fechaCompra" value="<?php echo $row['fechaCompra'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <input type="text" class="form-control" name="categoria" value="<?php echo $row['categoria'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Existencia</label>
                        <input type="text" class="form-control" name="unidadesEnExistencia" value="<?php echo $row['unidadesEnExistencia'] ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
                    <a href="tutorialMysql.php" class="btn btn-warning">Cancelar</a>
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