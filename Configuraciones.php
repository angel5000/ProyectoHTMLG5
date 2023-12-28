<?php
include_once '../PHPGRUPO5/plantillas/Encabezado.php';
?>
<?php

if (isset($_COOKIE['temaSeleccionado'])&&isset($_COOKIE['temaSeleccionado'])) {

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
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Rivas Vélez José Roberto">
    <title>Temas</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<style>


</style>
<body>
<H2>CAMBIAR TEMA DE PAGINA</H2>
<SPAN>TEMA APLICADO: <?php echo $preferenciaTema?></SPAN>
    <nav>
        <form id="formTema" Method="get">
            <label for="Tema">Selecciona un tema:</label>
            <select name="cbtema" id="Tema">
            <option value="">Tema...</option>
                <?php
                $tema = array('Obscuro', 'Claro');
                foreach ($tema as $temas) {
                    echo "<option value=\"$temas\">$temas</option>";
                }
                ?>
            </select>
            <button type="submit" >Enviar</button>
        </form>
    </nav>


</body>
</html>



<?php
if (isset($_GET['cbtema'])) {
    
    $preferenciaTema = $_GET['cbtema'];

    setcookie('temaSeleccionado', $preferenciaTema, time() + (365 * 24 * 60 * 60), '/');

   echo"<script> alert('TEMA INGRESADO');
   window.location.href = 'Configuraciones.php';
   </script>";
   
   
}

?>