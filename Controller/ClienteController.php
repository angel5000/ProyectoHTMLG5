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
      $titulo="Buscar Juegos";
      require_once LCLIENTE.'list.php';

      
      
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
           //echo $msj;
              /*if (!$exito) {
                  $msj = "No se pudo realizar la actualizacion";
                  $color = "danger";
                 
              }
               if(!isset($_SESSION)){ session_start();};
              $_SESSION['mensaje'] = $msj;
              $_SESSION['color'] = $color;*/
              
          //llamar a la vista
        
        
          // header('Location:index.php?c=Cliente&f=index&=AdmClientes');
          } 
        }

}