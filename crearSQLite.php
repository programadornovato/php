<!doctype html>
<html lang="en">

<head>
    <title>Crear</title>
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
                include_once "sqlite.php";
                $sqlite = new sqlite();
                if (isset($_REQUEST['guardar'])) {
                    $producto = array(
                        "nombre" => $_REQUEST['nombre'],
                        "precio" => $_REQUEST['precio'],
                        "categoria" => $_REQUEST['categoria'],
                        "existencia" => $_REQUEST['existencia'],
                        "foto" => $_REQUEST['foto']
                    );
                    $resultado = $sqlite->insertar($producto);
                    if ($resultado == true) {
                        //header("Location: PDO.php");
                    } else {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            Error
                        </div>
                <?php

                    }
                }
                ?>
                <form>
                    <div class="form-group">
                        <label for="">nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="">precio</label>
                        <input type="text" class="form-control" name="precio">
                    </div>
                    <div class="form-group">
                        <label for="">categoria</label>
                        <input type="text" class="form-control" name="categoria">
                    </div>
                    <div class="form-group">
                        <label for="">existencia</label>
                        <input type="text" class="form-control" name="existencia">
                    </div>
                    <div class="form-group">
                        <label for="">foto</label>
                        <input type="text" class="form-control" name="foto">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="guardar">Guardar</button>
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