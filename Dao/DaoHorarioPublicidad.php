<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoHorarioPublicidad
 *
 * @author Ayrton
 */
require_once '../Model/HorarioPublicidad.php';
require_once 'MySqlCon.php';
class DaoHorarioPublicidad {
    //put your code here
    function altaHorarioPublicidad(HorarioPublicidad $horarioPublicidad)
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call spa_horarioPublicidad(?, ?, ?,?)"))
        {
            if($stmt->bind_param('sssi',$horarioPublicidad->getDias(),$horarioPublicidad->getHoraInicio(),$horarioPublicidad->getHoraFin(),$horarioPublicidad->getIdPublicidad()))
            {
                printf("entro al bind");
                
                if($stmt->execute())
                { 
                 printf("entro al execute");   
                 
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
            echo "no funciono el store altaHorarioPublicidad"    ;
        }         
    }
}
