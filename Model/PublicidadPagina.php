<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of publicidadPagina
 *
 * @author Ayrton
 */
class publicidadPagina {
    
    function __construct($idPublicidad, $idPagina) {
        $this->idPublicidad = $idPublicidad;
        $this->idPagina = $idPagina;
    }

    
    function getIdPublicidad() {
        return $this->idPublicidad;
    }

    function getIdPagina() {
        return $this->idPagina;
    }

    function setIdPublicidad($idPublicidad) {
        $this->idPublicidad = $idPublicidad;
    }

    function setIdPagina($idPagina) {
        $this->idPagina = $idPagina;
    }

        //put your code here
    private $idPublicidad;
    private $idPagina;
}
