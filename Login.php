<?php
 session_start();
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar valores del formulario
    $usuario = $_POST["txtcorreo"];
    $contrasenaIngresada = $_POST["txtcontra"];
    $_resultado = 0;
    $_rstid=0;
    $_Nombres="N/A";
    // Ahora puedes utilizar $usuario y $contrasenaIngresada en tu lógica
    echo "Usuario: " . $usuario . "<br>";
    echo "Contraseña Ingresada: " . $contrasenaIngresada;
} else {
    // Manejar el caso en que no se haya enviado el formulario
    echo "El formulario no ha sido enviado.";
    $_SESSION['Nombres']="Visitante";
}
?>



<?php

   require_once '../PHPGRUPO5/plantillas/Conexion.php';
   $stmt = $pdo->prepare('CALL LoginUsuario(?, ?, @pResultado, @ids,@nombres,@apellidos)');
$stmt->bindParam(1, $usuario, PDO::PARAM_STR);
$stmt->bindParam(2, $contrasenaIngresada, PDO::PARAM_STR);
$stmt->execute();

// Obtener el valor del parámetro de salida
$stmt->closeCursor(); // Cerrar el conjunto de resultados anterior

$stmt = $pdo->query("SELECT @pResultado AS Resultado, @ids AS id,@nombres AS Nombres,@apellidos AS Apellidos");
$resultados = $stmt->fetch(PDO::FETCH_ASSOC);
$_resultado = $resultados['Resultado'];
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
// Obtener el valor del parámetro de salida del segundo procedimiento almacenado
$stmt = $pdo->query("SELECT @pRol as pRol");
$_rstid = $stmt->fetch(PDO::FETCH_ASSOC);
$pRol = $_rstid['pRol'];

$stmt = $pdo->query("SELECT@afRol as Rolaf");
$_rstid = $stmt->fetch(PDO::FETCH_ASSOC);
$pRolaf = $_rstid['Rolaf'];
echo $pRolaf." ".$pRol." ".$_SESSION['Nombres'];
  
if($_resultado==1&&$pRol == 100 ||  $pRolaf == 103){
   
        // Configurar una cookie para indicar que el usuario ha iniciado sesión
        setcookie('usuario_autenticado', 'true', time() + 3600, '/');
       //$redirect = isset($_SESSION['redirect']) ? $_SESSION['redirect'] : 'index.html';
       
       if(isset($_SESSION['a'])||!empty($_SESSION['a'])){
        $redirect=$_SESSION['a'];
        header("Location: $redirect");die();
       }else{
        header("Location: index.php");
       }
}else{
echo "error";
echo $pRol." ".$_resultado;
}/*if($_resultado==1){
    $_redirect = isset($_GET['redirect'])? $_GET['redirect'] : 'index.html';
            
              
                header("Location: $_redirect");
                die();
}
*/

  ?>

