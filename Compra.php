<?php
   include_once '../PHPGRUPO5/plantillas/Encabezado.php';
 session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripcion</title>
    <link rel="stylesheet" href="styledescripcion.css">
</head>
<body>
    <div id="general">
        <div id="contenedorvideo" class="flexbox-item">
            <div class="Nombre">
                <h1 id="titulo">The Evil Within</h1>
            </div>
            <div>
                <h2>Descripción general</h2>
            </div>
            <div class="video">
                <iframe id="miIframe" width="805" height="515" src="https://www.youtube.com/embed/H2qITQHud2I?rel=0" title="YouTube video player"></iframe>
            </div>   
            <div>
                <h3>The Evil Within, un juego de Tango Gameworks dirigido por Shinji Mikami, creador de la saga Resident Evil, 
                    es puro terror de supervivencia. Te pondrás en la piel del detective Sebastian Castellanos y tendrás que 
                    sobrevivir en un retorcido mundo de pesadilla.</h3>
                <div>
                    <h6>Géneros <br><br> Disparos,  Supervivencia,  Terror </h6>   
                    <h5>The Evil Within, un juego de Tango Gameworks dirigido por Shinji Mikami, creador de la saga Resident Evil, es puro terror de supervivencia.
                        Te pondrás en la piel del detective Sebastian Castellanos para buscar la oscura verdad tras un horrendo asesinato múltiple y su conexión con un mundo 
                        por el que vagan espantosas criaturas. Sebastian tendrá que enfrentarse a un horror inimaginable y luchar por sobrevivir con recursos limitados para 
                        descubrir quién (o qué) está detrás de todo.
                        La tensión y la ansiedad van en aumento a medida que exploras el mundo del juego, te enfrentas a horrores, evitas crueles trampas y gestionas suministros 
                        esenciales mientras luchas con todo en tu contra. Pasillos, paredes, puertas y hasta un edificio cambian en tiempo real, atrapando al jugador en una realidad 
                        distorsionada en la que las amenazas pueden surgir en cualquier momento.
                        Mantén la compostura y el pulso firme. El horror y la acción aguardan a quienes se adentren en The Evil Within.</h5>
                </div>   
            </div>
        </div>    
        <form method="POST">
        <div id="contenedorimg2" class="responsive-container">
            <img id="imgport" src="imagenes/Portada.png" alt="Portada">
            <h4>19,99 US$</h4>
            <div class="boton1">
            
       <input  type="submit" id="btpagar" name="comprar" value="Comprar" >
            </div>
            <div class="boton2">
                <button id="btcarrito" type="button">   AÑADIR CARRITO   </button>
            </div>
            <div class="boton3">
                <button  id="btlistdeseo" type="button">   + A LA LISTA DE DESEOS   </button>
            </div>
        </div> 
    </form>
        <div>

        </div> 
        <div id="columnas-container">
            <div class="columna">
                <h2>Logros disponibles</h2>
                <img src="imagenes/Logro1.jpeg" alt="Logros">
                <img src="imagenes/Logro2.jpeg" alt="Logros">
                <img src="imagenes/Logro3.jpeg" alt="Logros">
                <img src="imagenes/Logro4.jpeg" alt="Logros">
                <img src="imagenes/Logro5.jpeg" alt="Logros">
            </div>
        </div>
        <div id="grid-container">
            <h2>Valoraciones de jugadores de Epic</h2>
            <h5>Proporcionadas por los jugadores del ecosistema de Epic Games.</h5>
            <div class="grid-item">
                <img src="imagenes/Valoracion1.jpeg" alt="Val">
                <img src="imagenes/Valoracion2.jpeg" alt="Val">
                <img src="imagenes/Valoracion3.jpeg" alt="Val">
            </div>
        </div>
    </div>
    <script src="Js/OpcionCompra.js"></script>
</body>
</html>


<?php
     
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
         
     
        if(isset($_COOKIE['usuario_autenticado'])&&$_COOKIE['usuario_autenticado'] === 'true'){
             
              echo "<script> 
              window.location.href = 'Venta.php' </script>";
               
            }else{
             
               echo "<script> 
               window.location.href = 'Login.php' </script>";
               
               
              
            }
     
          }
          ?>
    