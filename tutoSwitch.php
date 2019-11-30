<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutotial Switch</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label>Selecciona un numero</label>
                        <select class="form-control" name="numero">
                            <option>Selecciona un numero</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <?php opcion(); ?>
        </div>
    </div>
</body>

</html>
<?php
function opcion()
{
    if (isset($_GET['enviar'])) {
        $numero = $_GET['numero'] ?? 0;
        switch ($numero) {
            case 1:
                echo "El numero seleccionado fue el 1";
                break;
            case 2:
                echo "El numero seleccionado fue el 2";
                break;
            case 3:
                echo "El numero seleccionado fue el 3";
                break;
            case 4:
                echo "El numero seleccionado fue el 4";
                break;
            case 5:
                echo "El numero seleccionado fue el 5";
                break;
            default:
                echo "Humano debiste seleccionar un numero";
                break;
        }
    }
}
?>