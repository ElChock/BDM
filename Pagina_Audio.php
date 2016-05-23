<?PhP
            error_reporting(0);
            include_once './Dao/DaoAudio.php';
            include_once './Model/Audio.php';
           session_start();
            $DaoAudio = new DaoAudio();
            $Audio=new Audio(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
            $idaudio=htmlspecialchars($_GET["IdAudio"]);
            if(!empty($idaudio)){
                $Audio=$DaoAudio->ExtraerAudio($idaudio);
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

			<div id="NombreUsuario">
				<h2>Benjamin</h2>
			</div>
			<div id="FotoUsuario" onmouseover="Desplegar()" onmouseout="Minimizar()">
				<img src="Imagenes/user.png" >
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
				<a href="Subir_Videos_Publicitarios.php"><div class="OpcionMenu">Publicidad</div></a>
			</div>
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
                                                        <img class="CarritoCompras" src="Imagenes/Carro_Compras.png" title="Mandar al carrito de compras">
						</h1>
                                                <h1 style="font-size: 50px; margin-top:0px;"><?php echo $Audio->getTitulo();?></h1>
                                                <h2>por <a href="Perfil_Usuario.php" class="UsuarioLink"><?php echo $Audio->getnombreUsuario();?></a></h2>
						<p>Género: <?php echo $Audio->nombregenero;?></p>
						<p>Categoría: <?php echo $Audio->nombrecategoria;?></p>
						<audio id="PistaAudio" controls>
                                                    <source src="Audio/<?php echo $Audio->getPath();?>" type="audio/mpeg">
						</audio>
						<!--<div id="ListaAudios">
							<div class="ListaAudio">
								<div class="FotoListaAudio">
									<img src="4.jpg">
								</div>
								<div class="NombreAudioLista">
										<h4>You're not alone</h4>
										<p>Michael Jackson</p>
								</div>
							</div>
							<div class="ListaAudio">
								<div class="FotoListaAudio">
									<img src="5.jpg">
								</div>
								<div class="NombreAudioLista">
										<h4>89</h4>
										<p>Eminem y 50 Cent</p>
								</div>
							</div>
						</div>-->
					</div>
				</div>
				<h1 style="font-size: 50px;">Comentarios</h1>
				<div id="Comentarios">
					<div class="Comentario">
						<div class="FotoUsuarioComentario">
                                                    <a href="Perfil_Usuario.php"><img src="Imagenes/user_old.png"></a>
						</div>
						<div class="NombreUsuarioComentario">
							<p><a href="Perfil_Usuario.php" class="UsuarioLink">Nelson</a> Always a lovely song</p>
						</div>
					</div>
				</div> <br>
				<form  action="Pagina_Audio.php" method="get">
					<textarea title="Puedes comentar aqui..." placeholder="Puedes comentar aqui..." name="ComentarioNuevo" style="margin-bottom:20px; width: 97.6%;"></textarea>
					<input type="submit" value="Comentar">
				</form>
			</div>
			<div id="Publicidad">
				<!--<video autoplay loop muted>
                                    <source src="Videos/City.mp4" type="video/mp4">
					Este browser no acepta videos
				</video>-->
                                <img src="Imagenes/Fondo_Portada.jpg">
			</div>
		</div>
	</body>
</html>