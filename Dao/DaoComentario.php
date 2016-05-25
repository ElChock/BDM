<?php

//echo "Pagina dao comentario";
require_once 'MySqlCon.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/CafeVinil/Model/ComentarioAudio.php';

//$root = realpath($_SERVER["DOCUMENT_ROOT"]);
//include "$root/inc/include1.php";
/*$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$root/inc/include1.php";*/
//require_once __FILE__.'\.\Model/ComentarioAudio.php;';
//include($_SERVER["DOCUMENT_ROOT"] . "/dir/script_name.php");

class DaoComentario {
    
    public function AltaComentario(ComentarioAudio $comentario)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } else{
            $stmt=$connect->prepare("call spa_ComentarioAudio(?,?,?)");
            echo "prepare";
            $stmt->bind_param("iis", $comentario->getIdUsuario(),$comentario->getIdAudio(),$comentario->getComentario());
            echo "bind param";
            if($stmt->execute()){
                $result=$connect->query("SELECT LAST_INSERT_ID()");
                $id = mysqli_fetch_assoc($result);
            } else {
                echo "Error al ejecutar query: spa_ComentarioAudio";
            }
        }
        return $id["LAST_INSERT_ID()"];
    }
    
    /*public function BajaAudio(Audio $audio)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        $stmt=$connect->prepare("call spb_usuario(?,?)");
        $stmt->bind_param("ii", $audio->getIdAudio(),$audio->getIdUsuario());
        $stmt->execute();
    }*/
    
    public function BuscarComentarios($idAudio){
        $listComentarios=array();
        $conn = new MySqlCon();
        $connect=$conn->connect();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } else{
            $stmt=$connect->prepare("call sp_BuscarComentarios(?)");
            $stmt->bind_param("i", $idAudio);
            if($stmt->execute()){
                $stmt->bind_result($idcomentario, $idusuario, $allias, $idaudio, $fecha, $texto);
                $contador=0;
                while ($stmt->fetch())
                {   
                    $comentario = new ComentarioAudio(NULL, NULL, NULL, NULL, NULL, NULL);
                    $comentario->setIdComentario($idcomentario);
                    $comentario->setIdUsuario($idusuario);
                    $comentario->setNombreUsuario($allias);
                    $comentario->setIdAudio($idaudio);
                    $comentario->setFecha($fecha);
                    $comentario->setComentario($texto);
                    
                    $listComentarios[$contador]=$comentario;
                    $contador++;
                }
            } else {
                echo "Error al ejecutar query: sp_BuscarComentarios";
            }
        }
        return $listComentarios;
    }
    
    /*public function CambioAudio(Audio $audio)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        $stmt=$connect->prepare("call spc_usuario(?,?,?,?)");
        $stmt->bind_param("iisi", $audio->getIdAudio(),$audio->getIdUsuario(),$audio->getTitulo(),$audio->getPrecio());
        $stmt->execute();
    }*/
}