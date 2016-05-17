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
				<form action="Pagina_Inicio.html" method="get">
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
				<a href="Subir_Videos_Publicitarios.html"><div class="OpcionMenu">Publicidad</div></a>
			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<h1>Popular</h1>
				<div class="AudioVista" style="background-image: url('1.jpg');" onmouseover="DesplegarInformacionAudio(0)" onmouseout="Minimizar()">
					<div class="AudioInfo">
						<h3>Devil's Gun</h3>
						<h4>Raising the beast</h4>
					</div>
				</div>
				<div class="AudioVista" style="background-image: url('2.jpg');"></div>
				<div class="AudioVista" style="background-image: url('3.png');"></div>
				<div class="AudioVista" style="background-image: url('4.jpg');"></div>
				<div class="AudioVista" style="background-image: url('5.jpg');"></div>
				<div class="AudioVista" style="background-image: url('6.jpg');"></div>
				<div class="AudioVista" style="background-image: url('7.jpg');"></div>
				<div class="AudioVista" style="background-image: url('8.jpg');"></div>
				<div class="AudioVista" style="background-image: url('9.jpg');"></div>
				<div class="AudioVista" style="background-image: url('10.jpg');"></div>
				<div class="AudioVista" style="background-image: url('1.jpg');"></div>
				<div class="AudioVista" style="background-image: url('2.jpg');"></div>
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