
<?php
include ("../../connection/database.php"); 
if(isset($_GET['li'])){
    $id = $_GET['li'];
    $sql ="DELETE FROM `productos` WHERE li = $id";
    $result = mysqli_query($conexion, $sql);
}
?>
