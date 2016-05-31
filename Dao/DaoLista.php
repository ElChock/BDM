<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoLista
 *
 * @author Ayrton
 */
include_once 'MySqlCon.php';

class DaoLista {
    //put your code here
    function AgregarLista($idUsuario,$imagen,$titulo){
        $conn = new MySqlCon();
        $connect = $conn->connect();
        $data = file_get_contents($imagen);
        $data = $connect->real_escape_string($data);
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call spa_lista('$data', '$titulo', '$idUsuario')"))
        {          
                printf("entro al bind");
                if($stmt->execute())
                { 
                    printf(" entro al execute aspa_lista");   
                }
                else
                {
                    printf(" no entro al execute");
                    printf($stmt->error);
                }   
        }
        else 
        {
            echo " no funciono el store spa_lista";
            printf($stmt->error);
        }  
    }
    
    function buscarLista($idUsuario)
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        $listaLista = array();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call sp_buscarlista(?)"))
        {          
            if($stmt->bind_param('i', $idUsuario))
            {
               // printf("entro al bind");
                if($stmt->execute())
                { 
                   // printf(" entro al execute sp_buscarLista");   
                    $stmt->bind_result($idlista,$imagen,$titulo);
                    $contador=0;
                    while ($stmt->fetch())
                    {
                        $lista=new lista();
                        $lista->setIdlista($idlista);
                        $lista->setImagen($imagen);
                        $lista->setTitulo($titulo);
                        $listaLista[$contador]=$lista;
                        $contador++;
                    }
                    return $listaLista;
                }
                else
                {
                    printf(" no entro al execute");
                    printf($stmt->error);
                }   
            }
        }
        else 
        {
            echo " no funciono el store spa_lista";
            printf($stmt->error);
        }  
        
    }
}
