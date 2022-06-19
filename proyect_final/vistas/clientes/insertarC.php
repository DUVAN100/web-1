<?php
include('../../connection/database.php');
//validamos si el post haya sido enviado
if (!empty($_POST['nombre'])) {
  $id_cliente = 0;
  $nom_cliente = $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $email = $_POST['gamil'];
  //creamos el script sql, los campos tipo varchar en base de datos van entre comilla simple
  $query = "INSERT INTO clientes(id, nombre, direccion, telefono, gmail) values ( $id_cliente, '$nom_cliente', '$direccion', '$telefono', '$email')";
  //ejecutamos el script utilizando la coneccion de la clase database como primer parametro
  $resultado = mysqli_query($conexion, $query);
  // si el resultado obtenido de el insert es mayor a cero nos lleva a la pagina principal 
  if($resultado>0){
    header("location:clietnes.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NUEVO_CLIENTE</title>
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
          <h4>Nuevo cliente</h4>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <form class="row g-3" method="POST" action="insertarC.php" autocomplete="false">
            <label for="Nom_cliente" class="form-label">Nombre</label>
            <br>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
            <br>
            <label for="direccion" class="form-label">Direccion</label>
            <br>
            <input type="text" id="direccion" name="direccion" class="form-control" required>
            <br>
            <label for="telefono" class="form-label">Telefono</label>
            <br>
            <input type="number" id="telefono" name="telefono" class="form-control" required>
            <br>
            <label for="gamil" class="form-label">Email </label>
            <br>
            <input type="email" id="gamil" name="gamil" class="form-control" required>
            <br>
            <div class="col-md-12">
              <a class="btn btn-secondary" href="clietnes.php">Regresar</a>
              <input type="submit" value="Guardar" href="clientes.php" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>

</html>