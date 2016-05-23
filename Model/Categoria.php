<?php

class Categoria {
    
    function __construct($idCategoria, $nombreCategoria) {
        $this->idCategoria = $idCategoria;
        $this->nombreCategoria = $nombreCategoria;
    }

    
    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getNombreCategoria() {
        return $this->nombreCategoria;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setNombreCategoria($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }

    private $idCategoria;
    private $nombreCategoria;
}
