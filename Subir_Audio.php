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
					<div class="SubirImagenAudio" onclick="SubirImagen()"></div>
					<div class="AudioInfoCompleta">
						<form>
							<h4>Precio</h4><input type="number" name="AudioPrecio" title="Precio (en pesos)">
							<h4>Titulo</h4><input type="text" name="AudioTitulo">
							<h4>Artista: Benjamin Navarro</h4>
							<!--No requiere ser introducido-->
							<h4>Genero(s):</h4>
							<select>
								<option>Pop</option>
								<option>Rock</option>
								<option>Hip-Hop</option>
							</select>
							<button>Agregar</button>
							<textarea title="Genero(s) (generos separados por coma)"></textarea>
							<h4>Categoria(s):</h4>
							<textarea title="Categoria(s) (categorias separados por coma)"></textarea>
						</form>
					</div>
				</div>
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