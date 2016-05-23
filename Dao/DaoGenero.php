<?php

require_once 'MySqlCon.php';
require_once '/../Model/Genero.php';
class DaoGenero   {
    //put your code here
    function BuscarGenero()
    {
        $listGeneros = array();
        $conn = new MySqlCon();
        $connect = $conn->connect();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        }  else{
            
        }
           $stmt=$connect->prepare("call sp_buscarGeneros()");
           $stmt->execute();
           $stmt->bind_result($idGenero, $nombre);
               $contador=0;
           while ($stmt->fetch())
           {
               $genero = new Genero(NULL, NULL);
               $genero->setIdGenero($idGenero);
               $genero->setNombreGenero($nombre);
               $listGeneros[$contador]=$genero;
               $contador++;
           }
           return $listGeneros;

    }


}