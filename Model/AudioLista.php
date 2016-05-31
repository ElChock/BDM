<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AudioLista
 *
 * @author Ayrton
 */
class AudioLista {
        
    function getIdAudio() {
        return $this->idAudio;
    }

    function getIdLista() {
        return $this->idLista;
    }

    function setIdAudio($idAudio) {
        $this->idAudio = $idAudio;
    }

    function setIdLista($idLista) {
        $this->idLista = $idLista;
    }

        private $idAudio;
    private $idLista;
    //put your code here
}
