
<?php
//Peñaherrera Valderrama Antonio Adolfo
   include_once '../PHPGRUPO5/plantillas/Encabezado.php';
 session_start();

?>
<?php
if (isset($_GET['id'])) {
    $idJuego = $_GET['id'];


    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripcion</title>
    <link rel="stylesheet" href="styledescripcion2.css">
</head>
<body>
<?php        
 
 foreach ($resultados as $fila) {
   ?>

        <div id="contenedorvideo" >
            <div class="Nombre">
                <h1 id="titulo"><?php echo $fila->NombJuego;?></h1>
                <div>
                    <h2>Descripción general</h2>
                </div>
                
            </div>
            <div class="video">
                <iframe id="miIframe" width="560" height="315" src="https://www.youtube.com/embed/k-BGWNNvvas?si=0EyyJlk6cFVowWAe" title="YouTube video player"
                 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          
                </div>   
            <div class="descrip">
                <h3>Experimente la historia de Basim, un astuto ladrón callejero con visiones de pesadilla, que busca respuestas y justicia mientras navega por las bulliciosas calles de la Bagdad del siglo IX. A través de una misteriosa y
                     antigua organización conocida como los Ocultos, se convertirá en un letal Maestro Asesino y 
                     cambiará su destino de maneras que nunca podría haber imaginado.</h3>
                <div>
                    <h6>Géneros <br><br> Acción, Aventura</h6>   
                    <h5>Experimente la historia de Basim, un astuto ladrón callejero que busca respuestas y justicia mientras navega por las bulliciosas calles de la Bagdad
                         del siglo IX. A través de una misteriosa y antigua organización conocida como los Ocultos, se convertirá en un letal Maestro Asesino y cambiará su destino de maneras
                         que nunca podría haber imaginado.
                        Experimenta una versión moderna de las características y jugabilidad icónicas que han definido una franquicia durante 15 años.
                        Parkour sin problemas por la ciudad y derrota sigilosamente a objetivos con asesinatos más viscerales que nunca.
                        Explora una ciudad increíblemente densa y vibrante cuyos habitantes reaccionan a cada uno de tus movimientos y descubre los secretos de cuatro distritos únicos
                         mientras te aventuras a través de la Edad de Oro de Bagdad..</h5>
                </div>   
            </div>
        </div>    
        <form method="POST">
        <div id="contenedorimg2" class="responsive-container">
            <img id="imgport" src="imagenes/assmrgportada.png" alt="Portada" width="350" height="200">
           
            <div class="grboton"></div>
            <h4 id="precio">49,99 US$</h4>
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
            
               header('Location: Venta.php');
              die();
            }else{
                header('Location: Login.php');
                die();
          }
     
          }
          ?>
          <?php  } ?>
          <?php  } ?>


      