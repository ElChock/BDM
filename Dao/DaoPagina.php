<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoPagina
 *
 * @author Ayrton
 */
require_once 'MySqlCon.php';
require_once '/../Model/Pagina.php';
require_once '/xampp/htdocs/CafeVinil/Model/Pagina.php';
class DaoPagina   {
    //put your code here
    function BuscarPagina()
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        $listPagina = array();
        
        if(mysqli_connect_errno())
           {
            printf("Error de conexión: %s\n", mysqli_connect_error());
           } 
           $stmt=$connect->prepare("call sp_buscarPaginas()");
           $stmt->execute();
           $stmt->bind_result($idPagina ,$nombre);
               $contador=0;
           while ($stmt->fetch())
           {
               $pagina = new Pagina(NULL, NULL);
               $pagina->setNombre($nombre);
               $pagina->setIdPagina($idPagina);
               $listPagina[$contador]=$pagina;
               $contador++;
           }
           return $listPagina;

    }


}
