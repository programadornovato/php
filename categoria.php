<?php
    include_once "db_empresa.php";
    $con=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
    $query="SELECT categoria as label,categoria as value FROM productos GROUP BY categoria";
    $res=mysqli_query($con,$query);
    $arrayJson=array();
    while ( $row=mysqli_fetch_assoc($res) ){
        $arrayJson[]=$row;
    }
    echo json_encode($arrayJson);
?>