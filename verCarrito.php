<!doctype html>
<html lang="en">

<head>
    <title>Ver carrito</title>
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
                <form method="POST">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>
                                    <a href="carrito.php" class="btn btn-secondary">
                                        <i class="fa fa-backward"></i>
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listaProductos = unserialize($_COOKIE['producto']);
                            if(isset($_REQUEST['borrar'])){
                                unset($listaProductos[$_REQUEST['borrar']]);
                                setcookie('producto',serialize($listaProductos),time()+30000);
                            }
                            foreach ($listaProductos as $key => $value) {
                            ?>
                                <tr>
                                    <td><?php echo $value; ?></td>
                                    <td>
                                        <button type="submit" name="borrar" value="<?php echo $key; ?>" class="btn btn-danger borrar" >
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>


                    </table>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("form").submit(function () { 
                
                var res=confirm("¿Realmente desea borrar este producto del carrito?");
                if(res==true){
                    return;
                }else{
                    return false;
                }
            });
        });
    </script>
</body>

</html>