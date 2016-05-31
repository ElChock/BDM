<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Model/AudioLista.php';
include_once '../Dao/DaoAudioLista.php';
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
    if(!empty($_POST["eliminarAudio"]))
    {
        $audiLista=  new AudioLista();
        $daoAudioLista = new DaoAudioLista();
        $audiLista->setIdAudio($_POST["eliminarAudio"]);
        $audiLista->setIdLista($_GET["idLista"]);
        $daoAudioLista->eliminarAudioLista($audiLista);
    }
}
header("Location: ../Usuario_Listas_Contenido.php");

