<!doctype html>
<html lang="en">

<head>
    <title>Lee Imagen</title>
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
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once "db_empresa.php";
                        $con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                        $query = "SELECT nombre,tipo,imagen FROM imagenes;";
                        $res = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <tr>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['tipo']; ?></td>
                                <td>
                                    <img width="100" src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">
                                    
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
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