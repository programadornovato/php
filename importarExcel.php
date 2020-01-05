<!doctype html>
<html lang="en">

<head>
    <title>Importar Excel</title>
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
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" class="btn btn-primary" name="archivo">
                        <button type="submit" class="btn btn-primary" name="subir"> <i class="fa fa-upload"></i> </button>
                    </div>
                </form>
                <?php
                if (isset($_REQUEST['subir'])) {
                    $nombre = $_FILES['archivo']['name'];
                    $tipo = $_FILES['archivo']['type'];
                    if ($tipo != "text/csv") die("Archivo no valido");
                    $destino = "csv/$nombre";
                    $res = copy($_FILES['archivo']['tmp_name'], $destino);
                ?>
                    <div class="alert alert-<?php echo $res ? "primary" : "danger"; ?> alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <?php echo $res ? "Archivo subido exitosamente" : "Error al subir archivo"; ?>
                    </div>
                <?php
                if( file_exists($destino)==true ){
                    $archivo=fopen($destino,"r");
                    while( ($columna=fgetcsv($archivo))!=false ){
                        echo $columna[0]."-----".$columna[1]."-----".$columna[2]."-----".$columna[3]."-----".$columna[4]."-----".$columna[5]."-----".$columna[6]."-----".$columna[7]."<br>";
                    }
                }
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