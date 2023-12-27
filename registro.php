<?php 
include ("plantillas/Conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $NombUsuario = $_POST['UserName'];
    $HashedContrasena = $_POST['password'];
        $rol = 100;
        $Activa = "A";
$sql= $conexion -> query ("CALL InsertarClienteUsuario($nombre, $apellido, $email, $rol, $NombUsuario, $Activa, $HashedContrasena");
       


?>
