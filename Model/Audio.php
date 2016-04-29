<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Audio
 *
 * @author Ayrton
 */
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

        
    function __construct($idAudio, $idUsuario, $titulo, $precio, $path) {
        $this->idAudio = $idAudio;
        $this->idUsuario = $idUsuario;
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->path = $path;
    }

    private $idAudio;
    private $idUsuario;
    private $titulo;
    private $precio;
    private $path;
    //put your code here
}
