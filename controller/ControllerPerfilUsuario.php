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
    if(!empty(($_POST["Registro"])))
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
            $usuario->setContraseña(sha1($_POST["Contrasena"]));
        }

        if(empty($_POST["Sexo"]))
        {
            $nameErr="sexo es requerido";
            echo "$nameErr";
        }
        else 
        {
            $sexo=$_POST["Sexo"];

                $usuario->setGenero($sexo);

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
            $usuario->setFechaNacimiento(substr($_POST["año"], 2,2)."-".$_POST["mes"]."-".$_POST["dia"]);
        }   
        
        if(!empty($usuario))
        {
            
            $daoUsuario->AltaUsuarioRapido($usuario);
        }
         
        header('Location: ../Perfil_usuario.php');
    
    }
    if(!empty($_POST["IniciarSesion"]))
    {
        $correo = $_POST["CorreoInicioSesion"];
        $contraseña=  sha1($_POST["ContrasenaInicioSesion"]);
        
        $daoUsuario= new DaoUsuario();
        $idUsuario=$daoUsuario->ObtenerIdUsurio($correo, $contraseña);
        
        session_start();
        $_SESSION["idUsuario"]= $idUsuario;
        header('Location: ../Perfil_usuario.php');
    }
    if(!empty($_POST["UsuarioCambio"]))
    {
        session_start();
        $daoUsuario= new DaoUsuario();
        $usuario= new Usuario(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        
        $usuario->setAlias($_POST["AliasEditar"]);
        $usuario->setNombre($_POST["NombreEditar"]);
        $usuario->setApellidoPaterno($_POST["ApellidosEditar"]);
        $usuario->setCorreo($_POST["CorreoEditar"]);                        
        
        $dia= $_POST["DiaEditar"];
        $mes=$_POST["MesEditar"];
        $año=$_POST["AñoEditar"];
        $usuario->setFechaNacimiento($año."-".$mes."-".$dia);
        
        $usuario->setGenero( $_POST["SexoEditar"]);
        $usuario->setCalle($_POST["CalleEditar"]);
        $usuario->setNumero($_POST["NumeroCasaEditar"]);
        $usuario->setColonia($_POST["ColoniaEditar"]);
        $usuario->setIdPais($_POST["paisEditar"]);
        $usuario->setCodigoPostal($_POST["CodigoPostalEditar"]);       
        $usuario->setIdUsuario($_SESSION["idUsuario"]);
        $usuario->setTipoUsuario("U");
        $daoUsuario->ActualizarUsuario($usuario);
        header('Location: ../Perfil_usuario.php');
        
    }
    
    if(!empty($_POST["fotoPortada"]))
    {
        
        session_start();
        $daoUsuario= new DaoUsuario();
        $imagen = $_FILES["Portada"]["tmp_name"];
        $idUsuario = $_SESSION["idUsuario"];
        $daoUsuario->ActualizarFotoPortada($idUsuario, $imagen);
    }
    if(!empty($_POST["fotoPerfil"]))
    {
        session_start();
        $daoUsuario= new DaoUsuario();
        $imagen=$_FILES["Perfil"]["tmp_name"];
        $idUsuario=$_SESSION["idUsuario"];
        $daoUsuario->ActualizarFotoPerfil($idUsuario, $imagen);
    }
header('Location: ../Perfil_usuario.php');
}

