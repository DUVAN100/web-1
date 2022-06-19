<?php
include ("../../connection/database.php"); 
$sql = "SELECT * FROM productos";
$result = mysqli_query($conexion, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4>Productos
                        <a href="insertarP.php" class="btn btn-primary float-right">Nuevo</a>
                    </h4>
                </div>
            </div>
            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>N-LISTA</th>
                                <th>Refrencia</th>
                                <th>Nombre</th>
                                <th>Stock</th>
                                <th>valor compra</th>
                                <th>valor venta</th>
                            </tr>
                        </thead>         
                        <body>
                        <?php
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['li']; ?></td>
                                    <td><?php echo $row['ref_produc']; ?></td>
                                    <td><?php echo $row['nom_produc']; ?></td>
                                    <td><?php echo $row['stock']; ?></td>
                                    <td><?php echo $row['valor_compra']; ?></td>
                                    <td><?php echo $row['valor_venta']; ?></td>
                                    <td><a href="editar.php?li=<?php echo $row['li'];?>"  class="btn btn-warning">Editar</a></td>
                                    <td><a href="eliminar.php?li=<?php echo $row['li']; ?>" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            <?php } ?>
                        </body>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>
</html>


