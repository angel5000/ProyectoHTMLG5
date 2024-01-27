<?php
      
session_start();

      setcookie('temaSeleccionado', "Obscuro", time() + (365 * 24 * 60 * 60), '/');
  
if (isset($_COOKIE['temaSeleccionado'])&&isset($_COOKIE['temaSeleccionado'])) {
    // Obtén la preferencia de tema de la cookie
    $preferenciaTema = $_COOKIE['temaSeleccionado'];
if($preferenciaTema =="Claro"){
    echo '<style> body {
            color: #fff; 
            background: linear-gradient(rgb(214, 209, 209), rgba(139, 121, 212, 0.3));
       max-width: 1340px;
           }</style>';
          
         
        }
        if($preferenciaTema =="Obscuro"){
          echo '
          <style> 
          body {
           
              color: #fff; 
             
             background: linear-gradient(rgb(22, 22, 22), rgba(109, 87, 196, 0.3));
         max-width: 1340px;
             }</style>';
             
         
        }
   
   
} else {
    echo "No se encontró una preferencia de tema.";
}

if(isset($_COOKIE['usuario_autenticado'])&&$_COOKIE['usuario_autenticado'] === 'true'){

  $logeo="Cerrar Sesion";
  $afiliado=$_SESSION['Afiliado'];
  $Nombres = isset($_SESSION['Nombres']) ? $_SESSION['Nombres'] : "Visitante";
}else{
  $_SESSION['RolAfiliado']=0;
        $_SESSION['RolUsuario']=0;
  $_SESSION['SESIONADM']=0;
  $logeo="Iniciar Sesion";
  $Nombres ="Visitante";
  $afiliado="";
}
include_once '../PHPGRUPO5/plantillas/Encabezado.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
    <meta name="autor" content="Vergara Paredes">
  <title>PrincipalTiendaJuegos</title>
  <link rel="stylesheet" href="EstiloPrincipal.css"  >


  <style>
   <?php
        // Aplica estilos específicos según la preferencia de tema almacenada
       // if ($temaAlmacenado === 'oscuro') {
        //    cho ' body {
           //     color: #fff; 
           //    background: linear-gradient(rgb(22, 22, 22), rgba(109, 87, 196, 0.3));
        //  max-width: 1340px;
          //    }';
       // }else{

        //}
        ?>
    html {

     background-color: #020303;
     
    }
    
        a {
          text-decoration: none;
      color: #fff
        }
    .listado2 {
   
      display: inline-block;
      margin-left: 10px;
      margin-right: 90px;
   
    color: #fff;
   


    }

    .listado3 {
    
      display: inline-block;
      margin-right: 20px;
    
      padding-right: 210px;
   
      color: #fff;
      max-width: 1px;
      min-width: 0px;
    
    }
#spanconf{
  color: #fff;
}
#btcg {
  padding-left: 10px; padding-right: 10px;
        padding-top: 1px;
        border:1px solid rgb(194, 182, 241);
        background: linear-gradient(rgb(0, 0, 0), rgb(194, 182, 241,0.4));
}
    

    
  </style>
</head>

<body>

  <div class ="barra">
    <figure> <img src="imagenes/logo.png" alt="Logo" width="80" height="65"> </figure>
    <nav id="navbarra">
      <ul>
        
        <li class="listado2"><a href="Distribucion.html"> Distribucion</a></li>
        <li class="listado2"><a href="Asistencia.html"> Asistencia</a></li>
        <li class="listado2"><a href="Afiliado.php"style="margin-left: 30px; margin-right: 0px; "> <?php
       echo $afiliado?></a></li>
<li class="listado2"><a href="Login.php"> <?php
       echo $logeo?></a></li>

        <li class="listado2" style="margin-left: 120px; margin-right: 0px; "></li>
       
        <li class="listado2" style="margin-left: 10px; margin-right: 10px; ">
       
        <span>
        <?php
       
        echo $Nombres;?></span>
        <button id="btcg" class="navbar-burger" onclick="toggleMenu()">
       <span id="spanconf" style="color: #fff;">Configuraciones</span>
</button>
<div class="menu">
<span style="color: #fff;  font-size: 25px;">Configuraciones</span>
<nav class="nav">
<a class="a"  style="animation-delay: 0.25" href="/PHPGRUPO5/Configuraciones.php"
>Seleccionar Temas
 
</a>
</nav>
</div>
<script type="text/javascript">
const toggleMenu = () =>
document.body.classList.toggle("open");
</script>

        <?php
    
// Obtén la preferencia de tema (puedes obtenerla de una solicitud POST o GET)
//$preferenciaTema = $_POST['tema'] ?? $_GET['tema'] ?? 'claro';

// Establece la cookie con una duración de 365 días (puedes ajustar la duración según tus necesidades)
//setcookie('tema', $preferenciaTema, time() + (365 * 24 * 60 * 60), '/');


//header('Location: index.php');
//?>
        
    </select>
        

        </li>
       
 

      </ul>
    </nav>
  </div>

  