<?php

require_once '../Dao/DaoAudio.php';
require_once '../Model/Audio.php';
//require_once '../Dao/DaoCategoria.php';
//require_once '../Dao/DaoGenero.php';

$DaoAudio = new DaoAudio();
$audio = new Audio(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

//$audiocategoria = new AudioCategoria(NULL, NULL);
//$audiogenero = new AudioGenero(NULL, NULL);
//$daoPublicidadPagina = new DaoPublicidadPagina();

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if(!empty($_FILES["Audio"]))
    {
        if($_FILES["Audio"]['error'] )
        {
            echo $_FILES["Audio"]['error'];
            echo "Error al abrir audio";
            //header('Location: ../Subir_Audio.php');
            //header('Location: ../Subir_Audio.php?Mensaje=Error al abrir audio');
        } else{
            //Todo lo demás
        }
        
        $idautor=$_POST["IdAutor"];
        $titulo =$_POST["AudioTitulo"];
        $precio =$_POST["AudioPrecio"];
        $genero =$_POST["AudioGenero"];
        $categoria=$_POST["AudioCategoria"];
        $tmp_name=$_FILES["Audio"]["tmp_name"];
        echo $tmp_name;
        $path=time().".mp3";
        move_uploaded_file($tmp_name, "../Audio/$path"); //Descomentar

        echo $idautor.$titulo.$precio.$genero.$categoria.$path;
        $audio->setIdUsuario($idautor);
        $audio->setTitulo($titulo);
        $audio->setPrecio($precio);
        $audio->setPath($path);
        $audio->setGenero($genero);
        $audio->setCategoria($categoria);

        $idAudio= $DaoAudio->AltaAudio($audio);
        header("Location: ../Pagina_Audio.php?IdAudio=$idAudio");
    } else{
        echo "audio vacio";
    }
    /*if(!empty($_POST["eliminar"]))
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
    }*/
    //header('Location: ../Subir_Audio.php');
} else{
    /*header('Location: ../Subir_Audio.php');
    die();*/
    echo $_SERVER["REQUEST_METHOD"];
}