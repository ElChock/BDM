<!DOCTYPE html>
<html>
	<head>
		<title>Cafe Vinyl</title>
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
				<a href="Carrito_Compras.html"><div class="OpcionMenu">Carrito de compras</div></a>
				<a href="Perfil_Usuario.html"><div class="OpcionMenu">Mi perfil</div></a>
				<a href="Usuario_Listas.html"><div class="OpcionMenu">Mis listas</div></a>
				<a href="Subir_Audio.html"><div class="OpcionMenu">Subir audio</div></a>
				<a href="Reporte_Ventas.html"><div class="OpcionMenu">Reporte de ventas</div></a>
				<a href="Subir_Videos_Publicitarios.html"><div class="OpcionMenu">Publicidad</div></a>			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<h1>Clasicos</h1>
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

			<div id="Publicidad">
				<video autoplay loop muted>
					<source src="City.mp4" type="video/mp4">
					Este browser no acepta videos
				</video>
				<img src="Fondo_Portada.jpg">
			</div>
		</div>
	</body>
</html>