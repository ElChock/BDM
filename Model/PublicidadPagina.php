<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of publicidadPagina
 *
 * @author Ayrton
 */
class publicidadPagina {  
    function __construct($idPublicidad, $idPagina, $horaInicio, $horaFin, $dia) {
        $this->idPublicidad = $idPublicidad;
        $this->idPagina = $idPagina;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
        $this->dia = $dia;
    }

    
    function getIdPublicidad() {
        return $this->idPublicidad;
    }

    function getIdPagina() {
        return $this->idPagina;
    }

    function getHoraInicio() {
        return $this->horaInicio;
    }

    function getHoraFin() {
        return $this->horaFin;
    }

    function getDia() {
        return $this->dia;
    }

    function setIdPublicidad($idPublicidad) {
        $this->idPublicidad = $idPublicidad;
    }

    function setIdPagina($idPagina) {
        $this->idPagina = $idPagina;
    }

    function setHoraInicio($horaInicio) {
        $this->horaInicio = $horaInicio;
    }

    function setHoraFin($horaFin) {
        $this->horaFin = $horaFin;
    }

    function setDia($dia) {
        $this->dia = $dia;
    }

    private $idPublicidad;
    private $idPagina;
    private $horaInicio;
    private $horaFin;
    private $dia;
}
