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
        $where=$where." and nombre like'%".$_GET['buscarNombre']."%' ";
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
                                        <input type="text" name="buscarNombre" class="form-control" placeholder="Por nombre" value="<?php echo isset($_GET['buscarNombre'])?$_GET['buscarNombre']:''; ?>" >
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
                                        <input type="text" name="buscarCategoria" class="form-control" placeholder="Por categoria" value="<?php echo isset($_GET['buscarCategoria'])?$_GET['buscarCategoria']:''; ?>">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>

                                </th>
                                <th scope="col">
                                    <div class="input-group">
                                        <input type="text" name="buscarExistencia" class="form-control" placeholder="Por existencia" value="<?php echo isset($_GET['buscarExistencia'])?$_GET['buscarExistencia']:''; ?>">
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
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($row = mysqli_fetch_array($resultSet,MYSQLI_ASSOC)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['precioVenta']; ?></td>
                                    <td><?php echo $row['categoria']; ?></td>
                                    <td><?php echo $row['unidadesEnExistencia']; ?></td>
                                    <td>
                                        <a href="editar.php?id=<?php echo $row['id'] ?>"><i class="fa fa-edit mr-2"></i></a>
                                        <i class="fa fa-trash text-danger"></i>
                                    </td>
                                </tr>
                            <?php
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