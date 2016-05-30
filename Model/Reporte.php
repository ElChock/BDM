<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reporte
 *
 * @author Ayrton
 */
class Reporte {
    
    function getUltimosNumeroTarjeta() {
        return $this->ultimosNumeroTarjeta;
    }

    function setUltimosNumeroTarjeta($ultimosNumeroTarjeta) {
        $this->ultimosNumeroTarjeta = $ultimosNumeroTarjeta;
    }

        
    function getNombreCategoria() {
        return $this->nombreCategoria;
    }

    function getTitulo() {
        return $this->titulo;
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

    function getCorreo() {
        return $this->correo;
    }

    function getPais() {
        return $this->pais;
    }

    function getTipoTarjeta() {
        return $this->tipoTarjeta;
    }

    function setNombreCategoria($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
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

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setTipoTarjeta($tipoTarjeta) {
        $this->tipoTarjeta = $tipoTarjeta;
    }

        //put your code here
    private $nombreCategoria;
    private $titulo;
    private $precio;
    private $impuesto;
    private $fecha;
    private $correo;
    private $pais;
    private $tipoTarjeta;
    private $ultimosNumeroTarjeta;
    
}
