<?php
class IndexController {  

    public function index(){
        if(!empty($_GET['p'])){
            $page =  $_GET['p']; // limpiar datos
            // flujo de ventanas
            require_once HEADER;
            require_once SUBHEADER;
            require_once 'view/estaticas/'.$page.'.php';
            require_once FOOTER;
            exit();
        }
        
        if(!empty($_GET['b'])){
            $page =  $_GET['b']; // limpiar datos
            // flujo de ventanas
            require_once HEADER;
            require_once SUBHEADER;
            require_once 'view/ListJuegos/'.$page.'.php';
            require_once FOOTER;
        }
        
        else{
               
          require_once 'view/homeView.php'; //mostrando la vista de home de la aplicacion
         
        }
    }
 
    
}
?>