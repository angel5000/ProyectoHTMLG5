<?php
class Desarrollador implements DesarrolladorInterface{
private $id, $nombreDev, $Correo,$Direccion;

    function __construct() {
        
    }
    function __construct($id, $nombreDev,$Correo,$Direccion )  {
      
        $this->id = $id;
        $this->nombreDev = $nombreDev;
        $this->Correo =  $Correo;
        $this->Direccion= $Direccion;
       

    }
    public function getIddev() {
        return $this->id;
    }

    public function setIddev($id) {
         $this->id=$id;
    }
    public function setNombredev($nombreDev ) {
        $this->nombreDev  = $nombreDev ;
    }

    public function getNombredev() {
        return $this->nombreDev ;
    }

    public function setCorreo($Correo) {
        $this->Correo  = $Correo ;
    }

    public function getCorreo() {
        return $this->Correo ;
    }

    public function setDireccion($Direccion ) {
        $this->Direccion  = $Direccion ;
    }

    public function getDireccion() {
        return $this->Direccion ;
    }




}