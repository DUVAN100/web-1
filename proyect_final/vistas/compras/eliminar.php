
<?php
include ("../../connection/database.php"); 
if(isset($_GET['nro_compra'])){
    $id = $_GET['nro_compra'];
    $sql ="DELETE FROM `compras` WHERE nro_compra = $nro_compra";
    $result = mysqli_query($conexion, $sql);
}
    ?>
