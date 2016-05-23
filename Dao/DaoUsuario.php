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

class DaoUsuario {
    public function AltaUsuario(Usuario $usuario)
    {

        $conn = new MySqlCon();
        $connect=$conn->connect();
        $stmt=$connect->prepare("call spa_usuario(? ,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("issssssbbssiisiss", $usuario->getCorreo(),sha1($usuario->getContraseña()),$usuario->getNombre(),$usuario->getApellidoMaterno(),$usuario->getApellidoPaterno(),$usuario->getFotoPerfil(),$usuario->getFotoPortada(),$usuario->getFechaNacimiento(),$usuario->getCalle(),$usuario->getNumero(),$usuario->getCodigoPostal(),$usuario->getColonia(),$usuario->getIdPais(),$usuario->getGenero(),$usuario->getTipoUsuario());
        $stmt->execute();
                
    }
    public function AltaUsuarioRapido(Usuario $usuario)
    {           
        $conn = new MySqlCon();
        $connect = $conn->connect();
      
        if(mysqli_connect_errno())
           {
            printf("Error de conexión: %s\n", mysqli_connect_error());
           } 
        
      if($stmt=$connect->prepare("call spa_usuarioRapido(?, ?, ?, ?, ?, ?, ?)"))
    {
            if($stmt->bind_param('sssssss', $usuario->getAlias(),$usuario->getNombre(),$usuario->getApellidoPaterno(),$usuario->getCorreo(),$usuario->getContraseña(),$usuario->getFechaNacimiento(),$usuario->getGenero()))
            {
                printf("entro al bind");
                
                if($stmt->execute())
                {
                    
                 printf("entro al execute");   
                }
                else
                {
                    echo $stmt->error;
                }
            }
    }
    else 
    {
        echo "no funciono el store de altaUsuarioRapido"    ;
    }              
    }
    
    public function ObtenerUsuario($correo,$contraseña)
    {
        $usuario;
        $conn = new MySqlCon();
        $connect = $conn->connect();
      
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        if ($stmt=$connect->prepare("call sp_comprobarUsuario(?, ?)"))
        {
                if($stmt->bind_param('ss',$correo,$contraseña ))
                {
                    printf("entro al bind");

                    if($stmt->execute())
                    {

                     printf("entro al execute");   
                     
                     $stmt->bind_result($idUsuario,$nombre,$apellidoPaterno,$apellidoMaterno,$alias,$fotoPerfil,$fotoPortada,$fechaNacimiento,$calle,$numero,$codigoPostal,$colonia,$idPais,$genero,$tipoUsuario);
                     while($stmt->fetch())
                     {
                         $usuario=new Usuario($idUsuario, $correo, NULL, $nombre, $apellidoMaterno, $apellidoPaterno, $alias, $fotoPerfil, $fotoPortada, $fechaNacimiento, $calle, $numero, $codigoPostal, $colonia, $idPais, $genero, $tipoUsuario);
                     }
                     
                    }
                }
        }
        else 
        {
            echo "no funciono el store de altaUsuarioRapido";
        }
        return $usuario;
    }
    function ObtenerIdUsurio($correo,$contraseña)
    {
        $idUsuario;
        $conn = new MySqlCon();
        $connect = $conn->connect();
      
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        if ($stmt=$connect->prepare("call sp_obtenerIdUsuario(?, ?)"))
        {
                if($stmt->bind_param('ss',$correo,$contraseña ))
                {
                    

                    if($stmt->execute())
                    {

                    
                     
                     $stmt->bind_result($PidUsuario);
                     while($stmt->fetch())
                     {
                         $idUsuario=$PidUsuario;
                     }
                     
                    }
                    else {
                        echo $stmt->error;

                    }  
                }
        }
        else 
        {
            echo "no funciono el store de altaUsuarioRapido";
        }
        return $idUsuario;
    }
    
    function ObtenerUsuarioId($idUsuario)
    {
        $usuario;
        $conn = new MySqlCon();
        $connect = $conn->connect();
      
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        if ($stmt=$connect->prepare("call sp_obtenerUsuarioId(?)"))
        {
                if($stmt->bind_param('i',$idUsuario ))
                {
                    

                    if($stmt->execute())
                    {

                     
                     
                     $stmt->bind_result($idUsuario,$correo,$nombre,$apellidoPaterno,$apellidoMaterno,$alias,$fotoPerfil,$fotoPortada,$fechaNacimiento,$calle,$numero,$codigoPostal,$colonia,$idPais,$genero,$tipoUsuario);
                     while($stmt->fetch())
                     {
                         $usuario=new Usuario($idUsuario, $correo, NULL, $nombre, $apellidoMaterno, $apellidoPaterno, $alias, $fotoPerfil, $fotoPortada, $fechaNacimiento, $calle, $numero, $codigoPostal, $colonia, $idPais, $genero, $tipoUsuario);
                     }
                     
                    }
                    else
                    {
                        echo $stmt->error;
                    }
                }
        }
        else 
        {
            echo "no funciono el store de altaUsuarioRapido";
        }
        return $usuario;
    }
    
    function ActualizarUsuario(Usuario $usuario)
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
      
        if(mysqli_connect_errno())
           {
            printf("Error de conexión: %s\n", mysqli_connect_error());
           } 
        
      if($stmt=$connect->prepare("call spc_usuario(?,?,?,?,?,?,?,?,?,?,?,?,?)"))
    {
            if($stmt->bind_param('ssssssiisissi',$usuario->getCorreo(),$usuario->getNombre(),$usuario->getApellidoMaterno(),$usuario->getApellidoPaterno(),$usuario->getFechaNacimiento(),$usuario->getCalle(),$usuario->getNumero(),$usuario->getCodigoPostal(),$usuario->getColonia(),$usuario->getIdPais(),$usuario->getGenero(),$usuario->getTipoUsuario(),$usuario->getIdUsuario()))
            { 
                
                
                if($stmt->execute())
                {
                    
                 
                }
                else
                {
                    echo $stmt->error;
                }
            }
            else 
            {
                echo $stmt->error;
            }
    }
            else 
            {
                echo $stmt->error;
            }       
    }
    
    function ActualizarFotoPortada($idUsuario, $imagen)
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        $data = file_get_contents($imagen);
        $data = $connect->real_escape_string($data);
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 

       if($stmt=$connect->prepare("call spc_fotoPortada('$data','$idUsuario')"))
       {
            if($stmt->execute())
            {
                echo "entro";

            }
            else
            {
                echo $stmt->error;
            }
       }
       else 
       {
           echo $stmt->error;
       }         
    }
    
    function ActualizarFotoPerfil($idUsuario,$imagen)
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        $data = file_get_contents($imagen);
        $data = $connect->real_escape_string($data);
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 

       if($stmt=$connect->prepare("call spc_fotoPerfil('$data','$idUsuario')"))
       {
            if($stmt->execute())
            {
                echo "entro";

            }
            else
            {
                echo $stmt->error;
            }
       }
       else 
       {
           echo $stmt->error;
       }
    }
}
