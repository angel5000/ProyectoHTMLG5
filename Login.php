<?php
//autor: Angel Vergara Paredes

?>
<?php
if(!isset($_COOKIE['usuario_autenticado'])){

    ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
    <meta name="autor" content="Vergara Paredes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="EstiloLogin.css" rel="stylesheet" >

    </head>
<body>

    <form  method="post">
    <div class="panlogin" >
        
        <div class="logo" >
            <figure> <img src="imagenes/logo.png" alt="Logo" width="80" height="65"> </figure>
            </div>
        <h4 style="font-family: 'Times New Roman', Times, serif; color: azure;">Inicio de Sesion</h4> 
        <div class="textlog" >

            <h4 style="font-family: 'Times New Roman', Times, serif; color: azure;">Inicia Sesion o Registrate</h4> 
       
        </div>
        <div class="dvtext">

            <input type="text" id="camplog" name="txtusuario" placeholder="Ingrese su usuario"> 
        </div>
        <div class="dvtext2">

            <input type="password" id="camplog2" name="txtcontra" placeholder="Ingrese su contraseña"> 
        </div>
        <div class="dvboton">


            <input type="submit" id="btlog"  value="Ingresar"> 
        
        </div>
        <div class="dvreg">
<h4 style="font-family: 'Times New Roman', Times, serif; color: azure;">No tienes cuenta?</h4>
            <a href="registro.php"> Registrate aqui</a>
        </div>
    </form>
    </div>

    
    <textarea id="h-captcha-response-0gw74a5cvacg" name="h-captcha-response" style="display: none;"></textarea>




</body> 

    
    </html>

  


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $usuario = $_POST["txtusuario"];
    $contrasenaIngresada = $_POST["txtcontra"];
    $resultado = 0;
    $rstid=0;
    echo "Usuario: " . $usuario . "<br>";
    echo "Contraseña Ingresada: " . $contrasenaIngresada;




   require_once '../PHPGRUPO5/plantillas/Conexion.php';
   $stmt = $pdo->prepare('CALL LoginUsuario(?, ?, @pResultado, @ids,@nombres,@apellidos)');
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
$stmt = $pdo->prepare("CALL ObtenerRolUsuario(:idUsuario, @pRol)");
$stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
$stmt->execute();
$stmt->closeCursor();

$stmt = $pdo->prepare("CALL ObtenerRolAfiliado(:idrrolafi, @afRol)");
$stmt->bindParam(':idrrolafi', $idUsuario, PDO::PARAM_INT);
$stmt->execute();
$stmt->closeCursor();
$stmt = $pdo->query("SELECT @pRol as pRol");
$rstid = $stmt->fetch(PDO::FETCH_ASSOC);
$pRol = $rstid['pRol'];
$_SESSION['RolUsuario']= $pRol;
$stmt = $pdo->query("SELECT@afRol as Rolaf");
$rstid = $stmt->fetch(PDO::FETCH_ASSOC);
$pRolaf = $rstid['Rolaf'];
$_SESSION['RolAfiliado']= $pRolaf;
//echo "id: ".$idUsuario."- ". $pRolaf." - ".$pRol." - ".$_SESSION['Nombres'];
  
if($resultado==1&&$pRol == 100 ||  $pRolaf == 103){
   
       
        setcookie('usuario_autenticado', 'true', time() + 3600, '/');
      
        
        header("Location: index.php");
     
       
       
    
}else{
    echo '<script> alert("ERROR DE SESION REVISE SUS CREDENCIALES");</script>';
}if($resultado==1&&$pRol == 100&&$pRolaf == 103){
    $_SESSION['Afiliado']="Afiliado";
    
    }else{
        $_SESSION['Afiliado']="";
    }


}
} if(isset($_COOKIE['usuario_autenticado'])&&$_COOKIE['usuario_autenticado'] === 'true'){
    

    $_SESSION['RolAfiliado']=0;
    $_SESSION['RolUsuario']=0;
    $_SESSION['a']=null;
    $resultado = 0;
    $rstid=0;
    session_unset();
    setcookie('usuario_autenticado', 'true', time() - 3600, '/');
    echo "<script> alert('SESION CERRADA');
        window.location.href = 'index.php' </script>";
       
}

?>
  
