<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Dao/DaoCompraAudio.php';
include_once '../Model/CompraAudio.php';
include_once '../Dao/DaoAudio.php';
include_once '../Model/Audio.php';
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    
    if(!empty($_POST["idAdudioCarrito"]))
    {
        $idAudio= $_POST["idAdudioCarrito"];
        $concatenar=$idAudio."x";
        session_start();

        $concatenarSession=$_SESSION["carrito"];
        $concatenarSession=$concatenarSession.$concatenar;
        $_SESSION["carrito"]=$concatenarSession;
        
    }
    if(!empty($_POST["comprar"]))
    {
        
            $daoCompraAudio = new DaoCompraAudio();
        session_start();

        $concatenar=$_SESSION["carrito"];

        if(!is_null($concatenar))
        {
    
            $idUsuario =$_SESSION["idUsuario"];
            $listaAudio= array();

            $numeroAudio=substr_count($concatenar,"x");
            $CVC = $_POST["CVC"];
            $tipoTarjeta=$_POST["TipoTarjeta"];
            $numeroTarjeta = $_POST["NumeroTarjeta"];

            $daoAudio= new DaoAudio;
            for($index=0;$index<$numeroAudio;$index++)
            {
                $audio=new Audio(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
                $pos=strpos($concatenar,"x");

                $idAudio=substr($concatenar,0,$pos);

                $concatenar=  substr($concatenar,$pos+1);


                $audio= $daoAudio->ExtraerAudio($idAudio);

                $listaAudio[$index]=$audio;
            }
            for($index=0;$index<count($listaAudio);$index++)
            {
                $compraAudio= new CompraAudio();
                $localtime = getdate();
                $compraAudio->setCVC($CVC);
                $compraAudio->setNumeroTarjeta($numeroTarjeta);
                $compraAudio->setTipoTarjeta($tipoTarjeta);
                $compraAudio->setIdUsuario($idUsuario);
                $compraAudio->setPrecio($listaAudio[$index]->getPrecio());
                $compraAudio->setIdAudio($listaAudio[$index]->getIdAudio());
                $compraAudio->setFecha($localtime["year"]."-".$localtime["mon"]."-".$localtime["mday"]." ".$localtime["hours"].":".$localtime["minutes"].":".$localtime["seconds"]);
                $compraAudio->setImpuesto($idUsuario);
                $daoCompraAudio->agregarCompra($compraAudio);
                $_SESSION["carrito"]=NULL;
            }


        }
    }
    header("Location: ../Carrito_Compras.php");
}
