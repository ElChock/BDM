<?php

class ComentarioAudio {
    
    function getIdComentario() {
        return $this->idcomentario;
    }

    function getIdUsuario() {
        return $this->idusuario;
    }

    function getIdAudio() {
        return $this->idaudio;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getComentario() {
        return $this->comentario;
    }
    
    function getNombreUsurio() {
        return $this->nombreusuario;
    }

    function setIdComentario($idcomentario) {
        $this->idcomentario = $idcomentario;
    }

    function setIdUsuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setIdAudio($idaudio) {
        $this->idaudio = $idaudio;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }
    
    function setNombreUsuario($nombreusuario) {
        $this->nombreusuario = $nombreusuario;
    }

        
    function __construct($idcomentario, $idusuario, $idaudio, $fecha, $comentario, $nombreusuario) {
        $this->idcomentario = $idcomentario;
        $this->idUsuario = $idusuario;
        $this->idAudio = $idaudio;
        $this->fecha = $fecha;
        $this->comentario = $comentario;
        $this->nombreUsuario = $nombreusuario;
    }

    private $idcomentario;
    private $idusuario;
    private $idaudio;
    private $fecha;
    private $comentario;
    private $nombreusuario;
}