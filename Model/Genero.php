<?php

class Genero {
    
    function getIdGenero() {
        return $this->idGenero;
    }

    function getNombreGenero() {
        return $this->nombreGenero;
    }

    function setIdGenero($idGenero) {
        $this->idGenero = $idGenero;
    }

    function setNombreGenero($nombreGenero) {
        $this->nombreGenero = $nombreGenero;
    }

        
    function __construct($idGenero, $nombreGenero) {
        $this->idGenero = $idGenero;
        $this->nombreGenero = $nombreGenero;
    }

    //put your code here
    private $idGenero;
    private $nombreGenero;
}