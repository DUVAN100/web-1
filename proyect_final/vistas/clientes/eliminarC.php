<?php
include ("../../connection/database.php"); 

$nombre = $_POST('nombre');
$sSQL=("DELETE  FROM clientes WHERE nombre = $nombre");
$result = mysqli_query($conexion, $sSQL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="./clietnes.php">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>