<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HorarioPublicidad
 *
 * @author Ayrton
 */
class HorarioPublicidad {
    
    function __construct($idPublicidad, $dias, $horaFin, $horaInicio) {
        $this->idPublicidad = $idPublicidad;
        $this->dias = $dias;
        $this->horaFin = $horaFin;
        $this->horaInicio = $horaInicio;
    }

    function getHoraInicio() {
        return $this->horaInicio;
    }

    function setHoraInicio($horaInicio) {
        $this->horaInicio = $horaInicio;
    }

    function getIdPublicidad() {
        return $this->idPublicidad;
    }

    function getDias() {
        return $this->dias;
    }

    function getHoraFin() {
        return $this->horaFin;
    }

    function setIdPublicidad($idPublicidad) {
        $this->idPublicidad = $idPublicidad;
    }

    function setDias($dias) {
        $this->dias = $dias;
    }

    function setHoraFin($horaFin) {
        $this->horaFin = $horaFin;
    }

        //put your code here
    private $idPublicidad;
    private $dias;
    private $horaFin;
    private $horaInicio;
}
