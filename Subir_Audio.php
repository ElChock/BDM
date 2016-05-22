<?PhP
/*
            include_once './Dao/AudioCategoria.php';
            include_once './Dao/AudioGenero.php';
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
            $listaGeneros=$DaoGeneros->BuscarGenero();*/            
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cafe Vinyl</title>
		<link rel="stylesheet" type="text/css" href="CSS/Hoja_Estilo_BDM.css">
		<meta charset="UTF-8">

		<script src="Codigo_Javascript_BDM.js"></script>
	</head>

	<body>
		<div id="Encabezado">
			<div id="Logotipo">
				<a href="Pagina_Inicio.php">
					<img src="CafeVinyl.png">
				</a>
			</div>
			<div id="BusquedaAudio">
                            <form action="Pagina_Inicio.html" method="get" style="    width: 75%; display: inline-flex;">
				<input type="text" placeholder="Buscar audio..." name="TituloAudioBusqueda">
                            </form>
                            <button class="Boton" style="margin-left:-9px;" onclick="DesplegarBusquedaAvanzada()">Avanzada</button>
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
				<a href="Carrito_Compras.php"><div class="OpcionMenu">Carrito de compras</div></a>
				<a href="Perfil_Usuario.php"><div class="OpcionMenu">Mi perfil</div></a>
				<a href="Usuario_Listas.php"><div class="OpcionMenu">Mis listas</div></a>
				<a href="Subir_Audio.php"><div class="OpcionMenu">Subir audio</div></a>
				<a href="Reporte_Ventas.php"><div class="OpcionMenu">Reporte de ventas</div></a>
                                <a href="Subir_Videos_Publicitarios.php"><div class="OpcionMenu">Publicidad</div></a>
                        </div>
                    	<div id="BusquedaAvanzada" style="display:none">
                            <h2>Busqueda avanzada:
                            <form action="Pagina_Inicio.php" method="get">
                                    <input type="text" placeholder="Titulo audio" name="TituloAudioBusqueda">
                                    <input type="text" placeholder="Nombre autor" name="AutorAudioBusqueda">
                                    Fecha inicio: <input type="date">
                                    Fecha fin: <input type="date">
                                    <input type="submit" value="Buscar">
                            </form>
                        </div>

		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<div class="AudioContenido">
					<div class="SubirImagenAudio" onclick="SubirImagen()"></div>
					<div class="AudioInfoCompleta">
						<form action="controller/ControllerGestionAudio.php" method="post" enctype="multipart/form-data">
							<h4>Artista: Benjamin Navarro Salinas</h4>
							<h4>Titulo: </h4><input type="text" name="AudioTitulo">
							<h4>Precio (en pesos): </h4><input type="number" name="AudioPrecio" title="Precio (en pesos)" value="0">
							<h4>Genero(s): 
                                                            <?php
                                                                /*for($index =0;$index<count($listaGeneros);$index++)
                                                                {
                                                                    echo "<p><input type=\"checkbox\" value="; echo $listaGeneros[$index]->getIdGenero(); echo "name=\"Genero\">"; echo $listaGeneros->getNombreGenero(); echo "</p>";
                                                                }*/
                                                            ?>
							</h4>
							<h4>Categoria(s):
                                                            <?php
                                                                /*for($index =0;$index<count($listaCategorias);$index++)
                                                                {
                                                                    echo "<p><input type=\"checkbox\" value="; echo $listaCategorias[$index]->getIdCategoria(); echo "name=\"Categoria\">"; echo $listaCategorias->getNombreCategoria(); echo "</p>";
                                                                }*/
                                                            ?>
							</h4>
							<input type="file" name="audio" accept="audio/*">
							<input type="submit" value="Subir cancion">
						</form>
					</div>
				</div>
			</div>
			<div id="Publicidad">
                            <video autoplay loop muted>
                                    <source src="Videos/City.mp4" type="video/mp4">
                                    Este browser no acepta videos
                            </video>
                            <img src="Fondo_Portada.jpg">
			</div>
		</div>
	</body>
</html>