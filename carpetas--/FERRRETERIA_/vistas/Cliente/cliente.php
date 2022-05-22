
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
    <title>CLIENTE</title>
</head>


<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4>cliente
                        <a href="nuevo.php" class="btn btn-primary float-Right">Nuevo</a>
                        <a href="eliminar.php" class="btn btn-primary float-Right">Eliminar</a>
                        <a href="editar.php" class="btn btn-primary float-Right">Edita</a>
                    </h4>
                </div>
            </div>
            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Identificacion</th>
                                <th>Nombres</th>
                                <th>numero telefonico</th>
                                <th>Gmail</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>
</html>