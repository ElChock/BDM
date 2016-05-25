<?php

require_once 'MySqlCon.php';
require_once './Model/Audio.php';
//require_once '../Model/Usuario.php';
class DaoAudio {
    
    public function AltaAudio(Audio $audio)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } else{
            $stmt=$connect->prepare("call spa_Audio(?,?,?,?,?,?)");
            echo "prepare";
            $stmt->bind_param("isisii", $audio->getIdUsuario(),$audio->getTitulo(),$audio->getPrecio(),$audio->getPath(),$audio->getGenero(),$audio->getCategoria());
            echo "bind param";
            if($stmt->execute()){
                $result=$connect->query("SELECT LAST_INSERT_ID()");
                $id = mysqli_fetch_assoc($result);
            } else {
                echo "Error al ejecutar query: spa_Audio";
            }
        }
        return $id["LAST_INSERT_ID()"];
    }
    
    public function BajaAudio(Audio $audio)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        $stmt=$connect->prepare("call spb_usuario(?,?)");
        $stmt->bind_param("ii", $audio->getIdAudio(),$audio->getIdUsuario());
        $stmt->execute();
    }
    
    public function BuscarAudio($FechaInicio, $FechaFin, $TituloAudio, $AliasUsuario){
        $listAudios=array();
        $conn = new MySqlCon();
        $connect=$conn->connect();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } else{
            $stmt=$connect->prepare("call sp_BuscarAudio(?,?,?,?)");
            $stmt->bind_param("ssss", $FechaInicio,$FechaFin,$TituloAudio,$AliasUsuario);
            if($stmt->execute()){
                $stmt->bind_result($idAudio,$titulo,$precio,$path,$fechaAlta,$alias);
                $contador=0;
                while ($stmt->fetch())
                {   
                    $audio = new Audio(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
                    //$audio = new Audio($idAudio,$titulo,$precio,$path,$fechaAlta,$alias);
                    $audio->setIdAudio($idAudio);
                    $audio->setTitulo($titulo);
                    $audio->setPrecio($precio);
                    $audio->setPath($path);
                    $audio->setfechaAlta($fechaAlta);
                    $audio->setnombreUsuario($alias);
                    $listAudios[$contador]=$audio;
                    $contador++;
                }
            } else {
                echo "Error al ejecutar query: sp_BuscarAudio";
            }
        }
        return $listAudios;
    }
    
    public function ExtraerAudio($idAudio){
        $conn = new MySqlCon();
        $connect=$conn->connect();
        
        if(mysqli_connect_errno())
        {
            printf("Error de conexión: %s\n", mysqli_connect_error());
        } else{
            $stmt=$connect->prepare("call sp_ExtraerAudio(?)");
            $stmt->bind_param("i", $idAudio);
            if($stmt->execute()){
                //idaudio, audio.idusuario, usuario.allias ,titulo, precio, path,
                //fechaAlta, audio.idgenero, genero.nombregenero, audio.idcategoria, categoria.nombrecategoria
                $stmt->bind_result($idAudio,$idusuario,$allias,$titulo,$precio,$path,$fechaAlta,$idgenero,$nombregenero,$idcategoria,$nombrecategoria);
                $contador=0;
                while ($stmt->fetch())
                {   
                    $audio = new Audio(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
                    //$audio = new Audio($idAudio,$titulo,$precio,$path,$fechaAlta,$alias);
                    $audio->setIdAudio($idAudio);
                    $audio->setIdUsuario($idusuario);
                    $audio->setnombreUsuario($allias);
                    $audio->setTitulo($titulo);
                    $audio->setPrecio($precio);
                    $audio->setPath($path);
                    $audio->setfechaAlta($fechaAlta);
                    $audio->setGenero($idgenero);
                    $audio->nombregenero=$nombregenero;
                    $audio->setCategoria($idcategoria);
                    $audio->nombrecategoria=$nombrecategoria;
                }
            } else {
                echo "Error al ejecutar query: sp_ExtraerAudio";
            }
        }
        return $audio;
    }

    public function CambioAudio(Audio $audio)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        $stmt=$connect->prepare("call spc_usuario(?,?,?,?)");
        $stmt->bind_param("iisi", $audio->getIdAudio(),$audio->getIdUsuario(),$audio->getTitulo(),$audio->getPrecio());
        $stmt->execute();
    }
}