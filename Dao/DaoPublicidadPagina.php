<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoPublicidadPagina
 *
 * @author Ayrton
 */
include_once '/xampp/htdocs/CafeVinil/Model/PublicidadPagina.php';
class DaoPublicidadPagina {
    //put your code here
    function AltaPublicidadPagina(publicidadPagina $publicidadPagina)
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call spa_publicidadPagina(?, ?, ?,?,?)"))
        {
            if($stmt->bind_param('iisss',$publicidadPagina->getIdPublicidad(),$publicidadPagina->getIdPagina(),$publicidadPagina->getHoraInicio(),$publicidadPagina->getHoraFin(),$publicidadPagina->getDia()))
            {
                printf("entro al bind altaPublicidadPagina");
                echo $publicidadPagina->getHoraFin();

                echo $publicidadPagina->getIdPublicidad();
                if($stmt->execute())
                { 
                 printf("entro al execute altaPublicidadPagina \n" );   
                 
                }
                else
                {
                    printf("no entro al execute altaPublicidadPagina");
                    printf($stmt->error);
                }
            }
        }
        else 
        {
            echo "no funciono el store altaPublicidadPagina";
        }  
    }
    function BuscarPublicidadPagina($idPublicidad)
    {
        $listPublicidad=array();
        $conn = new MySqlCon();
        $connect = $conn->connect();
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call sp_PublicidadPagina(?)"))
        {
             if($stmt->bind_param('i',$idPublicidad))
             {
                 if($stmt->execute())
                 {
                     $stmt->bind_result($idPagina,$horaInicio,$horaFin,$dia);
                     $contador=0;
                     while ($stmt->fetch())
                     {
                         $publicidadPagina=new publicidadPagina(NULL, NULL, NULL, NULL, NULL);
                         $publicidadPagina->setHoraFin($horaFin);
                         $publicidadPagina->setHoraInicio($horaInicio);
                         $publicidadPagina->setDia($dia);
                         $publicidadPagina->setIdPagina($idPagina);
                         $listPublicidad[$contador]=$publicidadPagina;
                         $contador++;
                     }
                 }
             }
        }
        return $listPublicidad;
    }
    
    function actualizarPublicidadPagina(publicidadPagina $publicidadPagina)
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call spc_publicidadPagina(?, ?, ?,?,?)"))
        {
            if($stmt->bind_param('iisss',$publicidadPagina->getIdPublicidad(),$publicidadPagina->getIdPagina(),$publicidadPagina->getHoraInicio(),$publicidadPagina->getHoraFin(),$publicidadPagina->getDia()))
            {
                printf("entro al bind actualizarPublicidadPagina");

                if($stmt->execute())
                { 
                 printf("entro al execute actualizarPublicidadPagina \n" );   
                 echo $publicidadPagina->getIdPublicidad();
                 echo $publicidadPagina->getIdPagina();
                 echo $publicidadPagina->getHoraInicio();
                 echo $publicidadPagina->getHoraFin();
                 echo $publicidadPagina->getDia();
                }
                else
                {
                    printf("no entro al execute actualizarPublicidadPagina");
                    printf($stmt->error);
                }
            }
        }
        else 
        {
            echo "no funciono el store actualizarPublicidadPagina";
        }  
    }
    function BuscarPublicidadParaMostrar($idPagina)
    {
        $publicidad = new Publicidad(NULL, NULL, NULL,NULL, NULL, NULL);
        $conn = new MySqlCon();
        $connect = $conn->connect();
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call sp_buscarPublicidad(?)"))
        {
             if($stmt->bind_param('i',$idPagina))
             {
                 if($stmt->execute())
                 {
                     $stmt->bind_result($path);
                     
                     while ($stmt->fetch())
                     {
                         
                          $publicidad->setPath($path);
                         
                     }
                 }
             }
        }
        return $publicidad;
        
    }
}
