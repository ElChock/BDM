<?php

require_once 'MySqlCon.php';
require_once '../Model/Usuario.php';
class DaoAudio {
    
    public function AltaAudio(Audio $audio)
    {
        //Subir el archivo a la carpeta de audios
       
        //Subir a la base de datos
        $conn = new MySqlCon();
        $connect=$conn->connect();
        $stmt=$connect->prepare("call spa_usuario(?,?,?,?)");
        $stmt->bind_param("isis", $audio->getUsuario(),$audio->getTitulo(),$audio->getPrecio(),$audio->getPath());
        $stmt->execute();
    }
    
}