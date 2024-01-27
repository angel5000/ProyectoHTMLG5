<?php


require_once 'model/dao/ClientesDAO.php';
require_once 'model/dto/Cliente.php';
//require_once 'model/dao/CategoriasDAO.php';

class ClienteController {
    private $model;
    
    public function __construct() {// constructor
        $this->model = new ClientesDAO();
    }

    // funciones del controlador
    public function index() { 
      //comunica con el modelo (enviar datos o obtener datos)
      $resultados = $this->model->selectAll("");
      // comunicarnos a la vista
      $titulos="Clientes";
      require_once LCLIENTE.'list.php';

      exit();
      
    }
    public function formnuevo(){
        require_once LCLIENTE.'new.php';
    }
    public function nuevo(){
        
        if (isset($_SERVER['REQUEST_METHOD'])&&$_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
          // verificaciones
                 //if(!isset($_POST['codigo'])){ header('');}
              // leer parametros
              $prod = new Clientes();
           
              $prod->setNombre(htmlentities($_POST['txtnombre']));
              $prod->setApellido(htmlentities($_POST['txtapellido']));
              $prod->setEmail(htmlentities($_POST['txtemail']));
            
              $exito = $this->model->new($prod);
             
              if ($exito==true){
              echo" 
         <link rel='stylesheet' type='text/css' href='lib/sweet-alert.css'>
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>;
         <script>
         Swal.fire({
            title: 'Cliente Registrado!',
            icon: 'success'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php?c=Cliente&f=index&=AdmClientes';
            }else{
                window.location.href = 'index.php?c=Cliente&f=index&=AdmClientes';
            }
        });
         
           </script>
           ";
    }
          
          } 
        }
    public function view_edit(){
        //leer parametro
        $id= $_GET['id']; // verificar, limpiar
        //comunicarse con el modelo de productos
       $prod = $this->model->selectOne($id);
       //comunicarse con el modelo de categorias
       $modeloCat = new ClientesDAO();
       $Cliente= $modeloCat->selectAll();
   
       // comunicarse con la vista
      /// $titulo="Editar producto";
      ob_start();
    require_once LCLIENTE.'update.php';
    $updateContent = ob_get_clean();

    // Devolver el contenido como respuesta AJAX
    echo $updateContent;
    exit();
   
     }
     public function edit(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
          // verificaciones
                 //if(!isset($_POST['codigo'])){ header('');}
              // leer parametros
              $prod = new Clientes();
              $prod->setId(htmlentities($_POST['txtid2']));
              $prod->setNombre(htmlentities($_POST['txtnombre']));
              $prod->setApellido(htmlentities($_POST['txtapellido']));
              $prod->setEmail(htmlentities($_POST['txtemail']));
             /* $fechaActual = new DateTime('NOW');
              $prod->setfechaRegistro($fechaActual->format('Y-m-d H:i:s'));*/
              $exito = $this->model->update($prod);
             
              if ($exito==true){
              echo" 
         <link rel='stylesheet' type='text/css' href='lib/sweet-alert.css'>
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>;
         <script>
         Swal.fire({
            title: 'Cliente Actualizado!',
            icon: 'success'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php?c=Cliente&f=index&=AdmClientes';
            }else{
                window.location.href = 'index.php?c=Cliente&f=index&=AdmClientes';
            }
        });
         
           </script>
           ";
    }
          
          } 
        }

        public function delete(){
            //leeer parametros
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
           if(isset($_POST['id'])){
            $prod = new Clientes();
       
             $idCliente = htmlentities($_POST['id']);
           
             $prod->setId($idCliente);
               $exito = $this->model->delete($prod);
                     var_dump($exito);
               if ($exito==true){
                echo" 
           <link rel='stylesheet' type='text/css' href='lib/sweet-alert.css'>
           <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>;
           <script>
           Swal.fire({
              title: 'Cliente Actualizado!',
              icon: 'success'
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = 'index.php?c=Cliente&f=index&=AdmClientes';
              }else{
                  window.location.href = 'index.php?c=Cliente&f=index&=AdmClientes';
              }
          });
           
             </script>
             ";
             echo"  <script>alert('sss');</script>";
      }
                  if (!$exito) {
                    echo"  <script>alert('sss');</script>";
                     // $msj = "No se pudo eliminar la actualizacion";
                   //   $color = "danger";
                  }
              //     if(!isset($_SESSION)){ session_start();};
               //   $_SESSION['mensaje'] = $msj;
                //  $_SESSION['color'] = $color;
              //llamar a la vista
              //  header('Location:index.php?c=productos&f=index');
        }
    }
  

}
public function search(){
  // lectura de parametros enviados
  $parametro = (!empty($_POST["b"]))?htmlentities($_POST["b"]):"";
  //comunica con el modelo (enviar datos o obtener datos)
   $resultados = $this->model->selectAll($parametro);
  // comunicarnos a la vista
//  $titulo="Buscar productos";
//  require_once LCLIENTE.'list.php';
}
public function Buscar(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['id'])){
            $prod = new Clientes();
            $Nombre = htmlentities($_POST['id']);
            $prod->setNombre($Nombre);
            $resultado = $this->model->Search($prod);
           // $resultados = $this->model->selectAll($resultado);
            
           // var_dump($resultado);
          //  require_once LCLIENTE.'list.php';
          header('Content-Type: application/json');
          echo json_encode($resultado);
          exit;
        }
       
    }
}

}