<!doctype html>
<html lang="en">

<head>
    <title>PDO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        input.form-control {
            font-family: FontAwesome;
        }
    </style>
</head>

<body>
    <?php
    include_once "sqlite.php";
    $sqlite = new sqlite();
    ?>
    <div class="container mt-3">
        <div class="row">
            <form>
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><input type="text" name="id" class="form-control" value="<?php echo $_REQUEST['id'] ?? ''; ?>" placeholder="&#xf002;"></th>
                                <th><input type="text" name="nombre" class="form-control" value="<?php echo $_REQUEST['nombre'] ?? ''; ?>" placeholder="&#xf002;"></th>
                                <th><input type="text" name="precio" class="form-control" value="<?php echo $_REQUEST['precio'] ?? ''; ?>" placeholder="&#xf002;"></th>
                                <th><input type="text" name="categoria" class="form-control" value="<?php echo $_REQUEST['categoria'] ?? ''; ?>" placeholder="&#xf002;"></th>
                                <th><input type="text" name="existencia" class="form-control" value="<?php echo $_REQUEST['existencia'] ?? ''; ?>" placeholder="&#xf002;"></th>
                                <th><button type="submit" class="btn btn-primary">Buscar</button></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>id</th>
                                <th>nombre</th>
                                <th>precio</th>
                                <th>categoria</th>
                                <th>existencia</th>
                                <th>foto</th>
                                <th><a href="crearSQLite.php"><i class="fa fa-plus"></i></a> acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $resultado = $sqlite->leer($_REQUEST);
                            foreach ($resultado as $key => $value) {
                            ?>
                                <tr>
                                    <td><?php echo $value->id; ?></td>
                                    <td><?php echo $value->nombre; ?></td>
                                    <td><?php echo $value->precio; ?></td>
                                    <td><?php echo $value->categoria; ?></td>
                                    <td><?php echo $value->existencia; ?></td>
                                    <td><?php echo $value->foto; ?></td>
                                    <td><i class="fa fa-edit mr-2"></i><i class="fa fa-trash"></i></td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>