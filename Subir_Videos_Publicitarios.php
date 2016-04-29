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
			<div id="Contenido" style="width: 100%">
				<h3>Videos promocionales</h3>
				<div id="BuscarVideosPromocionales">
					<p>Buscar videos</p>
					<form>
						<p>Dia</p>
						<select>
							<option>Todos</option>
							<option>Lunes</option>
							<option>Martes</option>
							<option>Miercoles</option>
							<option>Jueves</option>
							<option>Viernes</option>
							<option>Sabado</option>
							<option>Domingo</option>
						</select>
						<p>Hora</p>
						<select>
							<option>Todas</option>
							<option>0:00-1:00</option>
							<option>1:00-2:00</option>
							<option>2:00-3:00</option>
							<!--Todas hasta las 24 horas-->
						</select>
						<button>Buscar</button>
					</form>
				</div>

				<table id="TablaVideosPublicitarios" style="text-align: center;">
					<tr>
						<th id="TVP_Eliminar">Eliminar</th>
						<th id="TVP_Video">Video</th>
						<th id="TVP_Horarios">Horarios</tH>
					</tr>
					<tr>
						<td><button>Eliminar</button></td>
						<td><a href="City.mp4" target="_blank"><img src="Thumbnail1.png" class="Thumbnail"></a></td>
						<td>Default<br>
						<img src="Boton_Articulo.png" title="Agregar horario"> Agregar horario</td>
					</tr>
					<tr>
						<td><button>Eliminar</button></td>
						<td><a href="City.mp4" target="_blank"><img src="Thumbnail2.png" class="Thumbnail"></a></td>
						<td><button>X</button> Lunes 1:00-3:00
						<button class="EliminarArticulo">X</button> Miercoles 15:00-16:00
						<button class="EliminarArticulo">X</button> Miercoles 09:00-11:00
						<img src="Boton_Articulo.png" class="BotonArticulo" title="Agregar"> Agregar horario</td>
					</tr>
					<tr>
						<td><button>Guardar</button></td>
						<td><input type="file"></td>
						<td>>Default <br>
						<img src="Boton_Articulo.png" class="BotonArticulo" title="Agregar"> Agregar horario <br>
						Dia <select class="Selecciona"></select> Hora de inicio <select class="Selecciona"></select> Hora de fin <select class="Selecciona"></select>
						</td>
					</tr>
					<tr>
						<td colspan="3"><button>Agregar un video</button></td>
					</tr>
				</table>
			</div>
			</div>
	</body>
</html>