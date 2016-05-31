<?php

require_once "../Dao/DaoComentario.php";
require_once '../Dao/DaoAudio.php';
require_once '../Model/Audio.php';
require_once '../Dao/DaoAudioLista.php';
require_once '../Model/AudioLista.php';


$DaoAudio = new DaoAudio();
$audio = new Audio(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $idaudio=$_POST["IdAudio"];
    $idautor=$_POST["IdAutor"];
    $titulo =$_POST["AudioTitulo"];
    $precio =$_POST["AudioPrecio"];
    $genero =$_POST["AudioGenero"];
    $categoria=$_POST["AudioCategoria"];

    $audio->setIdAudio($idaudio);
    $audio->setIdUsuario($idautor);
    $audio->setTitulo($titulo);
    $audio->setPrecio($precio);
    $audio->setGenero($genero);
    $audio->setCategoria($categoria);

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
        
        $tmp_name=$_FILES["Audio"]["tmp_name"];
        $path=time().".mp3";
        move_uploaded_file($tmp_name, "../Audio/$path"); //Descomentar

        $audio->setPath($path);

        $idAudio= $DaoAudio->AltaAudio($audio);
        header("Location: ../Pagina_Audio.php?IdAudio=$idAudio");
    } else if(!empty($idaudio)){
        $DaoAudio->CambioAudio($audio);
        $direccion="Location: ../Pagina_Audio.php?IdAudio=".$audio->getIdAudio();
        header($direccion);
    } else{
        echo 'No se pudo guardar cambios';
    }
    
    if(!empty( $_POST["agregarCancionLista"]))
    {
        session_start();
        $daoAudioLista=new DaoAudioLista();
        $audioLista = new AudioLista();
        $audioLista->setIdAudio($_SESSION["idAudioLista"]);
        $audioLista->setIdLista($_POST["AgregarLista"]);
        echo "idLista".$audioLista->getIdLista();
        $daoAudioLista->agregarAudioLista($audioLista);
        header("Location: ../Pagina_Audio.php");
    }
    else
    {
        echo "no entro audioLista";
    }
} 
else{
    $EliminarAudio=htmlspecialchars($_GET["EliminarAudio"]);
    $IdAudioEliminar=htmlspecialchars($_GET["IdAudioEliminar"]);
    if(!empty($EliminarAudio) && !empty($IdAudioEliminar)){
        $audio->setIdAudio($IdAudioEliminar);
        session_start();
        $audio->setIdUsuario($_SESSION["idUsuario"]);
        $DaoAudio->BajaAudio($audio);
        header("Location: ../Pagina_Inicio.php");
    }   else{
        header("Location: ../Pagina_Audio.php?IdAudio=$IdAudioEliminar");
    }
}