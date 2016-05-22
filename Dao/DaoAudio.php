<?php

require_once 'MySqlCon.php';
//require_once '../Model/Usuario.php';
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
    
    public function BajaAudio(Audio $audio)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        $stmt=$connect->prepare("call spb_usuario(?,?)");
        $stmt->bind_param("ii", $audio->getIdAudio(),$audio->getIdUsuario());
        $stmt->execute();
    }
    
    public function BuscarAudio($FechaInicio, $FechaFin, $TituloAudio, $AliasUsuario){
        //spe_AudioBusqueda
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
    
    public function CambioAudio(Audio $audio)
    {
        $conn = new MySqlCon();
        $connect=$conn->connect();
        $stmt=$connect->prepare("call spc_usuario(?,?,?,?)");
        $stmt->bind_param("iisi", $audio->getIdAudio(),$audio->getIdUsuario(),$audio->getTitulo(),$audio->getPrecio());
        $stmt->execute();
    }
}