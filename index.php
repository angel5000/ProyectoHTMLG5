<?php
     
session_start();


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
  $Nombres = isset($_SESSION['Nombres']) ? $_SESSION['Nombres'] : "Visitante";
}else{
  $logeo="Iniciar Sesion";
  $Nombres ="Visitante";
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

    

    
  </style>
</head>

<body>

  <div class ="barra">
    <figure> <img src="imagenes/logo.png" alt="Logo" width="80" height="65"> </figure>
    <nav id="navbarra">
      <ul>
        
        <li class="listado2"><a href="Distribucion.html"> Distribucion</a></li>
        <li class="listado2"><a href="Asistencia.html"> Asistencia</a></li>
        <li class="listado2"><a href="Login.html"> <?php
       echo $logeo?></a></li>
        <li class="listado2" style="margin-left: 300px; margin-right: 0px; "></li>
       
        <li class="listado2" style="margin-left: 10px; margin-right: 10px; ">
       
        <span>
        <?php
       
        echo $Nombres;?></span>
        <button style="padding-left: 10px; padding-right: 10px;
        padding-top: 1px;
        border:1px solid rgb(194, 182, 241);
        background: linear-gradient(rgb(0, 0, 0), rgb(194, 182, 241,0.4));
        " class="navbar-burger" onclick="toggleMenu()">
       <span style="color: #fff;">Configuraciones</span>
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
  
  <div >
    
  

    
    <div class="divnav">
    <nav class="navbar">
      <ul >

        <li class="listado3"><a class ="marcado" href="Principal-TiendaJuegosGrupo5.html"> Descubrir</a></li>
        <li class="listado3"><a class ="marcado" href="Explorar.html"> Explorar</a></li>
        <li class="listado3"><a class ="marcado"href="noticias.html"> Noticias</a></li>
      </ul>
    </nav>
    </div>
  
   
    <div class="conjconten">
      <h3> Descubre lo mejor en Juegos </h3>
    <div class="contenedor">
    <div class="carrusel" id="Micarrusel">
      <div class="imagenes">
      <img src="imagenes/hl2.jpg" alt="Hogwarts Legacy">
    </div>
    <div class="imagenes">
      <img src="imagenes/awpt.jpg" alt="Alan Wake" >
    </div>
      <div class="imagenes">
        <img src="imagenes/portaplgrq.jpg" alt="A Plague Tale Requiem">
      </div>
     
</div >
<div class ="list">
    
  <div class="dtimg"> <img src="imagenes/aw2.jpg" alt="A" width="50" height="60">
    <h5 > Alan Wake 2</h5>
</div>

<div class="dtimg"> <img src="imagenes/rtm2.jpg" alt="b" width="50" height="60">
  <h5>  Return to Moria </h5></div>
  <div class="dtimg"> <img src="imagenes/gtr2.jpg" alt="c" width="50" height="60">
    <h5 > Ghostrunner 2</h5></div>
    <div class="dtimg"> <img src="imagenes/hl2.jpg" alt="d" width="50" height="60">
      <h5 > Hogwarts Legacy</h5> </div>
    
  </div>
</div >
</div>

<div >
  <h2 id="titulodest"> Juegos Destacados</h2>
</div>
<div class="contendest">
<div class="contenedorJD">
        <div class="frame prmfram">
          <img class ="rdimg" src="imagenes/ACMG.jpg" alt="ACMG" width="280" height="370"> 

          <h5> Juego Base </h5>
          <h3> Assassin’s Creed Mirage </h3>
          <div class="dvboton">
            <a href="Descripcion2.html">
            <input type="button" id="btlog"  value="Descripcion" style="background: linear-gradient(rgb(255, 254, 254), rgba(83, 45, 236, 0.1));"> 
          </a>
        </div>
        </div>
        <div class="frame">
           <img class ="rdimg" src="imagenes/thl1.jpg" alt="The last of us" width="280" height="370"> 

          <h5> Juego Base </h5>
          <h3> The last of us </h3>
          <div class="dvboton">
            <a href="Descripcion.html">
            <input type="button" id="btlog"  value="Descripcion" style="background: linear-gradient(rgb(255, 254, 254), rgba(83, 45, 236, 0.1));"> 
          </a>
        </div>
        </div>
        <div class="frame">
           <img class ="rdimg" src="imagenes/tew.jpg" alt="The Evil Within" width="280" height="370"> 

          <h5> Juego Base </h5>
          <h3> The Evil Within </h3>
          <div class="dvboton">
            <a href="Descripcion.html">
            <input type="button" id="btlog"  value="Descripcion" style="background: linear-gradient(rgb(255, 254, 254), rgba(83, 45, 236, 0.1));"> 
          </a>
        </div>
          
        </div>
        <div class="frame">
           <img class ="rdimg" src="imagenes/tew2.jpg" alt="The Evil Within 2" width="280" height="370"> 

          <h5> Juego Base </h5>
          <h3> The Evil Within 2 </h3>
          <div class="dvboton">
            <a href="Descripcion.html">
            <input type="button" id="btlog"  value="Descripcion" style="background: linear-gradient(rgb(255, 254, 254), rgba(83, 45, 236, 0.1));"> 
          </a>
        </div>
        </div>

        <div class="frame">
          <img class ="rdimg" src="imagenes/apltrq.jpg" alt="A Plague Tale: Requiem" width="280" height="370"> 

         <h5> Juego Base </h5>
         <h3> A Plague Tale: Requiem </h3>
         <div class="dvboton">
           <a href="Descripcion.html">
           <input type="button" id="btlog"  value="Descripcion" style="background: linear-gradient(rgb(255, 254, 254), rgba(83, 45, 236, 0.1));"> 
         </a>
       </div>
       </div>

       <div class="frame">
        <img class ="rdimg" src="imagenes/apltinoc.jpg" alt="A Plague Tale Innocence" width="280" height="370"> 

       <h5> Juego Base </h5>
       <h3> A Plague Tale Innocence</h3>
       <div class="dvboton">
         <a href="Descripcion.html">
         <input type="button" id="btlog"  value="Descripcion" style="background: linear-gradient(rgb(255, 254, 254), rgba(83, 45, 236, 0.1));"> 
       </a>
     </div>
     </div>






      </div>
    </div>
<div id="ofertas">
  <a href="">
      
  </a>
<div class="contpromo"> <!--contendor promo-->
<div class="imgcont">
   <img class ="imgpromo" src="imagenes/oferta.jpg" alt="Oferta" width="370" height="270"> 

  <div class="textcont"> 
<h4>Ofertas y Promociones</h4>
<h5>Disfruta de nuestras ofertas y promociones</h5>
  </div>
  <div>
    
  </div>
</div>

</div>

<div class="contpromo"> <!--contendor promo-->
  <div class="imgcont">
     <img class ="imgpromo" src="imagenes/prom2.jpg" alt="Oferta" width="370" height="270"> 
  
    <div class="textcont"> 
  <h4>Ofertas y Promociones</h4>
  <h5>Disfruta de nuestras ofertas y promociones</h5>
    </div>
    <div>
      
    </div>
  </div>
  
  </div>



</div>





</div>

<div>
  
<footer class="ftr" >
  <address>
    Contacto:<a href="correo@gmail.com">Correo@gmail.com</a>
    </address>
   
  <span class="spam">Tienda de VideoJuegos Proyecto Grupal, Grupo#5</span>.<br>
  <span>Síguenos en las redes sociales</span>.<br>
  
    <a href="https://www.facebook.com" >Facebook</a>
    <a href="https://www.twitter.com" > Twitter</a>


</footer>
</div>
<script src="Js/Carrusel.js"></script>
<script src="Js/Barramenu.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const cartLink = document.querySelector('.cart');
  const cartDropdown = document.querySelector('.cart-dropdown');

  cartLink.addEventListener('click', function() {
      cartDropdown.classList.toggle('show');
      <span class="cart-count"><?php echo $totalcantidad; ?>ghj</span>
      alert("sdfs");
  });
});
</script>
</body>

</html>