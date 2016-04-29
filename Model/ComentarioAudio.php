<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComentarioAudio
 *
 * @author Ayrton
 */
class ComentarioAudio {
    
    function getIdComentario() {
        return $this->idComentario;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdAudio() {
        return $this->idAudio;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getComentario() {
        return $this->comentario;
    }

    function setIdComentario($idComentario) {
        $this->idComentario = $idComentario;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdAudio($idAudio) {
        $this->idAudio = $idAudio;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

        
    function __construct($idComentario, $idUsuario, $idAudio, $fecha, $comentario) {
        $this->idComentario = $idComentario;
        $this->idUsuario = $idUsuario;
        $this->idAudio = $idAudio;
        $this->fecha = $fecha;
        $this->comentario = $comentario;
    }

    //put your code here
    private $idComentario;
    private $idUsuario;
    private $idAudio;
    private $fecha;
    private $comentario;
}
