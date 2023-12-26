<?php

?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar valores del formulario
    $usuario = $_POST["txtcorreo"];
    $contrasenaIngresada = $_POST["txtcontra"];
    $_resultado = 0;
    // Ahora puedes utilizar $usuario y $contrasenaIngresada en tu lógica
    echo "Usuario: " . $usuario . "<br>";
    echo "Contraseña Ingresada: " . $contrasenaIngresada;
} else {
    // Manejar el caso en que no se haya enviado el formulario
    echo "El formulario no ha sido enviado.";
}
?>



<?php
 session_start();
   require_once '../PHPGRUPO5/plantillas/Conexion.php';
   

$stmt = $pdo->prepare('CALL VerificarUsuario(?, ?, @pResultado)');
$stmt->bindParam(1, $usuario, PDO::PARAM_STR);
$stmt->bindParam(2, $contrasenaIngresada, PDO::PARAM_STR);

$stmt->execute();
// Obtener el valor del parámetro de salida
/*$var = $pdo->query("SELECT  @pResultado AS Resultado")->fetchColumn();
echo "Devuelve: " . $var;
$_resultado=$var;
*/
$stmt = $pdo->query("SELECT @pResultado AS Resultado");
$_resultado = $stmt->fetch(PDO::FETCH_ASSOC)['Resultado'];
if($_resultado==1){
   
        // Configurar una cookie para indicar que el usuario ha iniciado sesión
        setcookie('usuario_autenticado', 'true', time() + 3600, '/');
       //$redirect = isset($_SESSION['redirect']) ? $_SESSION['redirect'] : 'index.html';
       $redirect=$_SESSION['a'];
        header("Location: $redirect");die();
       
}/*if($_resultado==1){
    $_redirect = isset($_GET['redirect'])? $_GET['redirect'] : 'index.html';
            
              
                header("Location: $_redirect");
                die();
}
*/

  ?>

