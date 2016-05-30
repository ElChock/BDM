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
				<form>
					<input type="text" placeholder="Buscar audio..." name="BuscarAudio">
				</form>
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
				<a href="Subir_Videos_Publicitarios.php"><div class="OpcionMenu">Publicidad</div></a>			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<h1>Mis listas de reproduccion</h1>
				
				<a href="" class="ListaVista" style="background-image: url('Imagenes/Lista_Clasica.jpg');">
						<div class="ListaInfo">
							<h3>Clasicos</h3>
							<h4>15 canciones</h4>
						</div>
				</a>

				<a href="" class="ListaVista" style="background-image: url('Imagenes/Lista_Rock.jpg');">
						<div class="ListaInfo">
							<h3>Rock</h3>
							<h4>22 canciones</h4>
						</div>
				</a>

				<a href="" class="ListaVista" style="background-image: url('Imagenes/Lista_Electronica.jpg');">
						<div class="ListaInfo">
							<h3>Electronic</h3>
							<h4>7 canciones</h4>
						</div>
				</a>
			</div>

			<div id="Publicidad">
				<video autoplay loop muted>
                                    <source src="Videos/City.mp4" type="video/mp4">
					Este browser no acepta videos
				</video>
                            <img src="Imagenes/Fondo_Portada.jpg">
			</div>
		</div>
	</body>
</html>