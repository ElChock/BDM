<?PhP
    error_reporting(0);
    include_once './Dao/DaoAudio.php';
    include_once './Model/Audio.php';
    include_once './Dao/DaoComentario.php';
    include_once './Model/ComentarioAudio.php';
    include_once './Dao/DaoUsuario.php';
    include_once './Model/Usuario.php';
    include_once './Dao/DaoPublicidad.php';
    include_once './Model/Publicidad.php';
    include_once './Dao/DaoPublicidadPagina.php';
    //include_once './Dao/DaoCompraPublicidad.php';
    //include_once './Dao/DaoListas.php';
    
   session_start();
   
   //Sesión usuario
    $usuario=new Usuario(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
    if(!empty($_SESSION["idUsuario"]))
    {
        if($_SESSION["idUsuario"]!=="0"){
            $idUsuario =$_SESSION["idUsuario"];
            $daoUsuario=new DaoUsuario();
            $usuario= $daoUsuario->ObtenerUsuarioId($idUsuario);
            $usuario->setIdUsuario($idUsuario);
        }
    }

    //Audio y comentarios
    $DaoAudio = new DaoAudio();
    $DaoComentario = new DaoComentario();
    $Audio=new Audio(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
    $idaudio=htmlspecialchars($_GET["IdAudio"]);
    if(!empty($idaudio)){
        $Audio=$DaoAudio->ExtraerAudio($idaudio);
        $listaComentarios=$DaoComentario->BuscarComentarios($idaudio);
    }
    
    //Listas de reproduccion
    /*$DaoListas=new DaoListas();
    if(!empty($usuario->getIdUsuario())){
        $listasAudios=$DaoListas->BuscarListasReproduccion($usuario->getIdUsuario());
    }*/
    
    //Verificar si el video es gratis, eres el dueño o si ya lo has comprado
    //if(){}
    
    //Publicidad
    $daoPublicidadPagina= new DaoPublicidadPagina();
    $publicidad=$daoPublicidadPagina->BuscarPublicidadParaMostrar(7);
    $pathPublicidad=$publicidad->getPath();
    if(empty($pathPublicidad))
    {
        $pathPublicidad="City.mp4";
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cafe Vinyl</title>
		<link rel="stylesheet" type="text/css" href="CSS/Hoja_Estilo_BDM.css">
		<meta charset="UTF-8">
		<script src="JS/Codigo_Javascript_BDM.js"></script>
	</head>

	<body>
            <?php   if(is_null($usuario->getIdUsuario()))   {?>
            <form action="controller/ControllerPerfilUsuario.php" method="post">
		<div id="InicioSesionUsuario" style="z-index: -1001;display: block;">
                    <img src="Imagenes/Tacha.png" onclick="CerrarInicioSesionUsuario()">
                    <h1>Unete a la comunidad de Cafe Vinyl</h1>
                    <input type="text" name="CorreoInicioSesion" placeholder="*Correo" title="*Correo" class="InputCorto" id="CorreoInicioSesion" oninput="FBotonInicioSesion()">
                    <input type="password" name="ContrasenaInicioSesion" placeholder="*Contrasena" title="*Contrasena" class="InputCorto" style="margin-right: 0%;" id="ContrasenaInicioSesion" oninput="FBotonInicioSesion()">
                    <br>
                    <div style="display: inline;">
                            <input class="Boton" style="float: right; " type="submit" name="IniciarSesion" value="Inicia Sesion" id="BotonInicioSesion">
                    </div>
		</div>
            </form>
            <form action="controller/ControllerPerfilUsuario.php" method="post">
		<div id="RegistroUsuario" style="z-index: -1001;display: block;">
                    <img src="Imagenes/Tacha.png" onclick="CerrarRegistroUsuario()">
                    <h1>Unete a la comunidad de Cafe Vinyl</h1>
                    <input type="text" name="Alias" placeholder="*Alias" title="*Alias" class="InputLargo" id="RegistroAlias" oninput="FBotonRegistroUsuario()">
                    <input type="text" name="Nombre(s)" placeholder="*Nombre" title="*Nombre(s)" class="InputCorto" id="RegistroNombre" oninput="FBotonRegistroUsuario()">
                    <input type="text" name="Apellidos" placeholder="*Apellido paterno" title="*Apellido paterno" class="InputCorto" style="margin-right: 0%;"  id="RegistroApellidos" oninput="FBotonRegistroUsuario()">
                    <input type="text" name="Correo" placeholder="*Correo" title="*Correo" class="InputCorto" id="RegistroCorreo" oninput="FBotonRegistroUsuario()">
                    <input type="password" name="Contrasena" placeholder="*Contrasena" title="*Contrasena" class="InputCorto" style="margin-right: 0%;" id="RegistroContrasena" oninput="FBotonRegistroUsuario()">
                    <h4>*Fecha de nacimiento</h4>

                    <select style="margin-right: 20px;" title="Dia" name="dia"> <!--id="RegistroDia" oninput="BotonRegistroUsuario()">-->
                        <?php
                            for ($index = 1; $index < 32; $index++) {                                    
                                echo "<option value=$index>$index</option>";                                 
                            }   ?>                           
                    </select>

                    <select style="margin-right: 20px; width:160px;" title="Mes" name="mes"> <!--id="RegistroAlias" oninput="BotonRegistroUsuario()">-->
                            <option value="01">Enero</option>
                            <option value="02">Febrero</option>
                            <option value="03">Marzo</option>
                            <option value="04">Abril</option>
                            <option value="05">Mayo</option>
                            <option value="06">Junio</option>
                            <option value="07">Julio</option>
                            <option value="08">Agosto</option>
                            <option value="09">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                    </select>
                    <select title="Año" name="año"> <!--id="RegistroAlias" oninput="BotonRegistroUsuario()">-->
                        <?php
                            for ($index = 1920; $index < 2017; $index++) {
                                echo "<option value=$index>$index</option>";
                            }   ?>

                    </select>
                    <br>
                    <div style="font-size: 22px;display: inline;" title="*Sexo">
                            <input type="radio" name="Sexo" value="H" class="Radio" style="margin-right: 15px;" id="RegistroAlias" onclick="FBotonRegistroUsuario()" checked>Hombre
                            <input type="radio" name="Sexo" value="M" class="Radio" style="margin-right: 15px; margin-left: 15px;" id="RegistroAlias" onclick="FBotonRegistroUsuario()">Mujer
                    </div>
                    <div style="display: inline;"><input class="Boton" style="float: right;" name="Registro" value="Registrate" type="submit" id="BotonRegistroSesion"></button></div>
		</div>
            </form>
            <div id="EspacioGris" onclick="CerrarRegistroUsuario() ;CerrarInicioSesionUsuario()"></div>
            <?php }?>
		<div id="Encabezado">
			<div id="Logotipo">
				<a href="Pagina_Inicio.php">
					<img src="Imagenes/CafeVinyl.png">
				</a>
			</div>
			<div id="BusquedaAudio">
				<form action="Pagina_Inicio.php" method="get" style="    width: 75%; display: inline-flex;">
					<input type="text" placeholder="Buscar audio..." name="TituloAudioBusqueda">
				</form>
				<button class="Boton" style="margin-left:-9px;" onclick="DesplegarBusquedaAvanzada()">Avanzada</button>
			</div>

                        <?php   if(!is_null($usuario->getIdUsuario()))   {?>
                        <div id="NombreUsuario">
                            <h2><?php echo $usuario->getAlias();?></h2>
			</div>
                    
			<div id="FotoUsuario" onmouseover="Desplegar()" onmouseout="Minimizar()">
                                <img src="<?php if(empty($usuario->getFotoPerfil())){
                                    echo 'Imagenes/unknown.jpg';
                                } else{
                                    echo 'data:image/jpeg;base64,'.base64_encode($usuario->getFotoPerfil()).'';
                                }   ?>">
			</div>
			<div id="OpcionesUsuario" onmouseover="Desplegar()" onmouseout="Minimizar()">
                                <img src="Imagenes/Pestaña.png">
			</div>
			<div id="MenuOpciones" onmouseover="Desplegar()" onmouseout="Minimizar()">
				<a href=""><div class="OpcionMenu">Administrar audios</div></a>
				<a href="Carrito_Compras.php"><div class="OpcionMenu">Carrito de compras</div></a>
				<a href="Perfil_Usuario.php"><div class="OpcionMenu">Mi perfil</div></a>
				<a href="Usuario_Listas.php"><div class="OpcionMenu">Mis listas</div></a>
				<a href="Subir_Audio.php"><div class="OpcionMenu">Subir audio</div></a>
				<a href="Reporte_Ventas.php"><div class="OpcionMenu">Reporte de ventas</div></a>
                                <?php if($usuario->getTipoUsuario()==="A"){?>
                                    <a href="Subir_Videos_Publicitarios.php"><div class="OpcionMenu">Publicidad</div></a>
                                <?php } ?>
                                <a href="controller/ControllerPerfilUsuario.php?CerrarSesion=1&Pagina=6"><div class="OpcionMenu">Cerrar sesion</div></a>
			</div>
                        <?php   }   else    {?>
                            <div id="BotonesRegistro">
                            <button class="Boton" onclick="AbrirRegistroUsuario()">Registrate</button>
                            <button class="Boton" onclick="AbrirInicioSesionUsuario()">Iniciar sesion</button>
			</div>
                        <?php }?>
		</div>
		<div id="BusquedaAvanzada" style="display:none">
			<h2>Busqueda avanzada:
			<form action="Pagina_Inicio.php" method="get">
				<input type="text" placeholder="Titulo audio" name="TituloAudioBusqueda">
				<input type="text" placeholder="Nombre autor" name="AutorAudioBusqueda">
				Fecha inicio: <input type="date" name="FechaInicioBusqueda">
				Fecha fin: <input type="date" name="FechaFinBusqueda">
				<input type="submit" value="Buscar">
			</form>
		</div>

		<div id="EspacioContenido">
                    <div id="Contenido">
                            <div class="AudioContenido">
                                    <div class="DiscoVinilo" onclick="ReproducirAudio()">
                                            <div class="PortadaDiscoVinilo" style="background-image: url('Imagenes/Fondo_Musica.png');"></div>
                                    </div>
                                    <div class="AudioInfoCompleta">
                                        <h1 style="font-size: 50px;">$<?php echo $Audio->getPrecio();?>
                                                    <!--El color del fondo y el titulo de este carrito de compras cambia depende de si ya ha sido comprado o no-->
                                                    <?php   if($Audio->getPrecio()!==0){  ?>
                                                        <img class="CarritoCompras" src="Imagenes/Carro_Compras.png" title="Mandar al carrito de compras">
                                                    <?php   }   ?>
                                            </h1>
                                            <h1 style="font-size: 50px; margin-top:0px;"><?php echo $Audio->getTitulo();?></h1>
                                            <h2>por <a href="Perfil_Usuario.php" class="UsuarioLink"><?php echo $Audio->getnombreUsuario();?></a></h2>
                                            <p>Género: <?php echo $Audio->nombregenero;?></p>
                                            <p>Categoría: <?php echo $Audio->nombrecategoria;?></p>
                                            <?php //Si la cancion es gratis, es mia o ya la compre?>
                                            <audio id="PistaAudio" controls>
                                                <source src="Audio/<?php echo $Audio->getPath();?>" type="audio/mpeg">
                                            </audio>
                                            <?php   //else{ echo "Necesitas comprar este audio para poder escucharlo";}?>
                                            <?php   if(!empty($usuario->getIdUsuario()))    {
                                                if((int)$usuario->getIdUsuario()===$Audio->getIdUsuario()){ ?>
                                                <button class="Boton" style="margin-bottom: 10px; font-size: 17px;"><a href="Subir_Audio.php?IdAudio=<?php   echo $Audio->getIdAudio();    ?>">Editar audio</a></button>
                                                <button class="Boton" style="margin-bottom: 10px; font-size: 17px;"><a href="controller/ControllerGestionAudio.php?EliminarAudio=1&IdAudioEliminar=<?php   echo $Audio->getIdAudio();    ?>">Eliminar audio</a></button>
                                            <?php   }?>
                                            <!--<br><form>
                                                <p>Agregar a: <select>
                                                    <option value="0" selected="selected">Ninguno</option>
                                                    <?php   /*for($index=0;$index<count($listaReproduccion);$index++) {
                                                        echo "<option value="; echo $listaReproduccion[$index]->getIdListaReproduccion();
                                                    }*/   ?>
                                                    </select> <input type="submit" value="Agregar a lista de reproduccion" class="Boton"></p>
                                            </form>-->
                                            <?php   }   ?>

                                    </div>
                            </div>
                            <h1 style="font-size: 50px;">Comentarios</h1>
                            <div id="Comentarios">
                                <?php
                                    for($index =0;$index<count($listaComentarios);$index++)
                                    {
                                        echo "<div class=\"Comentario\"><div class=\"FotoUsuarioComentario\"><a href=\"Perfil_Usuario.php\"><img src=\"Imagenes/user_old.png\"></a></div>";
                                        echo "<div class=\"NombreUsuarioComentario\"><p><a href=\"Perfil_Usuario.php?Idperfil="; echo $listaComentarios[$index]->getIdUsuario(); echo "\" class=\"UsuarioLink\">"; echo $listaComentarios[$index]->getNombreUsurio();echo ": \t</a>";
                                        echo $listaComentarios[$index]->getComentario(); echo "</p></div></div>";
                                    }
                                ?>
                            </div> <br>
                            <?php   if(!empty($usuario->getIdUsuario())){   ?>
                            <form  action="controller/ControllerGestionComentario.php" method="get">
                                <input type="number" value="0" name="IdComentario" style="display: none;">
                                <input type="number" value="4" name="IdUsuario" style="display: none;">
                                <input type="number" value="<?php echo $Audio->getIdAudio();?>" name="IdAudio" style="display: none;">
                                <textarea title="Puedes comentar aqui..." placeholder="Puedes comentar aqui..." name="ComentarioTexto" style="margin-bottom:20px; width: 97.6%;"></textarea>
                                <input type="submit" value="Comentar" class="Boton">
                            </form>
                            <?php   }   else    {?>
                                <p>Inicia sesion o crea una cuenta para comentar este audio</p>
                            <?php   }   ?>
                    </div>
                        <div id="Publicidad">
                            <video autoplay muted>
                                <?php   echo "<source src=Videos/"; echo $pathPublicidad;echo " type=video/mp4> ";  ?>
                                Este browser no acepta videos
                            </video>
                            <?php   if(!empty($usuario->getFotoPortada())){
                                echo '<img src="'.'data:image/jpeg;base64,'.base64_encode($usuario->getFotoPortada()).''.'">';
                            }?>
			</div>
		</div>
	</body>
</html>