<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pagina
 *
 * @author Ayrton
 */
class Pagina {
    
    function getIdPagina() {
        return $this->idPagina;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdPagina($idPagina) {
        $this->idPagina = $idPagina;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

        
    function __construct($idPagina, $nombre) {
        $this->idPagina = $idPagina;
        $this->nombre = $nombre;
    }

    //put your code here
    private $idPagina;
    private $nombre;
    
}
