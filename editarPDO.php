<!doctype html>
<html lang="en">

<head>
    <title>Editar PDO</title>
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
                    <?php
                    include_once "sqlite.php";
                    $sqlite = new sqlite();
                    if (isset($_REQUEST['guardar'])) {
                        $res = $sqlite->editar($_REQUEST);
                    ?>
                        <div class="alert alert-<?php echo $res ? "primary" : "danger"; ?> alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <?php echo $res ? "Registro actualizado" : "Error al actualizar"; ?>
                        </div>
                    <?php
                    }
                    $resultado = $sqlite->leer(array("id" => $_REQUEST['id']));

                    ?>
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $resultado[0]->nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="text" class="form-control" name="precio" value="<?php echo $resultado[0]->precio; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Categoria</label>
                        <input type="text" class="form-control" name="categoria" value="<?php echo $resultado[0]->categoria; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Existencia</label>
                        <input type="text" class="form-control" name="existencia" value="<?php echo $resultado[0]->existencia; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="text" class="form-control" name="foto" value="<?php echo $resultado[0]->foto; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
                        <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                        <a href="PDO.php" class="btn btn-warning">Regresar</a>
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

</html>