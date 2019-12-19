<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-4 offset-4 alert-primary">
                <?php
                if (isset($_REQUEST['login'])) {
                    session_start();
                    $user = $_REQUEST['user'] ?? '';
                    $pass = $_REQUEST['pass'] ?? '';
                    include_once "db_empresa.php";
                    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                    $sql = "SELECT id,user,pass from usuarios where user='$user' and pass='$pass'; ";
                    $resultSet = mysqli_query($conexion, $sql);
                    $row = mysqli_fetch_assoc($resultSet);
                    if ($row) {
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['user'] = $row['user'];
                        $_SESSION['activo'] = '1';
                        header("Location: index.php");
                    } else {
                ?>
                        <div class="alert alert-danger" role="alert">
                            <img src="images/no-no.gif" width="150px"><strong>Ha,Ha,Ha You dont say de magic word!!!</strong>
                        </div>
                <?php
                    }
                }
                ?>
                <form method="post">
                    <div class="form-group">
                        <label for="">User</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Pass</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
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