<?php
include ("../../connection/database.php"); 
if(isset($_POST['Guardar'])){
    $cedula  = $_POST['cedula'];
    $gmail = $_POST['gmail'];
    $pasword = $_POST['pasword'];
    $sql ="INSERT INTO admins(cedula, gmail, pasword) values ('$cedula', '$gmail', '$Password')";
    if(mysqli_query($conexion, $sql)){
        header('Location: index.php ');
    }else{
        echo "ERROR";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
<h1 class="text-center mt-4">SISTEMA SING IN</h1>
    <form action="singin.php" method="$_POST" autocomplete="off">
        <p>
            identification
            <input type="number" placeholder="Type your identification" name="cedula" class="form-control"/>
        </p>
        <p>
            User or Email 
            <input type="text" placeholder="Tpe your e_mail" name="gmail" class="form-control"/>
        </p>
        <p>
            Password
            <input type="password" placeholder="Type your password" name="pasword" class="form-control"/>
            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="Guardar">Guardar</button>
            </div>
        </form>
    </form>
</body>
</html>