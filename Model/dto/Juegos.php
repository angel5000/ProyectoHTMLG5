<?php

class Juegos extends Categoria implements DesarrolladorInterface{
    private $id, $nombre, $descripcion, $precio, $categoria, $Plataforma,$Desarrollador, $FechaLanzamineto
    $ModoJuego;

    function __construct() {
        
    }
    function __construct($id, $nombre, $descripcion, $precio, $categoria, $Plataforma,$Desarrollador, $FechaLanzamineto
    $ModoJuego)  {
        parent::__construct($categoria);
        $this->id = $id;
        this->nombre = $nombre;
        this->descripcion =  $descripcion;
        this->precio = $precio;
        this->Plataforma = $Plataforma;
        this->Desarrollador = $Desarrollador;
        this->FechaLanzamineto = $FechaLanzamineto;
        this->ModoJuego = $ModoJuego;

    }
   
    public function getId() {
        return $this->id;
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

    public function getModoJuego() {
        return $this->ModoJuego;
    }
    
    public function getId() {
        return $this->desarrollador->getId();
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





    // Methods get y set parametrizados
    public function __set($nombre, $valor) {
        // Verifica que la propiedad exista
        if (property_exists('Categoria', $nombre)) {
            $this->$nombre = $valor;
        } else {
            echo $nombre . " No existe.";
        }
    }

    public function __get($nombre) {
        // Verifica que exista la propiedad
        if (property_exists('Categoria', $nombre)) {
            return $this->$nombre;
        }
// Retorna null si no existe
        return NULL;
    }
}