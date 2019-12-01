<!doctype html>
<html lang="en">

<head>
    <title>Tutorial Parametros</title>
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
                <div class="alert alert-primary" role="alert">
                    <?php
                    function incrementar(&$num,&$num2)
                    {
                        $otra=10;
                        $num=100+$otra;
                        $num2=80;
                        return $num;
                    }
                    $variable=5;
                    $variable2=5;
                    echo "incremento=".incrementar($variable,$variable2)."<br>";
                    echo "variable=$variable  <br> variable2=$variable2";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>