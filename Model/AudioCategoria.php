<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AudioCategoria
 *
 * @author Ayrton
 */
class AudioCategoria {
    
    function getIdAudio() {
        return $this->idAudio;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function setIdAudio($idAudio) {
        $this->idAudio = $idAudio;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

        
    function __construct($idAudio, $idCategoria) {
        $this->idAudio = $idAudio;
        $this->idCategoria = $idCategoria;
    }

    private $idAudio;
    private $idCategoria;
    //put your code here
}
