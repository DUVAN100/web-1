<?php
include ("../../connection/database.php"); 

$nombre = $_POST('nombre');
$sSQL=("DELETE  FROM clientes WHERE nombre = $nombre");
$result = mysqli_query($conexion, $sSQL);
?>

