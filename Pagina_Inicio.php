<?PhP
            error_reporting(0);
            include_once './Dao/DaoAudio.php';
            include_once './Model/Audio.php';
            include_once './Dao/DaoUsuario.php';
            include_once './Model/Usuario.php';
            include_once './Dao/DaoPais.php';
            include_once './Model/pais.php';
           session_start();
           
           $DaoAudio = new DaoAudio();
            //Busqueda Audio
            $TituloAudioBusqueda=htmlspecialchars($_GET["TituloAudioBusqueda"]);
            $AutorAudioBusqueda=htmlspecialchars($_GET["AutorAudioBusqueda"]);
            $FechaInicioBusqueda=htmlspecialchars($_GET["FechaInicioBusqueda"]);
            $FechaFinBusqueda=htmlspecialchars($_GET["FechaFinBusqueda"]);
            if(empty($FechaInicioBusqueda) or empty($FechaFinBusqueda)){
                $listaAudios=$DaoAudio->BuscarAudio(NULL,NULL,$TituloAudioBusqueda,$AutorAudioBusqueda);
            } else{
                $listaAudios=$DaoAudio->BuscarAudio($FechaInicioBusqueda,$FechaFinBusqueda,$TituloAudioBusqueda,$AutorAudioBusqueda);
            }
            
            //Sesión usuario
            $usuario=new Usuario(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
            if(!empty($_SESSION["idUsuario"]))
            {
                $idUsuario =$_SESSION["idUsuario"];
                $daoUsuario=new DaoUsuario();
                $usuario= $daoUsuario->ObtenerUsuarioId($idUsuario);
            }

            //Publicidad
            /*$daoPublicidadPagina= new DaoPublicidadPagina();
            $publicidad=$daoPublicidadPagina->BuscarPublicidadParaMostrar(5);
            $pathPublicidad=$publicidad->getPath();
            if(empty($pathPublicidad))
            {
                $pathPublicidad="City.mp4";
            }*/
            
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
		<div id="InicioSesionUsuario">
			<!--Opcional
			inicio de secion
			-->
			<!--Este botón alterna el contenido entre Registrate o Iniciar sesión. También alteraría la altura de Registro Usuario (390px-280px)-->
			<img src="Imagenes/Tacha.png" onclick="CerrarInicioSesionUsuario()">
			<h1>Unete a la comunidad de Cafe Vinyl</h1>
			<!--Iniciar sesión solo muestra los campos de correo y contraseña-->
			<!--Registrarte como usuario-->
			<input type="text" name="CorreoInicioSesion" placeholder="*Correo" title="*Correo" class="InputCorto" >
			<input type="password" name="ContrasenaInicioSesion" placeholder="*Contrasena" title="*Contrasena" class="InputCorto" style="margin-right: 0%;">

			<br>
                	<div style="display: inline;"><input class="Boton" style="float: right;" type="submit" name="IniciarSesion" value="Inicia Sesion">Inicia Sesion</button></div>
		</div>
            </form>
            <form action="controller/ControllerPerfilUsuario.php" method="post">
		<div id="RegistroUsuario">
			<!--Opcional
				registro de usuario
			-->
			<!--Este botón alterna el contenido entre Registrate o Iniciar sesión. También alteraría la altura de Registro Usuario (390px-280px)-->
			<img src="Imagenes/Tacha.png" onclick="CerrarRegistroUsuario()">
			<h1>Unete a la comunidad de Cafe Vinyl</h1>
			<!--Iniciar sesión solo muestra los campos de correo y contraseña-->
			<!--Registrarte como usuario-->
			<input type="text" name="Alias" placeholder="*Alias" title="*Alias" class="InputLargo" >
			<input type="text" name="Nombre(s)" placeholder="*Nombre" title="*Nombre(s)" class="InputCorto" >
			<input type="text" name="Apellidos" placeholder="*Apellido paterno" title="*Apellido paterno" class="InputCorto" style="margin-right: 0%;" >
			<input type="text" name="Correo" placeholder="*Correo" title="*Correo" class="InputCorto" >
			<input type="password" name="Contrasena" placeholder="*Contrasena" title="*Contrasena" class="InputCorto" style="margin-right: 0%;">
			<h4>*Fecha de nacimiento</h4>
                        
			<select style="margin-right: 20px;" title="Dia" name="dia">
                            <?php
                                for ($index = 1; $index < 32; $index++) {
                                    
                                    echo "<option value=$index>$index</option>";
                                 
                                }

                            ?>                           
			</select>
     
			<select style="margin-right: 20px; width:160px;" title="Mes" name="mes">
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
			<select title="Año" name="año">
                            <?php
                                for ($index = 1920; $index < 2017; $index++) {
                                    
                                    echo "<option value=$index>$index</option>";
                                   
                                }
                            ?>
	
			</select>
			<br>
			<div style="font-size: 22px;display: inline;" title="*Sexo">
				<input type="radio" name="Sexo" value="H" class="Radio" style="margin-right: 15px;">Hombre
				<input type="radio" name="Sexo" value="M" class="Radio" style="margin-right: 15px; margin-left: 15px;">Mujer
			</div>
			<div style="display: inline;"><input class="Boton" style="float: right;" name="Registro" value="Registrate" type="submit" ></button></div>
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
				<img src="Imagenes/user.png" <?php //echo $usuario->getfoto();?> >
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
                                <?php //if(este usuario es administrador){?>
				<a href="Subir_Videos_Publicitarios.php"><div class="OpcionMenu">Publicidad</div></a>
                                <?php//}?>
                                <a href=""><div class="OpcionMenu">Cerrar sesion</div></a>
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
				<!--<h1>Popular</h1>-->
                                <?php
                                    if(count($listaAudios)<=0){
                                        echo "<h1>No se encontro ningun audio</h1>";
                                    } else{
                                        echo "<h1>Resultados</h1>";
                                        for($index =0;$index<count($listaAudios);$index++)
                                        {
                                            echo "<a class=\"AudioVista\" style=\"background-image: url('Imagenes/Fondo_Musica.png');\" href=\"Pagina_Audio.php?IdAudio=";echo $listaAudios[$index]->getIdAudio();echo"\">";
                                            echo "<div class=\"AudioInfo\"><h3>";echo $listaAudios[$index]->getTitulo();echo "</h3><h4>";echo $listaAudios[$index]->getnombreUsuario() ;echo "</h4></div></a>";
                                        }
                                    }
                                ?>
			</div>
			<div id="Publicidad">
				<!--<video autoplay loop muted>
                                    <source src="Videos/City.mp4" type="video/mp4">
					Este browser no acepta videos
				</video>-->
				<img src="Imagenes/Fondo_Portada.jpg" <?php //echo $usuario->getfoto();?>>
			</div>
		</div>
	</body>
</html>