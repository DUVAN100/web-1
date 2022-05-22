<?php

require '../../config/database.php';
$db = new Database();
$con = $db->conectar();
    $id = $_POST['identificacion'];
    $nombres = $_POST['nombre'];
    $celular = $_POST['celular'];
    $gmail = $_POST['gmail'];
    $Fecha = $_POST['Fecha'];
    $query = $con->prepare("INSERT INTO clientes(id, nombres, celular, gmail, activo) 
                            values (:cod, :descr, :inv, :sto, :fech)");
    $resultado = $query->execute(array('cod' => $id, 'descr' => $nombres, 'inv' => $celular, 'sto' => $gmail, 'fech'=>$fecha));



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
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">
                            <label for="identificacion" class="form-label">Identificacion</label>
                            <br>
                            <input type="text" id="identificacion" name="identificacion" class="form-control" required autofocus>
                            <br>
                            <label for="nombre" class="form-label">Nombre</label>
                            <br>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                            <br>
                            <label for="celular" class="form-label">Celullar</label>
                            <br>
                            <input type="text" id="Celular" name="celular" class="form-control">
                            <br>
                            <label for="gamil" class="form-label">Gmail</label>
                            <br>
                            <input type="text" id="Gmail" name="gmail" class="form-control">
                            <br>
                            <label for="Fecha" class="form-label">Fecha Nacimiento</label>
                            <br>
                            <input type="date" id="Fechar" name="Fecha" class="form-control">
                            <br>
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
