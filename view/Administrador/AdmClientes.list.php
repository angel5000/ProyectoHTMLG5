
<?php
   
 require_once HEADERADMIN;
   

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="autor" content="ALVARADO TRIANA">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='lib/sweet-alert.css'>

  </head>
<body>
  <div>
<h2><?php echo $titulos?></h2>

  </div>  
  <form >
  <div class="mb-3">
    <label  class="form-label">Buscar</label>
    <input type="text" class="form-control" id="txtbuscar" >
    <button  type="button" onclick="buscarCliente()" 
    class="btn btn-primary">Buscar Cliente</button>
    <button id="btnuevo" type="button" onclick="nuevo()" 
    class="btn btn-primary">Registrar Cliente</button>
    </form>      
    <form >
  
    </form>
</div>
 
  
</form>



<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="colid">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">FechaRegistro</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody id ="tabladt">
  <?php        
 
                foreach ($resultados as $fila) {
                  ?>


    <tr>
    <td id ="columid"><?php echo $fila->idCliente;?></td>
    <td><?php echo $fila->nombre;?></td>
    <td><?php echo $fila->apellido;?></td>
    <td><?php echo $fila->email;?></td>
    <td><?php echo $fila->fechaRegistro;?></td>
    <td>
   
    <button type="button" class="btn btn-primary" onclick="loadUpdatePage(<?php echo $fila->idCliente; ?>)">
    Actualizar
</button>
    <button type="submit" class="btn btn-danger"  onclick="eliminar(<?php echo $fila->idCliente; ?>)">
                    <i class="fas fa-trash-alt"></i>Eliminar</button>
    </td>
    </tr>  
    
                <?php } ?>
    
  </tbody>
</table>

</div>
<div id="formactu"></div>


</body>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
function nuevo() {
    // Realizar una soicitud AJAX para cargar el contenido de update.php
    $.ajax({
        type: 'GET',
        url: 'index.php',
        data: {
            c: 'Cliente',
            f: 'formnuevo'
           
        },
        success: function(response) {
            // Colocar el contenido en el div con id 'updateContent'
            $('#formactu').html(response);
        },
        error: function() {
            alert('Error al cargar la página de actualización.');
        }
    });
}











function loadUpdatePage(idCliente) {
    // Realizar una solicitud AJAX para cargar el contenido de update.php
    $.ajax({
        type: 'GET',
        url: 'index.php',
        data: {
            c: 'Cliente',
            f: 'view_edit',
            id: idCliente
        },
        success: function(response) {
            // Colocar el contenido en el div con id 'updateContent'
            $('#formactu').html(response);
        },
        error: function() {
            alert('Error al cargar la página de actualización.');
        }
    });
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">



</script>
<script>
  function eliminar(idCliente){
    if (confirm('Esta seguro de eliminar este cliente?'+idCliente)) {
    
    
    // Enviar el valor al servidor usando AJAX
    $.ajax({
      type: "POST",
      url:'index.php',  

      data: {
            c: 'Cliente',
            f: 'delete',
           id: idCliente
        },

      success: function(response) {
      
           Swal.fire({
              title: 'Cliente Eliminado con Exito!',
              icon: 'success'
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = 'index.php?c=Cliente&f=index&=AdmClientes';
              }else{
                  window.location.href = 'index.php?c=Cliente&f=index&=AdmClientes';
              }
          });
           


      }
    });
      }



  }

  function buscarCliente() {
    // Obtener el valor del campo de texto
    var nombreCliente = document.getElementById("txtbuscar").value;

    // Enviar el valor al servidor usando AJAX
    $.ajax({
        type: "POST",
        url: "index.php",  
        data: { 
            c: 'Cliente',
            f: 'Buscar',
            id: nombreCliente
        },
        success: function(response) {
           
            alert(response+nombreCliente);
            $("#tabladt").empty();

          
            $.each(response, function(index, fila) {
                var html = "<tr>";
                html += "<td>" + fila.idCliente + "</td>";
                html += "<td>" + fila.nombre + "</td>";
                html += "<td>" + fila.apellido + "</td>";
                html += "<td>" + fila.email + "</td>";
                html += "<td>" + fila.fechaRegistro + "</td>";
                html += "<td>";
    html += "<button type='button' class='btn btn-primary' onclick='loadUpdatePage(" + fila.idCliente + ")'>Actualizar</button>";
    html += "<button type='button' class='btn btn-danger' onclick='eliminar(" + fila.idCliente + ")'><i class='fas fa-trash-alt'></i>Eliminar</button>";
    html += "</td>";
                html += "</tr>";

                $("#tabladt").append(html);
            });
        }
    });
}





</script>

<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>;


</html>
<?php require_once FOOTERADMIN; ?>