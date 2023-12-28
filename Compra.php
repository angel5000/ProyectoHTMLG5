<?php
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
            }

     ?>
        
        
<?php



?>