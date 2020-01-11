<?php
include_once "db_empresa.php";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
$query = "SELECT nombre,precioVenta,categoria from productos where id='" . $_GET['id'] . "'; ";
$res = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($res);
if ($row) {
?>
    <style>
        table {
            border: 1;
            width: 100%;
        }

        td {
            width: 25%;
            border: 1px solid #000;
        }

        thead {
            font-weight: bold;
        }
    </style>
    <table cellspacing="0">
        <thead>
            <tr>
                <td colspan="3">Caracteristicas del producto</td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Categoria</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['precioVenta']; ?></td>
                <td><?php echo $row['categoria']; ?></td>
            </tr>
        </tbody>
    </table>
<?php
} else {
    echo "No hay productos";
}
