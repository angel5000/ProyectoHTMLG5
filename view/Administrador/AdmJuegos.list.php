
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
    class="btn btn-primary">Buscar Juego</button>
   
    </form>      
    
</div>
 
  
</form>



<div class="containerjg">
<table class="table">
  <thead>
    <tr>
      <th scope="colid">ID</th>
      <th scope="colnm">NombreJuego</th>
      <th scope="colds">Descripcion</th>
      <th scope="colpr">Precio</th>
      <th scope="col">Categoria</th>
      <th scope="col">Plataforma</th>
      <th scope="col">Desarrollador</th>
      <th scope="col">FechaLanzamiento</th>
      <th scope="col">Modojuego</th>
      <th scope="col">Puntuacion</th>
      <th scope="col">Estado</th>
      <th scope="col"> .</th>
      <th scope="col"> .</th>
     
    </tr>
  </thead>
  <tbody id ="tabladtj">
  <?php        
 
                foreach ($resultados as $fila) {
                  ?>


    <tr>
    <td id ="columid"><?php echo $fila->idJuego;?></td>
    <td><?php echo $fila->NombJuego;?></td>
    <td><?php echo $fila->Descripcion;?></td>
    <td><?php echo $fila->precio;?></td>
    <td><?php echo $fila->Categoria;?></td>
    <td><?php echo $fila->Plataformas;?></td>
    <td><?php echo $fila->Desarrollador;?></td>
    <td><?php echo $fila->Fecha_Lanzamiento;?></td>
    <td><?php echo $fila->ModoJuego;?></td>
    <td><?php echo $fila->Puntuacion;?></td>
    <td><?php echo $fila->Estado;?></td>
    <td>
   
    <button type="button" class="btn btn-primary" onclick="loadUpdatePage(<?php echo $fila->idCliente; ?>)">
    Actualizar
</button>
</td>
<td>
<a onclick="if(!confirm('Esta seguro que desea Inhabilitar?'))return false;" 
                    href="index.php?c=Juegos&f=delete&id=<?php echo $fila->idJuego; ?>">
    <button type="submit" class="btn btn-danger"  >
                    <i class="fas fa-trash-alt"></i>Inhabilitar</button>
                </a>

                <a onclick="if(!confirm('Esta seguro que desea habilitar?'))return false;" 
                    href="index.php?c=Juegos&f=Habilitar&id=<?php echo $fila->idJuego; ?>">
    <button type="submit" class="btn btn-success"  >
                    <i class="fas fa-trash-alt"></i>Habilitar</button>
                </a>

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