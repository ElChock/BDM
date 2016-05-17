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
				<a href="Subir_Videos_Publicitarios.html"><div class="OpcionMenu">Publicidad</div></a>			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<div class="AudioContenido">
					<div class="SubirImagenAudio" onclick="SubirImagen()"></div>
					<div class="AudioInfoCompleta">
						<form>
							<h4>Artista: Benjamin Navarro Salinas</h4>
							<h4>Titulo: </h4><input type="text" name="AudioTitulo">
							<h4>Precio (en pesos): </h4><input type="number" name="AudioPrecio" title="Precio (en pesos)" value="0">
							<h4>Genero(s): 
								<p><input type="checkbox" value="0" name="Genero"> Rock</p>
								<p><input type="checkbox" value="1" name="Genero"> Pop</p>
								<p><input type="checkbox" value="2" name="Genero"> Electronica</p>
							</h4>
							<h4>Categoria(s):
								<p><input type="checkbox" value="0" name="Categoria"> Solo</p>
								<p><input type="checkbox" value="1" name="Categoria"> Album</p>
								<p><input type="checkbox" value="2" name="Categoria"> Educativo</p>
							</h4>
							<input type="file" name="audio" accept="audio/*">
							<input type="submit" value="Subir cancion">
						</form>
					</div>
				</div>
			</div>
			<div id="Publicidad">
				<img src="Fondo_Portada.jpg">
			</div>
		</div>
	</body>
</html>