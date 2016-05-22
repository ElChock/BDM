<?php

require_once '../Dao/DaoAudio.php';
require_once '../Dao/DaoCategoria.php';
require_once '../Dao/DaoGenero.php';
require_once '../Dao/DaoAudioCategoria.php';
require_once '../Dao/DaoAudioGenero.php';

$DaoAudio = new DaoAudio();
$audio = new Audio(NULL,NULL,NULL,NULL,NULL,NULL);
//$audiocategoria = new AudioCategoria(NULL, NULL);
//$audiogenero = new AudioGenero(NULL, NULL);
//$daoPublicidadPagina = new DaoPublicidadPagina();
define('MB', 1048576);

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if(!empty($_POST["video"]))
    {
        if(empty($_FILES["video"]))
        {
            if($_FILES["video"]['error'] )
            {
                echo "error al abrir video";
                echo $_FILES["video"]['error'];
                header('Location: ../Subir_Videos_Publicitarios.php');
            }
            $tmp_name=$_FILES["video"]["tmp_name"];
            $name=$_POST["name"];
            $idPagina =$_POST["Pagina"];
            $dia=$_POST["dia"];
            $horaInicio = $_POST["horaInicio"];
            $horaFin=$_POST["horaFin"];
            echo $tmp_name;
            $path=time().".mp4";
            move_uploaded_file($tmp_name, "../Videos/$path");
            

            
            $publicidad->setIdUsuario(1);
            $publicidad->setNombre($name);
            $publicidad->setPath($path);
            $publicidad->setIdPagina($idPagina);
            $publicidad->setPublicidadPagina($publicidadPagina);
            
            $idPublicidad= $DaoPublicidad->altaVideo($publicidad);
            
            
            $publicidadPagina->setDia($dia);
            $publicidadPagina->setHoraFin($horaFin);
            $publicidadPagina->setHoraInicio($horaInicio);
            $publicidadPagina->setIdPublicidad($idPublicidad);
            $publicidadPagina->setIdPagina($idPagina);
            
            $daoPublicidadPagina->AltaPublicidadPagina($publicidadPagina);
            
            
        }
    }
    if(!empty($_POST["eliminar"]))
    {
        $idPublicidad=$_POST["eliminar"];
        
            $DaoPublicidad->borrarPublicidad($idPublicidad);
            echo $idPublicidad;
    }
    
    if(!empty($_POST["guardar"]))
    {
        $idPagina =$_POST["Pagina"];
        $dia=$_POST["dia"];
        $horaInicio = $_POST["horaInicio"];
        $horaFin=$_POST["horaFin"];
        $idPublicidad=$_POST["guardar"];
        
        $publicidadPagina->setDia($dia);
        $publicidadPagina->setHoraFin($horaFin);
        $publicidadPagina->setHoraInicio($horaInicio);
        $publicidadPagina->setIdPagina($idPagina);
        $publicidadPagina->setIdPublicidad($idPublicidad);
                 echo $publicidadPagina->getIdPublicidad();
                 echo $publicidadPagina->getIdPagina();
                 echo $publicidadPagina->getHoraInicio();
                 echo $publicidadPagina->getHoraFin();
                 echo $publicidadPagina->getDia();
        $daoPublicidadPagina->actualizarPublicidadPagina($publicidadPagina);
    }

}

//header('Location: ../Subir_Videos_Publicitarios.php');



