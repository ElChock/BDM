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

        
    function __construct($idUsuario, $idAudio, $precio, $impuesto, $fecha, $idTarjeta) {
        $this->idUsuario = $idUsuario;
        $this->idAudio = $idAudio;
        $this->precio = $precio;
        $this->impuesto = $impuesto;
        $this->fecha = $fecha;
        $this->idTarjeta = $idTarjeta;
    }

    //put your code here
    private $idUsuario;
    private $idAudio;
    private $precio;
    private $impuesto;
    private $fecha;
    private $idTarjeta;
         
}
