<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("plantillas/Conect.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$NombUsuario = $_POST['UserName'];
$HashedContrasena = $_POST['password'];
    $rol = 100;
    $Activa = "A";
$consulta="CALL InsertarClienteUsuario('$nombre', '$apellido', '$email', '$NombUsuario', '$Activa', '$HashedContrasena')";
$_resultado = mysqli_query($conexion, $consulta);



?>
