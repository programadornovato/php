<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial de operadores matematicos</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label>Numero 1</label>
                        <input type="text" class="form-control" name="num1" value="<?php echo $_GET['num1']??0; ?>">
                    </div>
                    <div class="form-group">
                        <label>Numero 2</label>
                        <input type="text" class="form-control" name="num2" value="<?php echo $_GET['num2']??0; ?>">
                    </div>
                    <div class="form-group">
                        <label>Operador</label>
                        <?php $operador=$_GET['operador']??''; ?>
                        <select name="operador" class="form-control">
                            <option value="" <?php if($operador=='')echo "selected='selected'"; ?> >Seleccione un operador</option>
                            <option value="suma"<?php if($operador=='suma')echo "selected='selected'"; ?>>Suma</option>
                            <option value="resta"<?php if($operador=='resta')echo "selected='selected'"; ?>>Resta</option>
                            <option value="multiplicacion"<?php if($operador=='multiplicacion')echo "selected='selected'"; ?>>Multiplicacion</option>
                            <option value="divicion"<?php if($operador=='divicion')echo "selected='selected'"; ?>>Divicion</option>
                            <option value="modulo"<?php if($operador=='modulo')echo "selected='selected'"; ?>>Modulo</option>
                        </select>
                    </div>
                    <button type="submit" name="enviar" value="enviar" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                    <?php
                    $botonEnviar=$_GET['enviar']??'';
                    if($botonEnviar=='enviar'){
                        $num1=$_GET['num1']??0;
                        $num2=$_GET['num2']??0;
                        if($operador=='suma'){
                            echo 'El resultado de la operacion es: '.($num1+$num2);
                        }
                        if($operador=='resta'){
                            echo 'El resultado de la operacion es: '.($num1-$num2);
                        }
                        if($operador=='multiplicacion'){
                            echo 'El resultado de la operacion es: '.($num1*$num2);
                        }
                        if($operador=='divicion'){
                            echo 'El resultado de la operacion es: '.($num1/$num2);
                        }
                        if($operador=='modulo'){
                            echo 'El resultado de la operacion es: '.($num1%$num2);
                        }
                        if($operador==''){
                            echo 'Humano, debes de seleccionar un operador matematico ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>