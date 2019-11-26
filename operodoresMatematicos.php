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
                        <input type="text" class="form-control" name="num1">
                    </div>
                    <div class="form-group">
                        <label>Numero 2</label>
                        <input type="text" class="form-control" name="num2">
                    </div>
                    <div class="form-group">
                        <label>Operador</label>
                        <select name="operador" class="form-control">
                            <option value="">Seleccione un operador</option>
                            <option value="suma">Suma</option>
                            <option value="resta">Resta</option>
                            <option value="multiplicacion">Multiplicacion</option>
                            <option value="divicion">Divicion</option>
                            <option value="modulo">Modulo</option>
                        </select>
                    </div>
                    <button type="submit" name="enviar" value="enviar" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                    El resultado de la operacion es: 
                </div>
            </div>
        </div>
    </div>
</body>

</html>