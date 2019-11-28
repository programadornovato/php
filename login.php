<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <form method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

            <?php
                if(isset($_POST['enviar'])){
                    $email=$_POST['email'] ?? '';
                    $pass=$_POST['pass'] ?? '';
                    if($email=='info@programadornovato.com' && $pass=='123456' ){
                        ?>
                        <div class="alert alert-primary" role="alert">Simon chavo ya entraste</div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-danger" role="alert">Nel no pasas</div>
                        <?php
                    }
                }
            ?>
            </div>
        </div>
    </div>
</body>

</html>