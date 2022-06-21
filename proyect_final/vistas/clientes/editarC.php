<?php
include ("../../connection/database.php"); 
if (isset($_GET['li'])) {
    $li = $_GET['li'];
    $id = $li;
    $query ="SELECT * FROM productos WHERE li = '$li'";
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)==1){ 
            $user =mysqli_fetch_assoc($result);
			$ref_produc = $user['ref_produc']; 
			$nom_produc = $user['nom_produc'];
			$stock = $user['stock'];
            $valor_compra = $user['valor_compra'];
			$valor_venta = $user['valor_venta'];
	}
}

if (isset($_POST['registro'])) {
    $li = $_GET['li'];
    $ref_produc = $_POST['ref_produc']; 
	$nom_produc = $_POST['nom_produc'];
	$stock = $_POST['stock'];
    $valor_compra = $_POST['valor_compra'];
    $valor_venta = $_POST['valor_venta'];
    $query = "UPDATE productos SET   ref_produc='$ref_produc', nom_produc='$nom_produc', stock='$stock', valor_compra='$valor_compra', valor_venta='$valor_venta' WHERE li ='$li'";
    if(mysqli_query($conexion, $query)){
        header('Location: productos.php');
    }else{
        print "Error al editar el producto";
    }
    
}

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
                    <h4>Nuevos registro</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">
                        <input type="hidden" id="id" name="id" value="">
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Código</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" value="" required autofocus>
                        </div>

                        <div class="col-md-8">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" value="" required>
                        </div>

                        <h5>Inventario</h5>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="inventariable" name="inventariable" value="1">
                                <label for="inventariable" class="form-check-label">Usa inventario</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="stock" class="form-label">Existencias</label>
                            <input type="number" id="stock" name="stock" value="" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>