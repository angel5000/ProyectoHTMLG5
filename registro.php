<?php //autor: Alvarado Triana Alex
?>
 <!-- FILEPATH: /c:/Users/Alvarado/Desktop/EpicPage/Registro/index.html -->

<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="autor" content="ALVARADO TRIANA">
        <title>Registro</title>
        <link rel="stylesheet" href="styleregistro.css">
    </head>
    <body>

        <div class="logo"><img src="logo.png" alt="logo"></div>
        <div class= "atras"><a id = "regreso" href="index.php"> Inicio</a></div>
        
        
        <div id="titulo"><h1>Registro de usuario</h1></div>
    
        
        
        <div class="container">
            <form action="registro.php" method="POST">

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>

                <label for="UserName">User Name:</label>
                <input type="text" id="UserName" name="UserName" required>

                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" value="registerButton" class="boton" name="registerButton">Registrarse</button>
               
            </form>
        </div>
    </body>
    
</html>




<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   require_once '../PHPGRUPO5/plantillas/Conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$NombUsuario = $_POST['UserName'];
$HashedContrasena = $_POST['password'];
    $Activa = "A";

    $stmt = $pdo->prepare('CALL InsertarClienteUsuario(?, ?, ?, ?, ?, ? )');

$stmt->bindParam(1, $nombre, PDO::PARAM_STR);
$stmt->bindParam(2, $apellido, PDO::PARAM_STR);
$stmt->bindParam(3, $email , PDO::PARAM_STR);
$stmt->bindParam(4, $NombUsuario, PDO::PARAM_STR);
$stmt->bindParam(5, $HashedContrasena, PDO::PARAM_STR);
$stmt->bindParam(6, $Activa, PDO::PARAM_STR);
$stmt->execute();


echo"<script>

alert('Usuario Registrado, Proceda a Iniciar Sesion');
 
        window.location.href = 'Login.php';
       
</script> ";
}
?>
