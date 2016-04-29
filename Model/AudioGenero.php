<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AudioGenero
 *
 * @author Ayrton
 */
class AudioGenero {
    
    function __construct($idAudio, $idGenero) {
        $this->idAudio = $idAudio;
        $this->idGenero = $idGenero;
    }

    
    function getIdAudio() {
        return $this->idAudio;
    }

    function getIdGenero() {
        return $this->idGenero;
    }

    function setIdAudio($idAudio) {
        $this->idAudio = $idAudio;
    }

    function setIdGenero($idGenero) {
        $this->idGenero = $idGenero;
    }

        private $idAudio;
    private $idGenero;
    //put your code here
}
