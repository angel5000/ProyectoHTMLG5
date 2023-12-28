<?php
   include_once '../PHPGRUPO5/plantillas/Encabezado.php';
 session_start();
if(isset($_COOKIE['usuario_autenticado'])&&$_COOKIE['usuario_autenticado'] === 'true'&&
(isset($_SESSION['RolUsuario']) && $_SESSION['RolUsuario'] == 100) ||
    (isset($_SESSION['RolAfiliado']) && $_SESSION['RolAfiliado'] == 103)){

       

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta name="autor del html" content="Roberto Rivas Vélez">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selección de Método de Pago</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      
      background: linear-gradient(180deg, #131212, rgba(148, 131, 212, 0.26)),url(./imagenes/fondopago.jpg);
      background-size: contain;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
     
    }

    .payment-container {
     
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
      text-align: center;
      position: relative;
      color: #fdfdfd;
      background: linear-gradient(180deg, #1d1d1d, rgba(166, 149, 233, 0.685)) ;
      border:2px solid rgb(194, 182, 241,0.5);
    }

    .payment-container a {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
      color: #fdfdfd;
      text-decoration: underline;
    }

    .payment-method {
      margin-bottom: 20px;
    }

    .payment-method label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
    }

    .payment-method input {
      margin-right: 5px;
    }

    .btn-pay {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
  </style>
</head>
<body>

  <div class="payment-container">
    <form action="Compra.php" method="post">
    <a href="index.php">Ir a Principal</a>
    <h2>Selecciona tu Método de Pago</h2>

    <div class="payment-method">
      <input type="radio" id="tarjeta" name="payment" checked>
      <label for="tarjeta">Tarjeta de Crédito/Débito</label>
    </div>

    <div class="payment-method">
      <input type="radio" id="paypal" name="payment">
      <label for="paypal">PayPal</label>
    </div>

    <input type="submit" class="btn-pay" id="btpagar" Value="Pagar">
  </div>
</form>
  <script src="/Js/MetodPago.js"> </script>
</body>
</html>
<?php
    
    } else {
        echo "ACCESO DENEGADO NO HA INICIADO SESIÓN";
    }
   
    ?>
