<?php 
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
sleep(1);
header('Location: registroUsu.html');
exit;


?>
