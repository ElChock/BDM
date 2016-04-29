<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Publicidad
 *
 * @author Ayrton
 */
class Publicidad {
    
    function getIdPublicidad() {
        return $this->idPublicidad;
    }

    function getPath() {
        return $this->path;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getIdPagina() {
        return $this->idPagina;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setIdPublicidad($idPublicidad) {
        $this->idPublicidad = $idPublicidad;
    }

    function setPath($path) {
        $this->path = $path;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIdPagina($idPagina) {
        $this->idPagina = $idPagina;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

        
    function __construct($idPublicidad, $path, $nombre, $idPagina, $idUsuario) {
        $this->idPublicidad = $idPublicidad;
        $this->path = $path;
        $this->nombre = $nombre;
        $this->idPagina = $idPagina;
        $this->idUsuario = $idUsuario;
    }

    //put your code here
    private $idPublicidad;
    private $path;
    private $nombre;
    private $idPagina;
    private $idUsuario;
}
