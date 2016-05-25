<?php

//echo "Pagina Controller comentario";
require_once "../Dao/DaoComentario.php";
//require_once '../Model/ComentarioAudio.php';
//require_once '..Modsadsadsadel/ComdsaentarioAudio.php';

$DaoComentario = new DaoComentario();
$audiocomentario = new ComentarioAudio(NULL, NULL, NULL, NULL, NULL, NULL);

if($_SERVER["REQUEST_METHOD"]== "GET")
{
        //$accion=$_GET["Accion"];
        $idcomentario=$_GET["IdComentario"];
        $idusuario =$_GET["IdUsuario"];
        $idaudio =$_GET["IdAudio"];
        $comentariotexto =$_GET["ComentarioTexto"];

        echo $idcomentario.$idusuario.$idaudio.$comentario;
        $audiocomentario->setIdComentario($idcomentario);
        $audiocomentario->setIdUsuario($idusuario);
        $audiocomentario->setIdAudio($idaudio);
        $audiocomentario->setComentario($comentariotexto);
        
        /*if($accion=="Alta"){            
        }else if($accion=="Baja"){
        } else if($accion=="Cambio"){
        }*/
        $idComentario= $DaoComentario->AltaComentario($audiocomentario);
        header("Location: ../Pagina_Audio.php?IdAudio=$idaudio");
} else{
    echo $_SERVER["REQUEST_METHOD"];
}