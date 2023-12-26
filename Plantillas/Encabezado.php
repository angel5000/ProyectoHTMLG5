
<style>
    a{
        color: #fff;
        text-decoration: none;
        font-family: 'Times New Roman', Times, serif;
     
        
    }
    nav{
       
        background-color: #121212;
    }
    h5{
        color: #fff;
    }
</style>
<div style="margin-bottom: 20px">

    <h3>
        <?php echo isset($titulo)?$titulo:"LISTA DE ENLACES";  ?>
    </h3>

    <nav>
        <?php
        $path="";
        if($_SERVER['PHP_SELF']!="/Encabezado.php"){
            $path="../";
        }
        
        ?>
        <a   
       href="<?php echo $path ?>../PHPGRUPO5/index.html">Index| </a>
       <a   
       href="<?php echo $path ?>../PHPGRUPO5/Cliente.php">Cliente | </a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Compra.php" >Compra | </a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Compra.php" >Venta | </a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Compra.php" >Administrador | | </a> 
       
        <a href="<?php echo $path ?>../PHPGRUPO5/Pruebas.php" >PRUEBA CLIENTE |</a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Compra.php" >PRUEBA AFILIADO |</a>
        <a href="<?php echo $path ?>../PHPGRUPO5/Compra.php" >PRUEBA ADMINISTRADOR |</a>
    </nav>
    </nav>
    </nav>
    </nav>
</div>
