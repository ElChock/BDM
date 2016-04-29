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
				<h1>Mis listas de reproduccion</h1>
				
				<a href="" class="ListaVista" style="background-image: url('Lista_Clasica.jpg');">
						<div class="ListaInfo">
							<h3>Clasicos</h3>
							<h4>15 canciones</h4>
						</div>
				</a>

				<a href="" class="ListaVista" style="background-image: url('Lista_Rock.jpg');">
						<div class="ListaInfo">
							<h3>Rock</h3>
							<h4>22 canciones</h4>
						</div>
				</a>

				<a href="" class="ListaVista" style="background-image: url('Lista_Electronica.jpg');">
						<div class="ListaInfo">
							<h3>Electronic</h3>
							<h4>7 canciones</h4>
						</div>
				</a>
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