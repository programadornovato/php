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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#tablaAutos').DataTable();
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
    $sql = "SELECT `marca`, `modelo`, `anio` FROM `autos`";
    $resultSet = mysqli_query($conexion, $sql);
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped" id="tablaAutos">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Model</th>
                            <th scope="col">Año</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $contador = 1;
                        while ($row = mysqli_fetch_row($resultSet)) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $contador; ?></th>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                            </tr>
                        <?php
                            $contador++;
                        }
                        mysqli_close($conexion);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>