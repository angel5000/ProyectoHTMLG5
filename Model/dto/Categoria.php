<?php

class Categoria{
    private $id,$Categoria;
    function __construct() {
        
    }
    function __construct($id,$Categoria) {
        $this->id = $id;
        $this->Categoria = $Categoria;
    }
    public function GetId($id) {
        $this->id = $id;
    }

    public function setCategoria($categoria ) {
        $this->categoria  = $categoria ;
    }

    public function getCategoria() {
        return $this->categoria ;
    }
}