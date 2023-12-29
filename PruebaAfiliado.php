<?php
session_start();
        $titulo="PRUEBA DE USUARIOS";
        include_once '../PHPGRUPO5/Plantillas/Encabezado.php';
     
        ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div>
  <div></div>
  <label for="login">Usuario Diferente</label>
<input type="radio" name="login" checked =true value="ul" require>
</div>
<div>
<label for="login">ConUsuario</label>
<input type="radio" name="login"  value="lgi" > 
</div><br>

<div>
<label for="Compra">|Opciones Pagina|</label><br><br>
</div>
<div>
<label for="Compra">Afiliado</label>
<input type="radio" name="afilia"  value="afi" checked =true> 
</div>

<div>
<input type="submit" value="Enviar" id="enviar">
</div>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["login"])&&($_POST["afilia"])){
  
    $opcionSeleccionada = $_POST["login"];
    $opcionSeleccionada2 = $_POST["afilia"];
    if ($opcionSeleccionada == "lgi"&&$opcionSeleccionada2=="afi") {

     
        conectar("Usuario1","123456");

      header('Location: Afiliado.php');
 
     echo $opcionSeleccionada2." g2".$opcionSeleccionada;
    
    } else{
      
      if(isset($_COOKIE['usuario_autenticado'])){
      setcookie('usuario_autenticado', 'true', time() - 3600, '/');
      
      }
      conectar("Usuario2","123456");
      header('Location: Afiliado.php');
      echo $opcionSeleccionada2." g2".$opcionSeleccionada;
    }
    


  

  
  } 

}
function conectar($usuario , $contrasenaIngresada ){
 
    
    
  $usuario ;
  $contrasenaIngresada ;
  $_resultado = 0;
  $_rstid=0;
  $_Nombres="N/A";
 
  echo "Usuario: " . $usuario . "<br>";
  echo "Contraseña Ingresada: " . $contrasenaIngresada;
 
 
 
 require_once '../PHPGRUPO5/plantillas/Conexion.php';
 $stmt = $pdo->prepare('CALL LoginUsuario(?, ?, @pResultado, @ids,@nombres,@apellidos)');
 $stmt->bindParam(1, $usuario, PDO::PARAM_STR);
 $stmt->bindParam(2, $contrasenaIngresada, PDO::PARAM_STR);
 $stmt->execute();
 
 
 $stmt->closeCursor(); // Cerrar el conjunto de resultados anterior
 
 $stmt = $pdo->query("SELECT @pResultado AS Resultado, @ids AS id,@nombres AS Nombres,@apellidos AS Apellidos");
 $resultados = $stmt->fetch(PDO::FETCH_ASSOC);
 $_resultado = $resultados['Resultado'];
 $idUsuario = $resultados['id'];
 $_SESSION['Nombres']= $resultados['Nombres']." ".$resultados['Apellidos'];
 
 $stmt = $pdo->prepare("CALL ObtenerRolUsuario(:idUsuario, @pRol)");
 $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
 $stmt->execute();
 $stmt->closeCursor();
 
 $stmt = $pdo->prepare("CALL ObtenerRolAfiliado(:idrrolafi, @afRol)");
 $stmt->bindParam(':idrrolafi', $idUsuario, PDO::PARAM_INT);
 $stmt->execute();
 $stmt->closeCursor();
 
 $stmt = $pdo->query("SELECT @pRol as pRol");
 $_rstid = $stmt->fetch(PDO::FETCH_ASSOC);
 $pRol = $_rstid['pRol'];
 $_SESSION['RolUsuario']= $pRol;
 $stmt = $pdo->query("SELECT@afRol as Rolaf");
 $_rstid = $stmt->fetch(PDO::FETCH_ASSOC);
 $pRolaf = $_rstid['Rolaf'];
 $_SESSION['RolAfiliado']= $pRolaf;
 echo $pRolaf." ".$pRol." ".$_SESSION['Nombres'];
 
 if($_resultado==1&&$pRol == 100 ||  $pRolaf == 103){
 
    
      setcookie('usuario_autenticado', 'true', time() + 3600, '/');
   
 }else{
 echo "error";
 
 }
 
 
 echo "SESION INICIADO CON UN USUARIO";
 
 
 
 }
 
?>

<span>AL ESCOGER "CON USUARIO " SE INICIARA SESION CON UN USUARIO ESTABLECIDO DE LA 
BD "USUARIO1- 123456"| CON OTRO USUARIO NO PERMITIRA EL ACCESO A AFILIADO, AQUELLA PERSONA 
O EMPRESA QUE TIENE UN PERFIL O SECCION PERSONAL PARA SUBIR SUS JUEGOS
</span>
</div>
<?php

?>
          


