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
}