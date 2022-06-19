<?php
include('../../connection/database.php');
//validamos si el post haya sido enviado
if (!empty($_POST['cliente'])) {
  $nro_compra  = 0;
  $cliente = $_POST['cliente'];
  $telefono_cliente = $_POST['telefono_cliente'];
  $gmail_cliente = $_POST['gmail_cliente'];
  $valor_total = $_POST['valor_total'];
  $cantidad_product	=$_POST['cantidad_product'];
  //creamos el script sql, los campos tipo varchar en base de datos van entre comilla simple
  $query = "INSERT INTO compras(nro_compra, cliente, telefono_cliente, gmail_cliente, valor_total, cantidad_product) values ( '$nro_compra' , '$cliente', '$telefono_cliente', '$gmail_cliente', '$valor_total', '$cantidad_product')";
  //ejecutamos el script utilizando la coneccion de la clase database como primer parametro
  $resultado = mysqli_query($conexion, $query);
  // si el resultado obtenido de el insert es mayor a cero nos lleva a la pagina principal 
  if($resultado>0){
    header("location:compras.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NUEVA_COMPRA</title>
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
          <h4>Nueva Compra</h4>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <form class="row g-3" method="POST" action="insertarCo.php" autocomplete="false">
            <label for="cliente" class="form-label">Nombre</label>
            <br>
            <input type="text" id="cliente" name="cliente" class="form-control" required>
            <br>
            <label for="telefono_cliente" class="form-label">telefono cliente</label>
            <br>
            <input type="text" id="telefono_cliente" name="telefono_cliente" class="form-control" required>
            <br>
            <label for="gmail_cliente" class="form-label">Gmail Cliente</label>
            <br>
            <input type="email" id="gmail_cliente" name="gmail_cliente" class="form-control" required>
            <br>
            <label for="valor_total" class="form-label">valor Compra </label>
            <br>
            <input type="text" id="valor_total" name="valor_total" class="form-control" required>
            <br>
            <label for="cantidad_product" class="form-label">Cantidad Productos</label>
            <br>
            <input type="text" id="cantidad_product" name="cantidad_product" class="form-control" required>
            <br>
            <div class="col-md-12">
              <a class="btn btn-secondary" href="compras.php">Regresar</a>
              <input type="submit" value="Guardar" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>

</html>