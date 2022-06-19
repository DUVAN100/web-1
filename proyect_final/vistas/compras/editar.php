<?php
$nro_compra = trim($_POSt['nro_compra']);
$cliente = trim($_GET['cliente']);
$telefono_cliente = trim($_POST['telefono_cliente']);
$gmail_cliente = trim($_POST['gmail_cliente']);
$valor_total = trim($_POST['valor_total']);
$cantidad_product = trim($_POST['cantidad_product']);

$query = $con->prepare("UPDATE compras SET nro_compra = ?, cliente = ?, telefono_cliente = ?, gmail_cliente = ?, valor_total = ?, cantidad_product = ? WHERE nro_compra = ?");
$resultado = $query->execute(array($nro_compra, $cliente, $telefono_cliente, $gmail_cliente, $valor_total, $cantidad_product));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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