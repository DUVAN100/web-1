<?php

$server = 'localhost';
$user = 'root';
$contrasena = '';
$baseDatos = 'soluciones zz';


$conexion = mysqli_connect($server, $user, $contrasena, $baseDatos);

if (!$conexion) {
    die("No hay coneccion a la base de datos: " . mysqli_connect_error());
}