
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="autor" content="ALVARADO TRIANA">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    
<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h2 id="h2actu">Actualizar datos</h2>
  <div>


  </div>  
  <div id="idform">
            <form action="index.php?c=Cliente&f=edit" method="POST" name="formProdNuevo" id="formactua">
               <div id="elemform">
          <div>
    <input type="hidden" name="txtid2" value="<?php echo $prod->idCliente;?>">
            <label>Id:</label>
                <input type="text" name="txtid" readonly 
                value="<?php echo $prod->idCliente;?> ">
    </div>
                
         <div><label>Nombres:</label>
     <input type="text" name="txtnombre" value="<?php echo $prod->nombre;?>" id="txtbox">
       </div>
          <div> <label>Apellidos:</label>
      <input type="text" name="txtapellido" value="<?php echo $prod->apellido;?>"id="txtbox">
                </div>
                <div> <label>CorreoElectronico:</label>
      <input type="text" name="txtemail" value="<?php echo $prod->email;?>"id="txtbox">
                </div>
                
                <div >
                <input type="submit" value="Actualizar" class="btn btn-primary" id="enviar" >
                </div>
                </div>
            </form>
        </div>

</div>
 
  
</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        
            <script>
          function clickb(){
          Swal.fire("SweetAlert2 is working!");
}
            </script>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>;
</html>