<!doctype html>
<html lang="en">
  <head>
    <title>Tutorial Mysql</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php
          $db_host="localhost";
          $db_user="eugenio";
          $db_pass="123456";
          $db_database="empresa";
          $conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
          //var_dump($conexion);
          if($conexion==false){
              die("Error de conexion");
          }
          $sql = "SELECT `marca`, `modelo`, `anio` FROM `autos`";
          $resultSet=mysqli_query($conexion,$sql);
          $row=mysqli_fetch_row($resultSet);
          var_dump($row);
          echo $row[0]."<br>";
          echo $row[1]."<br>";
          echo $row[2]."<br>";
          ?>
  </body>
</html>