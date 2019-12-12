<!doctype html>
<html lang="en">

<head>
    <title>Tutorial Mysql</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#tablaAutos').DataTable({
                'searching': false,
                'ordering': false
            });
        });
    </script>
</head>

<body>
    <?php
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    include_once "db_empresa.php";
    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
    if ($conexion == false) {
        die("Error de conexion a Mysql con el codigo: " . mysqli_connect_errno() .
            "<br>" . mysqli_connect_error());
    }
    $where=" where 1=1 ";
    if( empty($_GET['buscarNombre'])==false ){
        $where=$where." and nombre='".$_GET['buscarNombre']."' ";
    }
    if( empty($_GET['buscarCategoria'])==false ){
        $where=$where." and categoria='".$_GET['buscarCategoria']."' ";
    }
    if( empty($_GET['buscarExistencia'])==false ){
        $where=$where." and unidadesEnExistencia='".$_GET['buscarExistencia']."' ";
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
    $where
    ;
    ";
    $resultSet = mysqli_query($conexion, $sql);
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form>
                    <table class="table table-striped" id="tablaAutos">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    <div class="input-group">
                                        <input type="text" name="buscarNombre" class="form-control" placeholder="Por nombre" value="<?php echo $_GET['buscarNombre'] ?>" >
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col"></th>
                                <th scope="col">
                                    <div class="input-group">
                                        <input type="text" name="buscarCategoria" class="form-control" placeholder="Por categoria" value="<?php echo $_GET['buscarCategoria'] ?>">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>

                                </th>
                                <th scope="col">
                                    <div class="input-group">
                                        <input type="text" name="buscarExistencia" class="form-control" placeholder="Por existencia" value="<?php echo $_GET['buscarExistencia'] ?>">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>

                                </th>
                            </tr>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Existencia</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $contador = 1;
                            while ($row = mysqli_fetch_row($resultSet)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row[0]; ?></th>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[3]; ?></td>
                                    <td><?php echo $row[5]; ?></td>
                                    <td><?php echo $row[6]; ?></td>
                                </tr>
                            <?php
                                $contador++;
                            }
                            mysqli_close($conexion);
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>