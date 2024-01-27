<?php
class AdminController {
public function Admin() { 
      //comunica con el modelo (enviar datos o obtener datos)
    
 
      if(!empty($_GET['lg'])){
        $page =  $_GET['lg']; // limpiar datos
      
        require_once 'Model/dao/'.$page.'.php';
        
       
    }
    if(!empty($_GET['l'])){
        $page =  $_GET['l']; // limpiar datos
        // flujo de ventanas
        require_once HEADERADMIN;
       // require_once SUBHEADER;
        require_once 'view/'.$page.'.php';
        require_once FOOTERADMIN;
     //   exit();
    }
   
    
    else{
        require_once 'view/Administrador.php';
    }
      
      
}
    }
