<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lista
 *
 * @author Ayrton
 */
class lista {  
    function getIdlista() {
        return $this->idlista;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setIdlista($idlista) {
        $this->idlista = $idlista;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

        
    function __construct($idlista, $imagen, $titulo, $idUsuario) {
        $this->idlista = $idlista;
        $this->imagen = $imagen;
        $this->titulo = $titulo;
        $this->idUsuario = $idUsuario;
    }

    //put your code here
    
    private $idlista;
    private $imagen;
    private $titulo;
    private $idUsuario;
}
