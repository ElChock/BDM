<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoPais
 *
 * @author Ayrton
 */

class DaoPais {   
    function obtenerPais()
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        $listPais = array();
        
        if(mysqli_connect_errno())
           {
            printf("Error de conexión: %s\n", mysqli_connect_error());
           } 
          if( $stmt=$connect->prepare("select idPais, pais from obtenerPais"))
          {
              if($stmt->execute())
              {
                    if($stmt->bind_result($idPais ,$pais))
                    {
                        $contador=0;
                          while ($stmt->fetch())
                         {
                            $paisd = new pais(NULL, NULL, NULL, NULL);
                            $paisd->setIdPais($idPais);
                            $paisd->setPais($pais);
                            $listPais[$contador]=$paisd;
                            $contador++;
                        }
                    }
              }
             
          }
           

           return $listPais;
    }
}
