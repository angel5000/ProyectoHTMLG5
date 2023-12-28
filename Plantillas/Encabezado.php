
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
        $path="";
        if($_SERVER['PHP_SELF']!="/Encabezado.php"){
            $path="../";
        }
        
        ?>
        <a   
       href="/PHPGRUPO5/index.php">Index| </a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Descripcion.html" >Compra | </a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Venta.php" >Venta | </a>
        <a href="<?php echo $path ?>../PHPGRUPO5/LoginAdmin.php" >Administrador | | </a> 
       
        <a href="<?php echo $path ?>../PHPGRUPO5/Pruebas.php" >PRUEBA USUARIOS |</a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Compra.php" >PRUEBA AFILIADO |</a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Compra.php" >PRUEBA ADMINISTRADOR |</a>
    </nav>
   
</div>
