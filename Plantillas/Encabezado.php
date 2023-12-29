
<style>
    a{
        color: #fff;
        text-decoration: none;
        font-family: 'Times New Roman', Times, serif;
     
        
    }
    #ennav{
       
        background-color: #121212;
    }
    h3{
        color: #fff;
    }
</style>
<div style="margin-bottom: 20px; margin-top: 20px;">

    <h3>
        <?php echo isset($titulo)?$titulo:"LISTA DE ENLACES";  ?>
    </h3>

    <nav id="ennav">
        <?php
         $_SESSION['SESIONADM']=0;
         $_SESSION['SESION']=0;
        $path="";
        if($_SERVER['PHP_SELF']!="/Encabezado.php"){
            $path="../";
        }
        
        ?>
        <a href="/PHPGRUPO5/index.php">Index| </a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Compra.php" >Compra | </a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Venta.php" >Venta | </a>
        <a href="<?php echo $path ?>../PHPGRUPO5/LoginAdmin.php" >Administrador | | </a> 
        <a href="<?php echo $path ?>../PHPGRUPO5/Pagos.php" >Pagos | | </a> 
       
        <a href="<?php echo $path ?>../PHPGRUPO5/PruebaUsuario.php" >PRUEBA USUARIOS |</a>
        <a href="<?php echo $path ?>../PHPGRUPO5/PruebaAfiliado.php" >PRUEBA AFILIADO |</a>
        <a href="<?php echo $path ?>../PHPGRUPO5/PruebaAdmin.php" >PRUEBA ADMINISTRADOR |</a>
    </nav>
   <span>EN CUANTO A LO DE VENTA Y PAGOS, SERIA APARENTAR COMO SI SE ESCOJIESE UN JUEGO
    Y SIMULAR LA COMPRA.
   </span>
</div>
