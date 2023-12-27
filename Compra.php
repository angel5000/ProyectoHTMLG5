<?php
       include_once '../PHPGRUPO5/plantillas/Encabezado.php';
/*if($_SERVER["REQUEST_METHOD"] == "POST"){
       
if($_resultado==1||$_COOKIE['usuario_autenticado'] === 'true'){
        $titulo="MODULO COMPRA";
        include_once '../PHPGRUPO5/plantillas/Encabezado.php';
        
        require_once '../PHPGRUPO5/Venta.php';
}if($_resultado==0){
      
        require_once '../PHPGRUPO5/Login.html';
        
}
}*//*else{*/
        session_start();
        if(isset($_COOKIE['usuario_autenticado'])&&$_COOKIE['usuario_autenticado'] === 'true'){
                $_SESSION['a'] = isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php';

              $redi=$_SESSION['a'];
                header("Location: $redi");
                die();
            }else{
                $_SESSION['a'] = isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php';

                header("Location: Login.html");
                die();
               /* require_once '../PHPGRUPO5/Login.html';*/
            }
/*}*/
     ?>
        
        
<?php



?>