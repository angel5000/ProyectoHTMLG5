<?php

class Juegos extends Categoria implements DesarrolladorInterface{
    private $id, $NombJuego , $descripcion, $precio, $categoria, $Plataforma,$Desarrollador, $FechaLanzamineto
    ,$ModoJuego, $imagen, $Estado; 

   
    function __construct(
   )  {
   

    }
   
    public function getIdj() {
        return $this->id;
    }
    public function setIdj($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }


    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }
   
    public function setDesarrollador($Desarrollador) {
        $this->Desarrollador  = $Desarrollador ;
    }

    public function getDesarrollador() {
        return $this->Desarrollador;
    }

    
    public function setFechaLanzamineto($FechaLanzamineto) {
        $this->FechaLanzamineto = $FechaLanzamineto;
    }

    public function getFechaLanzamineto() {
        return $this->FechaLanzamineto;
    }

    public function setModoJuego($ModoJuego) {
        $this->ModoJuego = $ModoJuego;
    }
    public function setImange($imagen) {
        $this->imagen = $imagen;
    }

    public function getModoJuego() {
        return $this->ModoJuego;
    }
    
    public function getIddev() {
        return $this->desarrollador->getIddev();
    }

    public function getNombreDev() {
        return $this->desarrollador->getNombreDev();
    }

    public function getCorreo() {
        return $this->desarrollador->getCorreo();
    }

    public function getDireccion() {
        return $this->desarrollador->getDireccion();
    }
    public function getImange() {
        return $this->imagen->getImangen();
    }

    public function getEstado() {
        return $this->Estado;
    }
    
    public function setEstado($Estado) {
        $this->Estado = $Estado;
    }
    
    



   
}