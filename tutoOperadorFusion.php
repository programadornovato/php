<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Operador de fusion</title>
</head>

<body>
    <form>
        <div class="container mt-2">
            <div class="alert alert-primary" role="alert">
                ¡¡¡Humano da click en tu edad!!!
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" name="edad" class="btn btn-secondary" value="16">16</button>
                <button type="submit" name="edad" class="btn btn-secondary" value="17">17</button>
                <button type="submit" name="edad" class="btn btn-secondary" value="18">18</button>
                <button type="submit" name="edad" class="btn btn-secondary" value="19">19</button>
            </div>
        </div>
    </form>
    <?php
    /*
    if(isset($_GET["edad"])==true){
        if($_GET["edad"]!=null){
            $edad=$_GET["edad"];
        }
    }else{
        $edad=0;
    }
    */
    $edad=$_GET["edad"] ?? 0 ;
    if($edad==0){
        echo "¡¡¡Humano tonto, selecciona tu edad!!!";
    }
    else if($edad>0 && $edad<18){
        echo "Eres un humano menor de edad";
    }
    else if($edad>=18){
        echo "Eres un humano mayor de edad";
    }


    ?>

</body>

</html>