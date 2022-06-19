<?php
include ("../../connection/database.php"); 
 
$sql="SELECT * from compras";
$result = mysqli_query($conexion, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4>Compras
                        <a href="insertarCo.php" class="btn btn-primary float-right">Nuevo</a>
                    </h4>
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>N_F</th>
                                <th>cliente</th>
                                <th>telefono_cliente</th>
                                <th>Gmail</th>
                                <th>valor compra</th>
                                <th>Cantidad productos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($result as $row){
                            ?>
                                <tr>
                                    <td><?php echo $row['nro_compra']; ?></td>
                                    <td><?php echo $row['cliente']; ?></td>
                                    <td><?php echo $row['telefono_cliente']; ?></td>
                                    <td><?php echo $row['gmail_cliente']; ?></td>
                                    <td><?php echo $row['valor_total']; ?></td>
                                    <td><?php echo $row['cantidad_product']; ?></td>
                                    <td><a href="editarCo.php?id=<?php echo $row['nro_compra']; ?>" class="btn btn-warning">Editar</a></td>
                                    <td><a href="eliminarCo.php?id=<?php echo $row['nro_compra']; ?>" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>

</html>