<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoReporte
 *
 * @author Ayrton
 */
include_once 'MySqlCon.php';

class DaoReporte {
    //put your code here
    function reporteFecha($fechaInicio,$fechaFin,$idUsuario)
    {
        $listaReporte=array();
        $conn = new MySqlCon();
        $connect = $conn->connect();
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } 
        
        if($stmt=$connect->prepare("call sp_reporteFecha(?,?,?)"))
        {
         
            if($stmt->bind_param('ssi',$fechaInicio,$fechaFin,$idUsuario))
            {       
         
                if($stmt->execute())
                {
                    $stmt->bind_result($nombreCategoria,$titulo,$precio,$impuesto,$fecha,$correo,$pais,$tipoTarjeta,$ultimosnumeroTarjeta);
                    $contador=0;
                    while ($stmt->fetch())
                    {   
                        $reporte = new Reporte();
                        $reporte->setCorreo($correo);
                        $reporte->setFecha($fecha);
                        $reporte->setImpuesto($impuesto);
                        $reporte->setNombreCategoria($nombreCategoria);
                        $reporte->setPais($pais);
                        $reporte->setPrecio($precio);
                        $reporte->setTipoTarjeta($tipoTarjeta);
                        $reporte->setTitulo($titulo);
                        $reporte->setUltimosNumeroTarjeta($ultimosnumeroTarjeta);
                        
                        $listaReporte[$contador]=$reporte;
                        $contador++;
                    }
                }
                else
                {
                    printf("no entro al execute");
                    printf($stmt->error);
                }
                return $listaReporte;
            }

        }
    }
}
