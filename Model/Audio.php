<?php

class Audio {
    
    function getIdAudio() {
        return $this->idAudio;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getPath() {
        return $this->path;
    }
    
    function getfechaAlta() {
        return $this->fechaAlta;
    }
    
    function getnombreUsuario() {
        return $this->nombreUsuario;
    }

    function setIdAudio($idAudio) {
        $this->idAudio = $idAudio;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setPath($path) {
        $this->path = $path;
    }

    function setnombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }
    
    function setfechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }
        
    function __construct($idAudio, $idUsuario, $titulo, $precio, $path, $fechaAlta, $nombreUsuario) {
        $this->idAudio = $idAudio;
        $this->idUsuario = $idUsuario;
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->path = $path;
        $this->fechaAlta=$fechaAlta;
        $this->nombreUsuario = $nombreUsuario;
    }

    private $idAudio;
    private $idUsuario;
    private $titulo;
    private $precio;
    private $path;
    private $fechaAlta;
    private $nombreUsuario;
    //put your code here
}