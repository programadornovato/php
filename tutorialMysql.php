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
    $where = " where 1=1 ";
    $order = "";
    if (empty($_GET['buscarNombre']) == false) {
        $where = $where . " and nombre like'%" . $_GET['buscarNombre'] . "%' ";
    }
    if (empty($_GET['buscarCategoria']) == false) {
        $where = $where . " and categoria='" . $_GET['buscarCategoria'] . "' ";
    }
    if (empty($_GET['buscarExistencia']) == false) {
        $where = $where . " and unidadesEnExistencia='" . $_GET['buscarExistencia'] . "' ";
    }
    if (isset($_GET['columna'])) {
        $order = " order by  " . $_GET['columna'] . " " . $_GET['tipo'];
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">pn</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="tutorialMysql.php">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="listaUser.php">Usuarios</a>
                            </li>
                        </ul>
                    </div>
                    <form class="form-inline" action="logout.php" >
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
                    </form>
                </nav>
                <?php
                if (isset($_GET['idBorrar'])) {
                    $sqlBorrar = "DELETE FROM productos WHERE id='" . $_GET['idBorrar'] . "';";
                    $resultado = mysqli_query($conexion, $sqlBorrar);
                    if ($resultado) {
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Registro borrado con exito</strong>
                        </div>
                    <?php
                        } else {
                            ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Error al borrar el registro <?php echo mysqli_error($conexion); ?></strong>
                        </div>
                <?php

                    }
                }
                $sqlCuenta="SELECT COUNT(*) as cantidad FROM `productos` $where; ";
                $resultSetCuenta=mysqli_query($conexion,$sqlCuenta);
                $rowCuenta=mysqli_fetch_assoc($resultSetCuenta);
                $totalRegistros=$rowCuenta['cantidad'];
                $elementosPorPagina=10;

                $totalPaginas= ceil($totalRegistros/$elementosPorPagina);

                $paginaSeleccionada=isset($_GET['pagina'])?$_GET['pagina']:false;

                if($paginaSeleccionada==false){
                    $inicioLimite=0;
                    $paginaSeleccionada=1;
                }
                else{
                    $inicioLimite=($paginaSeleccionada-1) * $elementosPorPagina;
                }

                $limit=" LIMIT  $inicioLimite,$elementosPorPagina ";
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
                $order
                $limit
                ;
                ";
                $resultSet = mysqli_query($conexion, $sql);

                ?>
                <form>
                    <table class="table table-striped" id="tablaAutos">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    <div class="input-group">
                                        <input type="text" name="buscarNombre" class="form-control" placeholder="Por nombre" value="<?php echo isset($_GET['buscarNombre']) ? $_GET['buscarNombre'] : ''; ?>">
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
                                        <input type="text" name="buscarCategoria" class="form-control" placeholder="Por categoria" value="<?php echo isset($_GET['buscarCategoria']) ? $_GET['buscarCategoria'] : ''; ?>">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>

                                </th>
                                <th scope="col">
                                    <div class="input-group">
                                        <input type="text" name="buscarExistencia" class="form-control" placeholder="Por existencia" value="<?php echo isset($_GET['buscarExistencia']) ? $_GET['buscarExistencia'] : ''; ?>">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <a href="crear.php" class="btn btn-secondary">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre
                                <?php
                                    $columna=isset($_GET['columna'])?$_GET['columna']:null;
                                    $tipo=isset($_GET['tipo'])?$_GET['tipo']:null;
                                    ?>
                                <?php ordenador($columna,'nombre',$tipo); ?>
                                </th>
                                <th scope="col" style="min-width: 120px;">Precio
                                <?php ordenador($columna,'precioVenta',$tipo); ?>
                                </th>
                                <th scope="col">Categoria
                                <?php ordenador($columna,'categoria',$tipo); ?>
                                </th>
                                <th scope="col">Existencia
                                <?php ordenador($columna,'unidadesEnExistencia',$tipo); ?>
                                </th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($row = mysqli_fetch_array($resultSet, MYSQLI_ASSOC)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['precioVenta']; ?></td>
                                    <td><?php echo $row['categoria']; ?></td>
                                    <td><?php echo $row['unidadesEnExistencia']; ?></td>
                                    <td>
                                        <a href="editar.php?id=<?php echo $row['id'] ?>"><i class="fa fa-edit mr-2"></i></a>
                                        <a href="tutorialMysql.php?idBorrar=<?php echo $row['id'] ?>" class="borrar"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }

                            mysqli_close($conexion);
                            ?>
                        </tbody>
                    </table>
                    <?php if($totalPaginas>0): ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php if($paginaSeleccionada!=1): ?>
                            <li class="page-item"><a class="page-link" href="tutorialMysql.php?pagina=<?php echo ($paginaSeleccionada-1) ?>">Previous</a></li>
                            <?php endif; ?>

                            <?php for($i=1;$i<=$totalPaginas;$i++): $activo=($paginaSeleccionada==$i)?" active ":" "; ?>
                                <li class="page-item <?php echo $activo; ?>"><a class="page-link" href="tutorialMysql.php?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
                            <?php endfor; ?>

                            <?php if($paginaSeleccionada!=$totalPaginas): ?>
                                <li class="page-item"><a class="page-link" href="tutorialMysql.php?pagina=<?php echo ($paginaSeleccionada+1) ?>">Next</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('.borrar').click(function(evento) {
                evento.preventDefault();
                var resultado = confirm('¡¡¡Esclavo!!!!¿Estas seguro que quieres borrar este registro?????');
                if (resultado == true) {
                    var link = $(this).attr("href");
                    window.location = link;
                }
            });
        });
    </script>
    <?php
    function ordenador($columnaSeleccionada,$columnaValor,$tipoOrdenamiento)
    {
        ?>
        <div class="float-right">
            <?php if (isset($columnaSeleccionada) && $columnaSeleccionada == $columnaValor && $tipoOrdenamiento == 'asc') : ?>
                <i class="fa fa-arrow-up text-secondary"></i>
            <?php else : ?>
                <a href="tutorialMysql.php?columna=<?php echo $columnaValor; ?>&tipo=asc"><i class="fa fa-arrow-up"></i></a>
            <?php endif; ?>

            <?php if (isset($columnaSeleccionada) && $columnaSeleccionada == $columnaValor && $tipoOrdenamiento == 'desc') : ?>
                <i class="fa fa-arrow-down text-secondary"></i>
            <?php else : ?>
                <a href="tutorialMysql.php?columna=<?php echo $columnaValor; ?>&tipo=desc"><i class="fa fa-arrow-down"></i></a>
            <?php endif; ?>
        </div>

    <?php
    }
    ?>
</body>

</html>