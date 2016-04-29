<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author Ayrton
 */
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
    //put your code here
}
