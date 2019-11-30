<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tutorial While</title>
</head>

<body>
    <!--
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $num = 1;
                //repetir miestras num(1) menor o igual a 5
                while ($num <= 5) {
                    ?>
                    <div class="alert alert-primary" role="alert">
                        <strong><?php echo $num; ?></strong>
                    </div>
                <?php
                    $num++;
                }
                ?>
                <div class="alert alert-primary" role="alert">
                    <strong><?php echo "finalmente " . $num; ?></strong>
                </div>

            </div>
        </div>
    </div>
            -->


    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $num = 7;
                do {
                    ?>
                    <div class="alert alert-primary" role="alert">
                        <strong><?php echo $num; ?></strong>
                    </div>
                <?php
                    $num++;
                } while ($num <= 5)
                    ?>
                <div class="alert alert-primary" role="alert">
                    <strong><?php echo "finalmente " . $num; ?></strong>
                </div>

            </div>
        </div>
    </div>

</body>

</html>