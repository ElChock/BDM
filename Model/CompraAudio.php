<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompraAudio
 *
 * @author Ayrton
 */
class CompraAudio {
    function getNumeroTarjeta() {
        return $this->numeroTarjeta;
    }

    function getCVC() {
        return $this->CVC;
    }

    function getTipoTarjeta() {
        return $this->tipoTarjeta;
    }

    function setNumeroTarjeta($numeroTarjeta) {
        $this->numeroTarjeta = $numeroTarjeta;
    }

    function setCVC($CVC) {
        $this->CVC = $CVC;
    }

    function setTipoTarjeta($tipoTarjeta) {
        $this->tipoTarjeta = $tipoTarjeta;
    }

        function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdAudio() {
        return $this->idAudio;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getImpuesto() {
        return $this->impuesto;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getIdTarjeta() {
        return $this->idTarjeta;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdAudio($idAudio) {
        $this->idAudio = $idAudio;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setImpuesto($impuesto) {
        $this->impuesto = $impuesto;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setIdTarjeta($idTarjeta) {
        $this->idTarjeta = $idTarjeta;
    }

        

    //put your code here
    private $idUsuario;
    private $idAudio;
    private $precio;
    private $impuesto;
    private $fecha;
    private $numeroTarjeta;
    private $CVC;
    private $tipoTarjeta;
    
         
}
