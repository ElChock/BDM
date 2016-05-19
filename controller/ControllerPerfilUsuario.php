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
        echo "$nameErr";
    }
    else
    {
        $usuario->setAlias($_POST["Alias"]);
    }
    
    if(empty($_POST["Nombre(s)"]))
    {
        $nameErr="Nombre es requerido";
        echo "$nameErr";
    }
    else 
    {
        $usuario->setNombre($_POST["Nombre(s)"]);
    }
    
    if(empty($_POST["Apellidos"]))
    {
        $nameErr="Apellidos es requerido";
        echo "$nameErr";
    }
    else 
    {
        $usuario->setApellidoPaterno($_POST["Apellidos"]);
    }
    
    if(empty($_POST["Correo"]))
    {
        $nameErr="Correo es requerido";
        echo "$nameErr";
    }
    else 
    {
        $usuario->setCorreo($_POST["Correo"]);
    }
    
    if(empty($_POST["Contrasena"]))
    {
        $nameErr="contraseña es requerido";
        echo "$nameErr";
        
    }
    else 
    {
        $usuario->setContraseña($_POST["Contrasena"]);
    }
    
    if(empty($_POST["Sexo"]))
    {
        $nameErr="sexo es requerido";
        echo "$nameErr";
    }
    else 
    {
        $sexo=$_POST["Sexo"];
        if($sexo=="Hombre")
        {
            $usuario->setGenero("H");
        }
        
        if($sexo=="Mujer")
        {
            $usuario->setGenero("M");
        }
    }
    
    if(empty($_POST["dia"]))
    {
        $fecha=$_POST["dia"];
        $nameErr="\n el dia es requerida";
        echo "$nameErr";
        if(empty($_POST["mes"]))
        {
            $nameErr="\n el mes es requerida";
            echo "$nameErr";
            if(empty($_POST["año"]))
            {
                $nameErr="\n el año es requerida";
                echo "$nameErr";
            }
        }
    }
    else 
    {
        $usuario->setFechaNacimiento($_POST["dia"].$_POST["mes"].$_POST["año"]);
    }   
    //$usuario->setFechaNacimiento("09-09-15");
    $daoUsuario->AltaUsuarioRapido($usuario);
    
}

