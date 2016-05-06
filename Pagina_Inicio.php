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
				<a href=""><div class="OpcionMenu">Carrito de compras</div></a>
                                <a href="Perfil_Usuario.php"><div class="OpcionMenu">Mi perfil</div></a>
				<a href=""><div class="OpcionMenu">Mis listas</div></a>
				<a href=""><div class="OpcionMenu">Subir audio</div></a>
				<a href=""><div class="OpcionMenu">Reporte de ventas</div></a>
			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<h1>Popular</h1>
				<div class="AudioVista" style="background-image: url('Imagenes/1.jpg');" onmouseover="DesplegarInformacionAudio(0)" onmouseout="Minimizar()">
					<div class="AudioInfo">
						<h3>Devil's Gun</h3>
						<h4>Raising the beast</h4>
					</div>
				</div>
				<div class="AudioVista" style="background-image: url('Imagenes/2.jpg');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/3.png');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/4.jpg');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/5.jpg');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/6.jpg');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/7.jpg');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/8.jpg');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/9.jpg');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/10.jpg');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/1.jpg');"></div>
				<div class="AudioVista" style="background-image: url('Imagenes/2.jpg');"></div>
			</div>
			<div id="Publicidad">
				<video autoplay loop muted>
                                    <source src="Videos/City.mp4" type="video/mp4">
					Este browser no acepta videos
				</video>
				<img src="Imagenes/CafeVinyl1.jpg" style="width: 70%; height: 70%">
			</div>
		</div>
	</body>
</html>