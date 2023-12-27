<?php
     include_once '../PHPGRUPO5/plantillas/Encabezado.php';
 session_start();
if(isset($_COOKIE['usuario_autenticado'])&&$_COOKIE['usuario_autenticado'] === 'true'){
require_once '../PHPGRUPO5/Metodopago.html';
}else{
    echo "ACCESO DENEGADO NO HA INICIADO SESION";
}
?>