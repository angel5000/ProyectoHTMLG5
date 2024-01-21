
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="autor" content="ALVARADO TRIANA">
    <title>Document</title>
    <!--<link rel="stylesheet" href="stylegenero.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div>
<h2>Clientes</h2>

  </div>  
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">FechaRegistro</th>
    </tr>
  </thead>
  <tbody>
  <?php        
 
                foreach ($resultados as $fila) {
                  ?>


    <tr>
    <td><?php echo $fila->idCliente;?></td>
    <td><?php echo $fila->nombre;?></td>
    <td><?php echo $fila->apellido;?></td>
    <td><?php echo $fila->email;?></td>
    <td><?php echo $fila->fechaRegistro;?></td>
    </tr>  
                  
                <?php } ?>
    
  </tbody>
</table>
</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>