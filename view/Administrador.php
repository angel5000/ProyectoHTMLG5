<?php
   
 require_once HEADERADMIN;

 session_start();
if(isset($_COOKIE['admin_autenticado'])&&$_COOKIE['admin_autenticado'] === 'true'&&
(isset($_SESSION['RolUsuarioadm']) && $_SESSION['RolUsuarioadm'] == 102)){

       

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="autor" content="">
        <!---- A LA BASE DE DATOS SE LE PUSO NOMBRE dispensariomedico-->
        <title>ADMINISTRADOR</title>
    </head>
<style>
    body{
        margin: 0;
    padding: 0;
    background: linear-gradient(rgb(0, 0, 0), rgb(194, 182, 241,0.4));
    }
#divtb{
margin-left:20px;
margin-top:50px;
margin-right:50px;
padding-left: 1px;
overflow-x: scroll;
display: inline-block;
    max-width: 100%;
    border:2px solid rgb(66, 62, 82);
border-radius: 10px;
}
#divtbus
{
margin-left:20px;
margin-top:50px;
margin-right:50px;
padding-left: 1px;
overflow-x: scroll;
display: inline-block;
    max-width: 50%;
    border:2px solid rgb(66, 62, 82);
border-radius: 10px;
}
table{
 border-collapse: collapse;

background-color:rgba(162, 207, 205, 0.658);

}

#csalt:nth-child(4){
        padding-left:10px;
        padding-right:10px;
    }

th, td {
    border: #b2b2b2 1px solid;
        text-align: center;
    
    }
    th {
        font-size: 14px;
        padding-left:10px;
        padding-right:16px;

        background-color: #f2f2f2;
    }
    th:nth-child(5){
        padding-left:30px;
        padding-right:30px;
    }
    th:nth-child(11){
        padding-left:1px;
        padding-right:3px;
    }
span{
    color:#fff;
}


    #resultado{
        margin-left:300px;
margin-top:20px;
margin-right:10px;
padding-left: 1px;
height:100px;
    }
</style>

    <body>
        <div style="  border:2px solid rgb(66, 62, 82); 
        margin-right=200px; padding-right=1px; 
    max-width: 8%;">
    <a id ="cerrrarSesion"style="color: #fff" href="index.php?c=Admin&f=index&lg=Logout" > Cerrar Sesion</a>
    </div>
    <?php
        $titulo="ADMINISTRADOR";
        require_once '../PHPGRUPO5/plantillas/Conexion.php';
        ?>
         <?php
        
         $sql = "select * from Cliente";
         $data = array();
         $stmt = $pdo->prepare($sql);// preparar la sentencia
         $stmt->execute($data);
         
        ?>
      
       
       <div id="divtb">
       <span>CLIENTES</span>
       <table>
       
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>EMAIL</th>
                        <th> fechaRegistro</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $filas = $stmt->fetchAll(PDO::FETCH_ASSOC); // recuperar resultados
                    // fetchAll  siempre retorna un arreglo
                    // fetchAll va a retornar un arreglo
                    // donde cada elemento del arreglo (registro)
                    // es un arreglo asociativo
                    foreach ($filas as $fila) {
                        ?>
                        <tr>
                            <td><?php echo $fila['idCliente'] ?></td>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['apellido'] ?></td>
                            <td><?php echo $fila['email'] ?></td>
                            <td><?php echo $fila['fechaRegistro'] ?></td>
                            <td>
                                <a >Editar</a>
                                </td>
                                <td>
                                <a >Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
       
       </div>
       <?php
        
        $sql = "select * from Administrador";
        $data = array();
        $stmt = $pdo->prepare($sql);// preparar la sentencia
        $stmt->execute($data);
        
       ?>
      <div id="divtb">
      <span>ADMINISTRADORES</span>
      <table>
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>NOMBRES</th>
                       <th>APELLIDOS</th>
                       <th>EMAIL</th>
                       <th> fechaRegistro</th> 
                   </tr>
               </thead>
               <tbody>
                   <?php
                   $filas = $stmt->fetchAll(PDO::FETCH_ASSOC); // recuperar resultados
                   // fetchAll  siempre retorna un arreglo
                   // fetchAll va a retornar un arreglo
                   // donde cada elemento del arreglo (registro)
                   // es un arreglo asociativo
                   foreach ($filas as $fila) {
                       ?>
                       <tr>
                           <td><?php echo $fila['idadmin'] ?></td>
                           <td><?php echo $fila['nombre'] ?></td>
                           <td><?php echo $fila['apellido'] ?></td>
                           <td><?php echo $fila['email'] ?></td>
                           <td><?php echo $fila['fechaRegistro'] ?></td>
                           <td>
                                <a >Editar</a>
                                </td>
                                <td>
                                <a >Eliminar</a>
                            </td>
                       </tr>
                   <?php } ?>
               </tbody>
           </table>
      
      </div>

      <?php
        
        $sql = "select * from DatosUbicacion";
        $data = array();
        $stmt = $pdo->prepare($sql);// preparar la sentencia
        $stmt->execute($data);
        
       ?>
      <div id="divtb">
      <span>DIRECCIONES CLIENTES</span>
      <table>
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Direccion</th>
                       <th>Provincia</th>
                       <th>Ciudad</th>
                       <th> idCliente</th> 
                   </tr>
               </thead>
               <tbody>
                   <?php
                   $filas = $stmt->fetchAll(PDO::FETCH_ASSOC); // recuperar resultados
                   // fetchAll  siempre retorna un arreglo
                   // fetchAll va a retornar un arreglo
                   // donde cada elemento del arreglo (registro)
                   // es un arreglo asociativo
                   foreach ($filas as $fila) {
                       ?>
                       <tr>
                           <td><?php echo $fila['idDirc'] ?></td>
                           <td><?php echo $fila['Direccion'] ?></td>
                           <td><?php echo $fila['Provincia'] ?></td>
                           <td><?php echo $fila['Ciudad'] ?></td>
                           <td><?php echo $fila['idCliente'] ?></td>
                           <td>
                                <a >Editar</a>
                                </td>
                                <td>
                                <a >Eliminar</a>
                            </td>
                       </tr>
                   <?php } ?>
               </tbody>
           </table>
      
      </div>
      <?php
        
        $sql = "select * from Usuarios";
        $data = array();
        $stmt = $pdo->prepare($sql);// preparar la sentencia
        $stmt->execute($data);
        
       ?>
      <div id="divtbus">
      <span>USUARIOS REGISTRADOS</span>
      <table>
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>IDCliente</th>
                       <th>NOMBRE DE USUARIO</th>
                       <th>ACTIVO</th>
                       <th>Salt</th> 
                       <th id="csalt">HashedContrasena</th> 
                   </tr>
               </thead>
               <tbody>
                   <?php
                   $filas = $stmt->fetchAll(PDO::FETCH_ASSOC); // recuperar resultados
                   // fetchAll  siempre retorna un arreglo
                   // fetchAll va a retornar un arreglo
                   // donde cada elemento del arreglo (registro)
                   // es un arreglo asociativo
                   foreach ($filas as $fila) {
                       ?>
                       <tr>
                           <td><?php echo $fila['idUsuario'] ?></td>
                           <td><?php echo $fila['idCliente'] ?></td>
                           <td><?php echo $fila['NombUsuario'] ?></td>
                           <td><?php echo $fila['Activa'] ?></td>
                           <td id="salt"><?php echo $fila['Salt'] ?></td>
                           <td><?php echo $fila['HashedContrasena'] ?></td>
                           <td>
                                <a >Editar</a>
                                </td>
                                <td>
                                <a >Eliminar</a>
                            </td>
                       </tr>
                   <?php } ?>
               </tbody>
           </table>
      
      </div>
    </body>


</html>
<?php
    
    } else {
      //  header("LoginAdmin.php");
      echo "<script>
      window.location.href = 'LoginAdmin.php' </script>";
     die();
     //  die();
       
    }
   
    ?>
    <?php require_once FOOTERADMIN; ?>
    