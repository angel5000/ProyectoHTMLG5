<?php
//Rivas Vélez José Roberto
 session_start();

?>
<?php
if(isset($_SESSION['SESIONADM'])&&$_SESSION['SESIONADM']==0){

    ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
    <meta name="autor" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LoginAdmin</title>
  <link href="EstiloLogin.css" rel="stylesheet" >
<style>
body{

background-color: black;

background: linear-gradient(rgb(65, 64, 64), rgba(218, 216, 98, 0.76));
  
}
.panlogin{

    background: linear-gradient(rgb(0, 0, 0), rgba(115, 216, 140, 0.514));
      
   
}

</style>
    </head>
<body>

    <form  method="post">
    <div class="panlogin" >
        
        <div class="logo" >
            <figure> <img src="imagenes/logo.png" alt="Logo" width="80" height="65"> </figure>
            </div>
        <h4 style="font-family: 'Times New Roman', Times, serif; color: azure;">Sesion de Administradores</h4> 
        <div class="textlog" >

            <h4 style="font-family: 'Times New Roman', Times, serif; color: azure;">Inicia Sesion</h4> 
       
        </div>
        <div class="dvtext">

            <input type="text" id="camplog" name="txtusuario" placeholder="Ingrese su Usuario" require> 
        </div>
        <div class="dvtext2">

            <input type="password" id="camplog2" name="txtcontra" placeholder="Ingrese su contraseña" require> 
        </div>
        <div class="dvboton">


            <input type="submit" id="btlog"  value="Ingresar"> 
        
        </div>
        
    </form>
    </div>

    
    <textarea id="h-captcha-response-0gw74a5cvacg" name="h-captcha-response" style="display: none;"></textarea>




</body> 

    
    </html>

  


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar valores del formulario
    $usuario = $_POST["txtusuario"];
    $contrasenaIngresada = $_POST["txtcontra"];
    $resultado = 0;
    $rstid=0;

    // Ahora puedes utilizar $usuario y $contrasenaIngresada en tu lógica
    echo "Usuario: " . $usuario . "<br>";
    echo "Contraseña Ingresada: " . $contrasenaIngresada;




   require_once '../PHPGRUPO5/plantillas/Conexion.php';
   $stmt = $pdo->prepare('CALL LoginAdmin(?, ?, @pResultado, @ids,@nombres,@apellidos)');
$stmt->bindParam(1, $usuario, PDO::PARAM_STR);
$stmt->bindParam(2, $contrasenaIngresada, PDO::PARAM_STR);
$stmt->execute();

// Obtener el valor del parámetro de salida
$stmt->closeCursor(); // Cerrar el conjunto de resultados anterior

$stmt = $pdo->query("SELECT @pResultado AS Resultado, @ids AS id,@nombres AS Nombres,@apellidos AS Apellidos");
$resultados = $stmt->fetch(PDO::FETCH_ASSOC);
$resultado = $resultados['Resultado'];
$idUsuario = $resultados['id'];
$_SESSION['Nombres']= $resultados['Nombres']." ".$resultados['Apellidos'];
// Llamada al segundo procedimiento almacenado
$stmt = $pdo->prepare("CALL ObtenerRolADMIN(:idUsuario, @pRol)");
$stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
$stmt->execute();
$stmt->closeCursor();


// Obtener el valor del parámetro de salida del segundo procedimiento almacenado
$stmt = $pdo->query("SELECT @pRol as pRol");
$rstid = $stmt->fetch(PDO::FETCH_ASSOC);
$pRol = $rstid['pRol'];
$_SESSION['RolUsuarioadm']= $pRol;

  
if($resultado==1&&isset($_SESSION['RolUsuarioadm'])&&$_SESSION['RolUsuarioadm']==102){
   
        setcookie('admin_autenticado', 'true', time() + 3600, '/');
        $_SESSION['SESIONADM']=1;
        header("Location: index.php?c=index&f=index&l=Administrador");
       }
       else{
        echo "<script> alert('USUARIO NO IDENTIFICADO');
        </script>";
       }
    if(isset($_SESSION['SESIONADM'])&&$_SESSION['SESIONADM']==1&&isset($_COOKIE['admin_autenticado'])&&$_COOKIE['admin_autenticado'] === 'true'
    &&isset($_SESSION['RolUsuarioadm'])&&$_SESSION['RolUsuarioadm']==102){
        header("Location: index.php?c=index&f=index&l=Administrador");
    }

}

}



?>

