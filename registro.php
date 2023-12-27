<style>
    #mensajeContainer {
    z-index: 1; 
margin-top: 10px;
    width: 650px;
    height: 370px;
    border-radius: 10px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0 30px 30px;
    color: rgb(29, 27, 27);
    background: linear-gradient(rgb(164, 226, 218), rgba(47, 35, 87, 0.877));
    -webkit-text-stroke:  0.1px  #050505;
    border:2px solid #b994db;
  }
  </style>
 
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


}


?>
 <?php 
echo"<div id='mensajeContainerr'>
<p>¡USUARIO REGISTRADO!</p>
<p>Nombre: $NombUsuario</p>
<button id='btok'>Ok</button>
</div> ";
?>
<script>

var btok= document.getElementById('btok');
    btok.addEventListener('click', function() {

     
        eliminarDiv();
        
    });
function eliminarDiv() {
    
    var divAEliminar = document.getElementById('mensajeContainerr');
 
        window.location.href = 'Login.html';
       
        divAEliminar.remove();
}

</script>