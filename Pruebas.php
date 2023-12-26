<?php
        $titulo="PRUEBA DE ROLES CLIENTE";
       // include_once '../PHPGRUPO5/Plantillas/Encabezado.php';
        //include_once '../PHPGRUPO5/Login.php';
        ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div>
<input type="radio" name="login" checked =true value="ul" require> SinUsuario
<input type="radio" name="login"  value="lgi" > ConUsuario
<input type="submit" value="Enviar" id="enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["login"])) {
  
    $opcionSeleccionada = $_POST["login"];
    if ($opcionSeleccionada == "lgi") {
     require_once '../PHPGRUPO5/Login.html';
      die();
    } else {
      require_once '../PHPGRUPO5/Compra.php';
      
    }

   
  } 
}
?>

<a href="<?php echo $path ?>../PHPGRUPO5/Compra.php">  Comprar juegos </a> 
<a > Ingresar metodo de pago </a>
<a > Ingresar informacion de pago </a>
</div>



          


