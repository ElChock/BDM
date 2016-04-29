<!DOCTYPE html>
<html>
	<head>
		<title>Cafe Vinyl</title>
		<link href='https://fonts.googleapis.com/css?family=Teko:600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="Hoja_Estilo_BDM.css">
		<meta charset="UTF-8">

		<script src="Codigo_Javascript_BDM.js"></script>
	</head>

	<body>
		<div id="Encabezado">
			<div id="Logotipo">
				<a href="Pagina_Inicio.html">
					<img src="CafeVinyl.png">
				</a>
			</div>
			<div id="BusquedaAudio">
				<form>
					<input type="text" placeholder="Buscar audio..." name="BuscarAudio">
				</form>
			</div>

			<div id="NombreUsuario">
				<h2>Benjamin</h2>
			</div>
			<div id="FotoUsuario" onmouseover="Desplegar()" onmouseout="Minimizar()">
				<img src="user.png" >
			</div>
			<div id="OpcionesUsuario" onmouseover="Desplegar()" onmouseout="Minimizar()">
				<img src="Pestaña.png">
			</div>

			<div id="MenuOpciones" onmouseover="Desplegar()" onmouseout="Minimizar()">
				<a href=""><div class="OpcionMenu">Administrar audios</div></a>
				<a href=""><div class="OpcionMenu">Carrito de compras</div></a>
				<a href="Perfil_Usuario.html"><div class="OpcionMenu">Mi perfil</div></a>
				<a href=""><div class="OpcionMenu">Mis listas</div></a>
				<a href=""><div class="OpcionMenu">Subir audio</div></a>
				<a href=""><div class="OpcionMenu">Reporte de ventas</div></a>
			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<div class="AudioContenido">
					<div class="DiscoVinilo" onclick="ReproducirAudio()">
						<div class="PortadaDiscoVinilo" style="background-image: url('4.jpg');"></div>
					</div>
					<div class="AudioInfoCompleta">
						<h1 style="font-size: 50px;">$49.00
							<!--El color del fondo y el titulo de este carrito de compras cambia depende de si ya ha sido comprado o no-->
							<img class="CarritoCompras" src="Carro_Compras.png" title="Mandar al carrito de compras">
						</h1>
						<h1 style="font-size: 50px; margin-top:0px;">You are not alone</h1>
						<h2>por <a href="Perfil_Usuario.html" class="UsuarioLink">Michael Jackson</a></h2>
						<p>Género: RB, Soul</p>
						<p>Categorías: Epic, R. Kelly, Single</p>
						<audio id="PistaAudio" controls> <!--Verificar-->
							<source src="You_Are Not_Alone.mp3" type="audio/mpeg">
						</audio>
						<div id="ListaAudios">
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
						</div>
					</div>
				</div>
				<h1 style="font-size: 50px;">Comentarios</h1>
				<div id="Comentarios">
					<div class="Comentario">
						<div class="FotoUsuarioComentario">
							<a href="Perfil_Usuario.html"><img src="user_old.png"></a>
						</div>
						<div class="NombreUsuarioComentario">
							<p><a href="Perfil_Usuario.html" class="UsuarioLink">Nelson</a> Always a lovely song</p>
						</div>
					</div>
				</div> <br>
				<form>
					<textarea title="Puedes comentar aqui..." placeholder="Puedes comentar aqui..." name="ComentarioNuevo" style="margin-bottom:20px;"></textarea>
				</form>
			</div>
			<div id="Publicidad">
				<video autoplay loop>
					<source src="City.mp4" type="video/mp4">
					Este browser no acepta videos
				</video>
				<img src="CafeVinyl1.jpg" style="width: 70%; height: 70%">
			</div>
		</div>
	</body>
</html>