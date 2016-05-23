<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoPublicidad
 *
 * @author Ayrton
 */
require_once 'MySqlCon.php';
require_once '/xampp/htdocs/CafeVinil/Model/Publicidad.php';
class DaoPublicidad {
    
    function altaVideo(Publicidad $publicidad)
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call spa_publicidad(?, ?, ?)"))
        {
            if($stmt->bind_param('ssi',$publicidad->getPath(),$publicidad->getNombre(),$publicidad->getIdUsuario()))
            {
                printf("entro al bind");
                
                if($stmt->execute())
                { 
                    $result=$connect->query("SELECT LAST_INSERT_ID()");
                    $id = mysqli_fetch_assoc($result); 
                    printf("entro al execute altaVideo");   
                }
                else
                {
                    printf("no entro al execute");
                    printf($stmt->error);
                }
            }
        }
        else 
        {
            echo "no funciono el store altaVideo"    ;
        }  
        
        
        return $id["LAST_INSERT_ID()"];
    }
    
    function buscarVideo()
    {
        $listPublicidad=array();
        $conn = new MySqlCon();
        $connect = $conn->connect();
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call sp_buscarVideos()"))
        {
            if($stmt->execute())
            {
                $stmt->bind_result($idPublicidad,$path,$nombre);
                $contador=0;
                while ($stmt->fetch())
                {   
                    $publicidad = new Publicidad(NULL,NULL,NULL,NULL,NULL,NULL);
                    $publicidad->setIdPublicidad($idPublicidad);
                    $publicidad->setNombre($nombre);
                    $publicidad->setPath($path);
                    $listPublicidad[$contador]=$publicidad;
                    $contador++;
                }
            }
            else
            {
                printf("no entro al execute");
                printf($stmt->error);
            }
            return $listPublicidad;
        }
    }
    
    function borrarPublicidad($idPublicidad)
    {
                $listPublicidad=array();
        $conn = new MySqlCon();
        $connect = $conn->connect();
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call spb_publicidad(?)"))
        {
            if($stmt->bind_param('i',$idPublicidad))
            {
                printf("entro al bind");
                
                if($stmt->execute())
                { 
                    printf("entro al execute spb_publicidad");   
                }
                else
                {
                    printf("no entro al execute");
                    printf($stmt->error);
                }
            }
        }
        else 
        {
            echo "no funciono el store spb_publicidad"    ;
        }  
    }
}
