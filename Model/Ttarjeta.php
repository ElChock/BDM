<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tarjeta
 *
 * @author Ayrton
 */
class tarjeta {
            //put your code here
    private $idTarjeta;
    private $idUsuario;
    private $numeroTarjeta;
    private $tipoTarjeta;
    private $cvc;
    
    function __construct($idTarjeta, $idUsuario, $numeroTarjeta, $tipoTarjeta, $cvc) {
        $this->idTarjeta = $idTarjeta;
        $this->idUsuario = $idUsuario;
        $this->numeroTarjeta = $numeroTarjeta;
        $this->tipoTarjeta = $tipoTarjeta;
        $this->cvc = $cvc;
    }

    
    function getIdTarjeta() {
        return $this->idTarjeta;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNumeroTarjeta() {
        return $this->numeroTarjeta;
    }

    function getTipoTarjeta() {
        return $this->tipoTarjeta;
    }

    function getCvc() {
        return $this->cvc;
    }

    function setIdTarjeta($idTarjeta) {
        $this->idTarjeta = $idTarjeta;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNumeroTarjeta($numeroTarjeta) {
        $this->numeroTarjeta = $numeroTarjeta;
    }

    function setTipoTarjeta($tipoTarjeta) {
        $this->tipoTarjeta = $tipoTarjeta;
    }

    function setCvc($cvc) {
        $this->cvc = $cvc;
    }


}
