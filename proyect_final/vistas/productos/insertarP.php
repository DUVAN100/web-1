<?php
include ("../../connection/database.php"); 
if(isset($_POST['ref_produc'])){
    $li = 0;
    $ref_produc = $_POST['ref_produc'];
    $nom_produc = $_POST['nom_produc'];
    $stock = $_POST['stock'];
    $valor_compra = $_POST['valor_compra'];
    $valor_venta = $_POST['valor_venta'];
    $sql ="INSERT INTO productos ( li, ref_produc, nom_produc, stock, valor_compra, valor_venta) values ('$li', '$ref_produc', '$nom_produc', '$stock', '$valor_compra', '$valor_venta')";
    $result = mysqli_query($conexion, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO PRODUCTO</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Nuevo Producto</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="insertarP.php" autocomplete="off">
                    <div class="col-md-8">
                            <label for="ref_produc" class="form-label">Referecia del producto</label>
                            <input type="text" id="ref_produc" name="ref_produc" class="form-control" required>
                        </div>
                        <div class="col-md-8">
                            <label for="nom_produc" class="form-label">Nombre del producto</label>
                            <input type="text" id="nom_produc" name="nom_produc" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" id="stock" name="stock" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="valor_compra" class="form-label">Valor compra</label>
                            <input type="text" id="valor_compra" name="valor_compra" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="valor_venta" class="form-label">Valor venta</label>
                            <input type="text" id="valor_venta" name="valor_venta" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="productos.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" href="productos.php" name="Guardar">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>