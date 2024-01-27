<?php

    if(isset($_COOKIE['admin_autenticado'])&&$_COOKIE['admin_autenticado'] === 'true'
   ){
        
        $resultado = 0;
        $rstid=0;
        $_SESSION['SESIONADM']=0;
        $_SESSION['RolUsuarioadm']=0;
        setcookie('admin_autenticado', 'true', time() - 3600, '/');
        echo "<script> alert('SESION CERRADA');
        window.location.href = 'index.php';</script>";
        
    }

?>