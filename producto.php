<?php
    include_once "barcode/src/BarcodeGenerator.php";
    include_once "barcode/src/BarcodeGeneratorHTML.php";
    use Picqer\Barcode\BarcodeGeneratorHTML;
    include_once "db_empresa.php";
    $con=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
    $query="SELECT id,nombre,precioVenta,categoria from productos where id=".$_GET['id'].";";
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($res);
    if($row){
?>
<style>
    table{
        width: 100%;
        border: 1px;
    }
    td,th{
        width: 25%;
        border: 1px solid #000;
    }
    thead{
        font-weight: bold;
        text-align: center;
    }
</style>
    <table cellspacing="0">
        <thead>
            <tr>
                <th colspan="4" >Productos</th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Precio de venta</th>
                <th>Categoria</th>
                <th>Codigo de barras</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['precioVenta'] ?></td>
                <td><?php echo $row['categoria'] ?></td>
                <td>
                <div style="margin-left: 20%;padding-top: 10px;padding-bottom: 10px;">
                <?php 
                $bar=new BarcodeGeneratorHTML();
                echo $bar->getBarcode($row['id'],$bar::TYPE_CODE_128);
                ?>
                </div>
                </td>
            </tr>
        </tbody>
    </table>
<?php
    }else{
        echo "No hay datos";
    }
?>