<!DOCTYPE html>
<html>
	<head>
		<title>Cafe Vinyl</title>
		<link href='https://fonts.googleapis.com/css?family=Teko:600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="CSS/Hoja_Estilo_BDM.css">
		<meta charset="UTF-8">
                <script src="JS/Codigo_Javascript_BDM.js"></script>
	</head>

	<body>
		<div id="RegistroUsuario">
			<button class="Boton">Registrate</button>
			<!--Opcional
				<p>Registrate o</p>
				<p>Inicia sesión</p>
			-->
			<!--Este botón alterna el contenido entre Registrate o Iniciar sesión. También alteraría la altura de Registro Usuario (390px-280px)-->
			<img src="Tacha.png" onclick="CerrarRegistroUsuario()">
			<h1>Unete a la comunidad de Cafe Vinyl</h1>
			<!--Iniciar sesión solo muestra los campos de correo y contraseña-->
			<!--Registrarte como usuario-->
			<input type="text" name="Alias" placeholder="*Alias" title="*Alias" class="InputLargo" value="Benjamin">
			<input type="text" name="Nombre(s)" placeholder="*Nombre" title="*Nombre(s)" class="InputCorto" value="Benjamin">
			<input type="text" name="Apellidos" placeholder="*Apellidos" title="*Apellidos" class="InputCorto" style="margin-right: 0%;" value="Navarro Salinas">
			<input type="text" name="Correo" placeholder="*Correo" title="*Correo" class="InputCorto" value="copia321@hotmaili.com">
			<input type="password" name="Contrasena" placeholder="*Contrasena" title="*Contrasena" class="InputCorto" style="margin-right: 0%;">
			<h4>*Fecha de nacimiento</h4>
			<select style="margin-right: 20px;" title="Dia">
				<option>01</option>
				<option>02</option>
				<option>03</option>
			</select>
			<select style="margin-right: 20px; width:160px;" title="Mes">
				<option>Enero</option>
				<option>Febrero</option>
				<option>Marzo</option>
				<option>Abril</option>
				<option>Mayo</option>
				<option>Junio</option>
				<option>Julio</option>
				<option>Agosto</option>
				<option>Septiembre</option>
				<option>Octubre</option>
				<option>Noviembre</option>
				<option>Diciembre</option>
			</select>
			<select title="Año">
				<option>2014</option>
				<option>2015</option>
				<option>2016</option>
			</select>
			<br>
			<div style="font-size: 22px;display: inline;" title="*Sexo">
				<input type="radio" name="Sexo" value="Hombre" class="Radio" style="margin-right: 15px;">Hombre
				<input type="radio" name="Sexo" value="Mujer" class="Radio" style="margin-right: 15px; margin-left: 15px;">Mujer
			</div>
			<div style="display: inline;"><button class="Boton" style="float: right;" type="submit" >Registrate</button></div>
		</div>
		<div id="EspacioGris" onclick="CerrarRegistroUsuario()"></div>

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
			<!--BotonesRegistro, espacio gris y el de registro de usuario aparece si el usuario no está conectado-->
			<div id="BotonesRegistro">
				<button class="Boton" onclick="AbrirRegistroUsuario()">Registrate</button>
				<button class="Boton" onclick="AbrirRegistroUsuario()">Iniciar sesion</button>
			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<div id="EspacioPerfil">
					<div style="background-image: url('Fondo_Portada.jpg');" id="PerfilPortada" onmouseover="MostrarCargarImagen(0)" onmouseout="OcultarCargarImagen(0)"><img src="Imagenes/Carga.png" class="Cargar"></div>
					<div style="background-image: url('user.png');" id="PerfilAvatar"  onmouseover="MostrarCargarImagen(1)" onmouseout="OcultarCargarImagen(1)"><img src="Imagenes/Carga.png" class="Cargar"></div>
					<h2 id="NombrePerfil">Benjamin</h2>
				</div>
				<h2>Informacion personal <button class="Boton" style="margin-bottom: 10px; font-size: 17px;" onclick="MostrarEditorInformacionPersonal()">Editar datos personales</button></h2>
				<!--Editar informacion personal-->
				<div id="EdicionInformacionPersonal">
					<input type="text" name="Alias" placeholder="*Alias" title="*Alias" class="InputLargo" value="Benjamin" style="width: 93%;">
					<input type="text" name="Nombre(s)" placeholder="*Nombre" title="*Nombre(s)" class="InputCorto" value="Benjamin">
					<input type="text" name="Apellidos" placeholder="*Apellidos" title="*Apellidos" class="InputCorto" style="margin-right: 0%;" value="Navarro Salinas">
					<input type="text" name="Correo" placeholder="*Correo" title="*Correo" class="InputCorto" value="copia321@hotmail.com">
					<input type="password" name="*ContrasenaAnterior" placeholder="*Contrasena anterior" title="Contrasena anterior" class="InputCorto" style="margin-right: 0%;" value="secreto">
					<input type="password" name="ContrasenaNueva" placeholder="Contrasena nueva" title="Contrasena nueva" class="InputCorto">
					<input type="password" name="ConfirmaContrasena" placeholder="Confirma contrasena" title="Confirma contrasena" class="InputCorto" style="margin-right: 0%;">
					<br><h4 style="color: black;">*Fecha de nacimiento</h4><br>
					<h4>Dia</h4>
					<select style="margin-right: 20px;" title="Dia">
						<option>01</option>
					</select>
					<h4>Mes</h4>
					<select style="margin-right: 20px; width:160px;" title="Mes">
						<option>Enero</option>
						<option>Febrero</option>
						<option>Marzo</option>
						<option>Abril</option>
						<option>Mayo</option>
						<option>Junio</option>
						<option>Julio</option>
						<option>Agosto</option>
						<option>Septiembre</option>
						<option>Octubre</option>
						<option>Noviembre</option>
						<option>Diciembre</option>
					</select>
					<h4>Año</h4>
					<select title="Año">
						<option>2016</option>
					</select>
					<br>
					<h4 style="color: black;">*Sexo</h4>
					<div style="font-size: 22px;display: inline;" title="*Sexo">
						<input type="radio" name="Sexo" value="Hombre" class="Radio" style="margin-right: 15px;" checked>Hombre
						<input type="radio" name="Sexo" value="Mujer" class="Radio" style="margin-right: 15px; margin-left: 15px;">Mujer
					</div>
					<br>
					<h4 style="color: black;">*Domicilio</h4><br>
					<h4 style="margin-right: 92px;">Calle</h4><input type="text" name="Calle" placeholder="*Calle" title="*Calle" value="Green Coast" style="margin-right: 20px;">
					<h4>Numero de casa</h4><input type="number" name="NumeroCasa" placeholder="*Numero" title="*Numero" value="782" style="width: 206px;">
					<br>
					<h4 style="margin-right: 69px;">Colonia</h4><input type="text" name="Colonia" placeholder="*Colonia" title="*Colonia" value="Las Mayorcas" style="margin-right: 23px;">
					<h4 style="margin-right: 67px;">Municipio</h4>
					<select title="Municipio" style="width: 237px;">
						<option>San Nicolás de los Garza</option>
					</select>
					<br>
					<h4 style="margin-right: 72px;">Estado</h4>
					<select title="Estado" style="margin-right: 20px; width: 280px;">
						<option>Nuevo Leon</option>
					</select>
					<h4 style="margin-right: 115px;">Pais</h4>
					<select title="Pais">
						<option>Canada</option>
						<option>Estados Unidos de América</option>
						<option>Mexico</option>
					</select>
					<br>
					<h4>Codigo postal</h4><input type="number" name="CodigoPostal" placeholder="*Codigo Postal" title="*Codigo Postal" value="47832" style="margin-right: 20px;">

					<div style="display:inline;">
						<button class="Boton" type="submit" style="margin-right: 140px; margin-left: 19px;" onclick="OcultarEditorInformacionPersonal()">Cancelar</button>
						<button class="Boton" type="submit" >Guardar cambios</button>
					</div>
				</div>
					<!--Información personal-->
				<div id="InformacionPersonal">
					<table>
						<tr>
							<td>Alias: </td>
							<td>Benjamin</td>
						</tr>
						<tr>
							<td style="width: 160px;">Nombre completo:</td>
							<td>Benjamin Navarro Salinas</td>
						</tr>
						<tr>
							<td>Correo: </td>
							<td>BNS@gmail.com</td>
						</tr>
						<tr>
							<td title="Solo tu puedes ver esto">Domicilio: </td>
							<td title="Solo tu puedes ver esto">*Green Coast #782, Res. Las Puentes. San Nicolas de los Garza, Nuevo León, México</td>
						</tr>
						<tr>
							<td title="Solo tu puedes ver esto">Codigo postal: </td>
							<td title="Solo tu puedes ver esto">36848</td>
						</tr>
					</table>
					</div>
				<h1>Audios de este artista</h1>
				<div class="AudioVista" style="background-image: url('2.jpg');"></div>
				<div class="AudioVista" style="background-image: url('3.png');"></div>
				<div class="AudioVista" style="background-image: url('4.jpg');"></div>
				<div class="AudioVista" style="background-image: url('5.jpg');"></div>
				<div class="AudioVista" style="background-image: url('6.jpg');"></div>
				<div class="AudioVista" style="background-image: url('7.jpg');"></div>
				<div class="AudioVista" style="background-image: url('8.jpg');"></div>
				<div class="AudioVista" style="background-image: url('9.jpg');"></div>
			</div>
			<div id="Publicidad">
				<video autoplay loop>
					<source src="Videos/City.mp4" type="video/mp4">
					Este browser no acepta videos
				</video>
				<img src="Imagenes/CafeVinyl1.jpg" style="width: 70%; height: 70%">
			</div>
		</div>
	</body>
</html>