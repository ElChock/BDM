<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Model/lista.php';
include_once '../Dao/DaoLista.php';
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
    
    if(!empty($_POST["nombreListaAgregar"]))
    {
        echo "entro al controller";
        session_start();
        $daoLista=new DaoLista();
        $lista= new lista();
        $lista->setIdUsuario($_SESSION["idUsuario"]);
        $lista->setTitulo($_POST["nombreListaAgregar"]);
        $imagen = $_FILES["PortadaLista"]["tmp_name"];        
        $lista->setImagen($imagen);
        $daoLista->AgregarLista($lista->getIdUsuario(), $lista->getImagen(), $lista->getTitulo());
        header('Location: ../Usuario_Listas.php');
    }
    
}
header("Location: ../Usuario_Listas.php");