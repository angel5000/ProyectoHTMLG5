<?php
session_start();
        $titulo="PRUEBA DE USUARIOS";
        include_once '../PHPGRUPO5/Plantillas/Encabezado.php';
     
        ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div>
  <div></div>
  <label for="login">SinUsuario</label>
<input type="radio" name="login" checked =true value="ul" require>
</div>
<div>
<label for="login">ConUsuario</label>
<input type="radio" name="login"  value="lgi" > 
</div>
<div>
<label for="login">Otro Usuario</label>
<input type="radio" name="login"  value="lgi2" > 
</div>
<br>

<div>
<label for="user">|Opciones Pagina|</label><br><br>
</div>
<div>
<label for="user">Administrador</label>
<input type="radio" name="user"  value="adm" checked =true> 
</div>

<div>
<input type="submit" value="Enviar" id="enviar">
</div>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["login"])&&($_POST["user"])){
  
    $opcionSeleccionada = $_POST["login"];
    $opcionSeleccionada2 = $_POST["user"];
    if ($opcionSeleccionada == "lgi"&&$opcionSeleccionada2=="adm") {

        
        conectar("Admiin1","adm123456");

     
 
     echo $opcionSeleccionada2." g2".$opcionSeleccionada;
    
    }if ($opcionSeleccionada == "ul"&&$opcionSeleccionada2=="adm"){
      
        header("Location: LoginAdmin.php");
      

      echo $opcionSeleccionada2." g2".$opcionSeleccionada;
    }
    


  if ($opcionSeleccionada == "lgi2"&&$opcionSeleccionada2=="adm") {
    echo $opcionSeleccionada2." g".$opcionSeleccionada;
    
    conectar("Usuario1","123456");
   
  } 

  
  } 

}
function conectar($usuario,$contrasenaIngresada){
 
    
    
  $usuario;
  $contrasenaIngresada;
  $_resultado = 0;
  $_rstid=0;
  $_Nombres="N/A";
 
  echo "Usuario: " . $usuario . "<br>";
  echo "Contraseña Ingresada: " . $contrasenaIngresada;
 
 
 

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
$_SESSION['RolUsuario']= $pRol;

  
if($resultado==1&&isset($_SESSION['RolUsuario'])&&$_SESSION['RolUsuario']==102){
   
        setcookie('admin_autenticado', 'true', time() + 3600, '/');
        $_SESSION['SESIONADM']=1;
        header("Location: Administrador.php");
       }
    
else{
echo '<script> alert("ACCESO DENEGADO USUARIO NO AUTORIZADO");</script>';

}
}


if(isset($_SESSION['SESIONADM'])&&$_SESSION['SESIONADM']==1&&isset($_COOKIE['admin_autenticado'])&&$_COOKIE['admin_autenticado'] === 'true'){
    
    $resultado = 0;
    $rstid=0;
    $_SESSION['SESIONADM']=0;
    setcookie('admin_autenticado', 'true', time() - 3600, '/');
    echo "<script> alert('SESION CERRADA');
    window.location.href = 'LoginAdmin.php';</script>";
    
}

?>

<span>AL ESCOGER "CON USUARIO " SE INICIARA SESION CON UN USUARIO ESTABLECIDO DE LA 
BD "USUARIO1- 123456"| SIN USUARIO ESTE ELIMINARA LA COOKIE DE AUTENTICACION EVITANDO 
ASI CUALQUIER ACCESO A PAGINAS RESTRINGIDAS QUE NECESISTEN USUARIOS, ESTE LE NEGARA O PEDIRA QUE INICIE SESION.

</span>
</div>
<?php

?>
          


