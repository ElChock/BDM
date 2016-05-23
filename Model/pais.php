<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pais
 *
 * @author Ayrton
 */
class pais {  
    function getIdPais() {
        return $this->idPais;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getPais() {
        return $this->pais;
    }

    function getImpuesto() {
        return $this->impuesto;
    }

    function setIdPais($idPais) {
        $this->idPais = $idPais;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setImpuesto($impuesto) {
        $this->impuesto = $impuesto;
    }

        
    function __construct($idPais, $codigo, $pais, $impuesto) {
        $this->idPais = $idPais;
        $this->codigo = $codigo;
        $this->pais = $pais;
        $this->impuesto = $impuesto;
    }

    //put your code here
    private $idPais;
    private $codigo;
    private $pais;
    private $impuesto;
}
