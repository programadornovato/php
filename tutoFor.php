<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tutorial del For</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <?php
                for ($i = 9; $i >= -9; $i--) {
                    if($i==0){
                        echo "No es posible dividir 9/0";
                        continue;
                    }
                    ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo "9/$i=".(9/$i); ?>
                    </div>
                <?php
                }
                echo "el valor de i es $i";
                ?>
            </div>
        </div>
    </div>
</body>

</html>