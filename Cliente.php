<?php
 session_start();
   require_once '../PHPGRUPO5/plantillas/Conexion.php';
 $sql = "select rol from RolesClientes where idRolUsu =5";
 $data = array();
 $stmt = $pdo->prepare($sql);// preparar la sentencia
 $stmt->execute($data);
 $row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $_SESSION['rol'] = $row['rol'];
    echo $_SESSION['rol'];
} else{
       $_SESSION['rol']="";
}
  ?>
<?php

        $titulo="MODULO CLIENTE";
        include_once '../PHPGRUPO5/plantillas/Encabezado.php';
        
         if (!empty($_SESSION['rol']) ||$_SESSION['rol']==103 ||$_SESSION['rol']==100 ){
               
                include_once '../PHPGRUPO5/index.html';
                
            }else{
                header("Location: Login.php");
            }
        ?>