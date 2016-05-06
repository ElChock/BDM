<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require_once 'Model/Usuario.php';
require_once '../Model/Usuario.php';
require_once '../Dao/daoUsuario.php';
$nameErr="";
//$user = Usuario;
$usuario = new Usuario(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$daoUsuario = new DaoUsuario();
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
    if(empty($_POST["Alias"]))
    {
        $nameErr="Alias es requerido";
    }
    else
    {
        $usuario->setAlias($_POST["Alias"]);
    }
    $daoUsuario->AltaUsuarioRapido($usuario);
    
}

