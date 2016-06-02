<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoCompraAudio
 *
 * @author Ayrton
 */
include_once '../Model/CompraAudio.php';
include_once 'MySqlCon.php';
class DaoCompraAudio {
    //put your code here
    function agregarCompra(CompraAudio $compraAudio)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } else{
            if($stmt=$connect->prepare("call spa_compraaudio(?,?,?,?,?,?,?,?)"))
            {
                $stmt->bind_param("iiiisssi", $compraAudio->getIdUsuario(),$compraAudio->getIdAudio(),$compraAudio->getPrecio(),$compraAudio->getImpuesto(),$compraAudio->getFecha(),$compraAudio->getCVC(),$compraAudio->getTipoTarjeta(),$compraAudio->getNumeroTarjeta());
                echo$compraAudio->getIdUsuario()." ";
                echo$compraAudio->getIdAudio()." ";
                echo$compraAudio->getPrecio()." ";
                echo$compraAudio->getImpuesto()." ";
                echo$compraAudio->getFecha()." ";
                echo$compraAudio->getCVC()." ";
                echo$compraAudio->getTipoTarjeta()." ";
                echo$compraAudio->getNumeroTarjeta()." ";
                if($stmt->execute())
                {
                     echo "entro spa_compraaudio";
                } 
                else 
                {
                    echo "Error al ejecutar query: spa_compraaudio";
                    echo $stmt->error;
                } 
            }
            

        }
    }
}
