<?php

include('../../connection/database.php');
$identification = $_POST['identification'];
$USUARIO = $_POST['email'];
$PASSWORD = $_POST['password'];


$consulta = "SELECT* FROM admins where cedula= '$identification' and gmail=  '$USUARIO' and pasword ='$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:main.php");
} else {
    include("index.php");
?>
    <div class="container">
        <h1 class="text-center">ERROR DE AUTENTIFICACION</h1>
        <p class="text-center">Usuario y/o Incorrecto</p>
    </div>
<?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>