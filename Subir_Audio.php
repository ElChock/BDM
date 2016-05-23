<?PhP
    include_once './Model/Audio.php';
    include_once './Dao/DaoAudio.php';
    include_once './Model/Categoria.php';
    include_once './Dao/DaoCategoria.php';
    include_once './Model/Genero.php';
    include_once './Dao/DaoGenero.php';
   session_start();
    $DaoAudio = new DaoAudio();
    $DaoCategorias=new DaoCategoria();
    $DaoGeneros=new DaoGenero();
    $listaCategorias=$DaoCategorias->BuscarCategoria();
    $listaGeneros=$DaoGeneros->BuscarGenero();
    /*$mensaje=get["Mensaje"];*/
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
				<div class="AudioContenido">
					<div class="SubirImagenAudio" onclick="SubirImagen()"></div>
					<div class="AudioInfoCompleta">
						<form action="controller/ControllerGestionAudio.php" method="post" enctype="multipart/form-data">
                                                        <input type="number" style="display: none;" value="4" name="IdAutor">
							<h4>Artista: Kaoli</h4>
							<h4>Titulo: </h4><input type="text" name="AudioTitulo">
							<h4>Precio (en pesos): </h4><input type="number" name="AudioPrecio" title="Precio (en pesos)" value="0">
							<h4>Genero: 
                                                            <?php
                                                                echo "<select name=\"AudioGenero\">";
                                                                for($index =0;$index<count($listaGeneros);$index++)
                                                                {
                                                                    echo "<option value="; echo $listaGeneros[$index]->getIdGenero(); echo ">"; echo $listaGeneros[$index]->getNombreGenero(); echo "</option>";
                                                                }
                                                                echo "</select>";
                                                            ?>
                                                        </h4>
							<h4>Categoria: 
                                                            <?php
                                                            echo "<select name=\"AudioCategoria\">";
                                                                for($index =0;$index<count($listaCategorias);$index++)
                                                                {
                                                                    echo "<option value="; echo $listaCategorias[$index]->getIdCategoria(); echo ">"; echo $listaCategorias[$index]->getNombreCategoria(); echo "</option>";
                                                                }
                                                            ?>
                                                        </h4>
							<input type="file" name="Audio" accept=".mp3">
							<br><input type="submit" value="Subir cancion" class="Boton">
						</form>
					</div>
				</div>
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