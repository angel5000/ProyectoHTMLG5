<?php

class Clientes{
    private $id,$nombre, $apellido, $email, $rol, $fechaRegistro;
    function __construct() {
       /*$this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
       
        $this->fechaRegistro = $fechaRegistro;*/
    }

    // Métodos Getter
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    

    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    // Métodos Setter
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    

    public function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

}
