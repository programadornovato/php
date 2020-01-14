<!doctype html>
<html lang="en">

<head>
    <title>Images</title>
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
                if (isset($_REQUEST['guardar'])) {
                    if (isset($_FILES['foto']['name'])) {
                        $tipoArchivo = $_FILES['foto']['type'];
                        $permitido=array("image/png","image/jpeg");
                        if( in_array($tipoArchivo,$permitido) ==false ){
                            die("Archivo no permitido");
                        }
                        $nombreArchivo = $_FILES['foto']['name'];
                        $tamanoArchivo = $_FILES['foto']['size'];
                        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
                        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                        include_once "db_empresa.php";
                        $con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                        $binariosImagen = mysqli_escape_string($con, $binariosImagen);
                        $query = "INSERT INTO imagenes (nombre            ,imagen                 ,tipo) values 
                                                         ('" . $nombreArchivo . "','" . $binariosImagen . "','" . $tipoArchivo . "');
                            ";
                        $res = mysqli_query($con, $query);
                        if ($res) {
                ?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                Registro insertado exitosamente
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                Error <?php echo mysqli_error($con); ?>
                            </div>
                <?php

                        }
                    }
                }
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="foto">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
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