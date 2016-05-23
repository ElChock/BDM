<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Ayrton
 */
class Usuario {  
    function __construct($idUsuario, $correo, $contraseña, $nombre, $apellidoMaterno, $apellidoPaterno, $alias, $fotoPerfil, $fotoPortada, $fechaNacimiento, $calle, $numero, $codigoPostal, $colonia, $idPais, $genero, $tipoUsuario) {
        $this->idUsuario = $idUsuario;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->nombre = $nombre;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->alias = $alias;
        $this->fotoPerfil = $fotoPerfil;
        $this->fotoPortada = $fotoPortada;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->calle = $calle;
        $this->numero = $numero;
        $this->codigoPostal = $codigoPostal;
        $this->colonia = $colonia;
        $this->idPais = $idPais;
        $this->genero = $genero;
        $this->tipoUsuario = $tipoUsuario;
        
    }

                
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    function getAlias() {
        return $this->alias;
    }

    function getFotoPerfil() {
        return $this->fotoPerfil;
    }

    function getFotoPortada() {
        return $this->fotoPortada;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getCalle() {
        return $this->calle;
    }

    function getNumero() {
        return $this->numero;
    }

    function getCodigoPostal() {
        return $this->codigoPostal;
    }

    function getColonia() {
        return $this->colonia;
    }

    function getIdPais() {
        return $this->idPais;
    }

    function getGenero() {
        return $this->genero;
    }

    function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidoMaterno($apellidoMaterno) {
        $this->apellidoMaterno = $apellidoMaterno;
    }

    function setApellidoPaterno($apellidoPaterno) {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    function setAlias($alias) {
        $this->alias = $alias;
    }

    function setFotoPerfil($fotoPerfil) {
        $this->fotoPerfil = $fotoPerfil;
    }

    function setFotoPortada($fotoPortada) {
        $this->fotoPortada = $fotoPortada;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setCalle($calle) {
        $this->calle = $calle;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setCodigoPostal($codigoPostal) {
        $this->codigoPostal = $codigoPostal;
    }

    function setColonia($colonia) {
        $this->colonia = $colonia;
    }

    function setIdPais($idPais) {
        $this->idPais = $idPais;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
    }
   
    private $idUsuario;
    private $correo;
    private $contraseña;
    private $nombre;
    private $apellidoMaterno;
    private $apellidoPaterno;
    private $alias;
    private $fotoPerfil;
    private $fotoPortada;
    private $fechaNacimiento;
    private $calle;
    private $numero;
    private $codigoPostal;
    private $colonia;
    private $idPais;
    private $genero;
    private $tipoUsuario;


    
}
