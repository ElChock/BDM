<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoAudioLista
 *
 * @author Ayrton
 */
include_once 'MySqlCon.php';
class DaoAudioLista {
    //put your code here
    function agregarAudioLista(AudioLista $audioLista)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        }
        if($stmt=$connect->prepare("call spa_audiolista(?,?)"))
        {          
            if($stmt->bind_param("ii", $audioLista->getIdAudio(),$audioLista->getIdLista()))
            {
                printf("entro al bind");
                if($stmt->execute())
                { 
                    printf(" entro al execute spa_audiolista");   
                }
                else
                {
                    printf(" no entro al execute spa_audiolista ");
                    printf($stmt->error);
                }   
            }
        }
        else 
        {
            echo " no funciono el store spa_audiolista";
            printf($stmt->error);
        } 
    }
    function obtenerAudioLista($idLista,$idUsuario)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        $audioLista= array();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        }
                if($stmt=$connect->prepare("call sp_audioListaBuscar(?,?)"))
        {          
            if($stmt->bind_param("ii", $idUsuario,$idLista))
            {
               // printf("entro al bind");
                if($stmt->execute())
                { 
                    //printf(" entro al execute sp_audioListaBuscar");   
                    if($stmt->bind_result($idAudio,$titulo,$precio,$path,$idGenero,$idCategoria,$fechaalta))
                    {
                        $contador=0;
                        while ($stmt->fetch())
                        {
                            $audio= new Audio(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
                            $audio->setIdAudio($idAudio);
                            $audio->setTitulo($titulo);
                            $audio->setPrecio($precio);
                            $audio->setPath($path);
                            $audio->setGenero($idGenero);
                            $audio->setCategoria($idCategoria);
                            $audio->setfechaAlta($fechaalta);
                            $audioLista[$contador]=$audio;
                            $contador++;
                        }
                        return $audioLista;
                    }
                }
                else
                {
                    printf(" no entro al execute sp_audioListaBuscar ");
                    printf($stmt->error);
                }   
            }
        }
        else 
        {
            echo " no funciono el store spa_audiolista";
            printf($stmt->error);
        } 
    }
    function eliminarAudioLista(AudioLista $audioLista)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        }
        if($stmt=$connect->prepare("call spb_audioLista(?,?)"))
        {          
            if($stmt->bind_param("ii", $audioLista->getIdAudio(),$audioLista->getIdLista()))
            {
                printf("entro al bind");
                if($stmt->execute())
                { 
                    printf(" entro al execute spb_audioLista");   
                }
                else
                {
                    printf(" no entro al execute spb_audioLista ");
                    printf($stmt->error);
                }   
            }
        }
        else 
        {
            echo " no funciono el store spa_audiolista";
            printf($stmt->error);
        } 
    }
}
