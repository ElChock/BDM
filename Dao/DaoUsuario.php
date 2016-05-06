<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoUsuario
 *
 * @author Ayrton
 */
require_once 'MySqlCon.php';
require_once '../Model/Usuario.php';
class DaoUsuario {
    //put your code here

    public function AltaUsuario(Usuario $usuario)
    {

        $conn = new MySqlCon();
        $connect=$conn->connect();
        $stmt=$connect->prepare("call spa_usuario(? ,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("issssssbbssiisiss", $usuario->getCorreo(),$usuario->getContraseña(),$usuario->getNombre(),$usuario->getApellidoMaterno(),$usuario->getApellidoPaterno(),$usuario->getFotoPerfil(),$usuario->getFotoPortada(),$usuario->getFechaNacimiento(),$usuario->getCalle(),$usuario->getNumero(),$usuario->getCodigoPostal(),$usuario->getColonia(),$usuario->getIdPais(),$usuario->getGenero(),$usuario->getTipoUsuario());
        $stmt->execute();
                
    }
        public function AltaUsuarioRapido(Usuario $usuario)
    {
            
        $conn = new MySqlCon();
        $connect= new mysqli("localhost", "root", "little20!");
        $stmt=$connect->prepare("call spa_usuarioRapido(? ,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $usuario->getAlias(),$usuario->getNombre(),$usuario->getApellidoPaterno(),$usuario->getContraseña(),$usuario->getFechaNacimiento(),$usuario->getGenero());
        $stmt->execute();
                
    }
}
