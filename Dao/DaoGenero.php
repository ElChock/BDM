<?php

require_once 'MySqlCon.php';
require_once '/../Model/Genero.php';
//require_once '/xampp/htdocs/CafeVinil/Model/Pagina.php';
class DaoGenero   {
    //put your code here
    function BuscarGenero()
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        $listGeneros = array();
        
        if(mysqli_connect_errno())
           {
            printf("Error de conexión: %s\n", mysqli_connect_error());
           } 
           $stmt=$connect->prepare("call sp_buscarGeneros()");
           $stmt->execute();
           $stmt->bind_result();
               $contador=0;
           while ($stmt->fetch())
           {
               $genero = new Genero(NULL, NULL);
               $genero->setNombreGenero($nombre);
               $genero->setIdGenero($idGenero);
               $listGeneros[$contador]=$genero;
               $contador++;
           }
           return $listGeneros;

    }


}
