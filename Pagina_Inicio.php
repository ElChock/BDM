<?PhP
            error_reporting(0);
            include_once './Dao/DaoAudio.php';
            include_once './Model/Audio.php';
           session_start();
            $DaoAudio = new DaoAudio();
            $TituloAudioBusqueda=htmlspecialchars($_GET["TituloAudioBusqueda"]);
            $AutorAudioBusqueda=htmlspecialchars($_GET["AutorAudioBusqueda"]);
            $FechaInicioBusqueda=htmlspecialchars($_GET["FechaInicioBusqueda"]);
            $FechaFinBusqueda=htmlspecialchars($_GET["FechaFinBusqueda"]);
            if(empty($FechaInicioBusqueda) or empty($FechaFinBusqueda)){
                $listaAudios=$DaoAudio->BuscarAudio(NULL,NULL,$TituloAudioBusqueda,$AutorAudioBusqueda);
            } else{
                $listaAudios=$DaoAudio->BuscarAudio($FechaInicioBusqueda,$FechaFinBusqueda,$TituloAudioBusqueda,$AutorAudioBusqueda);
            }
?>

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
				<form action="Pagina_Inicio.php" method="get" style="    width: 75%; display: inline-flex;">
					<input type="text" placeholder="Buscar audio..." name="TituloAudioBusqueda">
				</form>
				<button class="Boton" style="margin-left:-9px;" onclick="DesplegarBusquedaAvanzada()">Avanzada</button>
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
				<a href="Subir_Videos_Publicitarios.php"><div class="OpcionMenu">Publicidad</div></a>
			</div>
		</div>
		<div id="BusquedaAvanzada" style="display:none">
			<h2>Busqueda avanzada:
			<form action="Pagina_Inicio.php" method="get">
				<input type="text" placeholder="Titulo audio" name="TituloAudioBusqueda">
				<input type="text" placeholder="Nombre autor" name="AutorAudioBusqueda">
				Fecha inicio: <input type="date" name="FechaInicioBusqueda">
				Fecha fin: <input type="date" name="FechaFinBusqueda">
				<input type="submit" value="Buscar">
			</form>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<!--<h1>Popular</h1>-->
                                <?php
                                    if(count($listaAudios)<=0){
                                        echo "<h1>No se encontro ningun audio</h1>";
                                    } else{
                                        echo "<h1>Resultados</h1>";
                                        for($index =0;$index<count($listaAudios);$index++)
                                        {
                                            echo "<a class=\"AudioVista\" style=\"background-image: url('Imagenes/Fondo_Musica.png');\" href=\"Pagina_Audio.php?IdAudio=";echo $listaAudios[$index]->getIdAudio();echo"\">";
                                            echo "<div class=\"AudioInfo\"><h3>";echo $listaAudios[$index]->getTitulo();echo "</h3><h4>";echo $listaAudios[$index]->getnombreUsuario() ;echo "</h4></div></a>";
                                        }
                                    }
                                ?>
			</div>
			<div id="Publicidad">
				<!--<video autoplay loop muted>
                                    <source src="Videos/City.mp4" type="video/mp4">
					Este browser no acepta videos
				</video>-->
				<img src="Imagenes/Fondo_Portada.jpg">
			</div>
		</div>
	</body>
</html>