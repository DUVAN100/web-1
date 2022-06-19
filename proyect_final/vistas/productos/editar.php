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
    <title>editar Producto</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">+
                    <h4>Nuevos registro</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" action="editar.php" method="$_POST" autocomplete="off">
                    <div class="col-md-8">
                            <label for="li" class="form-label">#</label>
                            <input type="text" id="li" name="li" class="form-control " value="<?php echo $li?>" required>
                        </div>
                    <div class="col-md-8">
                            <label for="ref_produc" class="form-label">Referencia</label>
                            <input type="text" id="ref_produc" name="ref_produc" class="form-control" value="<?php echo $ref_produc ?>" required>
                        </div>
                        <div class="col-md-8">
                            <label for="nom_produc" class="form-label">Nombre</label>
                            <input type="text" id="nom_produc" name="nom_produc" class="form-control" value="<?php echo $nom_produc ?>" required>
                        </div>
                </div>
                        <div class="col-md-8">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="text" id="stock" name="stock" class="form-control" value="<?php echo $stock ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="valor_compra" class="form-label">Valor compra</label>
                            <input type="valor_compra" id="valor_compra" name="valor_compra" value="<?php echo $valor_compra ?>" class="form-control">
                        </div>  
                        <div class="col-md-4">
                            <label for="valor_venta" class="form-label">Valor venta</label>
                            <input type="valor_venta" id="valor_venta" name="valor_venta" value="<?php echo $valor_venta ?>" class="form-control">
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