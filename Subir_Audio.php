<?PhP
    error_reporting(0);
    include_once './Dao/DaoAudio.php';
    include_once './Model/Audio.php';
    include_once './Model/Categoria.php';
    include_once './Dao/DaoCategoria.php';
    include_once './Model/Genero.php';
    include_once './Dao/DaoGenero.php';
    include_once './Dao/DaoUsuario.php';
    include_once './Model/Usuario.php';
    include_once './Dao/DaoPublicidad.php';
    include_once './Model/Publicidad.php';
    include_once './Dao/DaoPublicidadPagina.php';

   session_start();
   
    //Sesión usuario
    $usuario=new Usuario(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
    if(!empty($_SESSION["idUsuario"]))
    {
        if($_SESSION["idUsuario"]!=="0"){
            $idUsuario =$_SESSION["idUsuario"];
            $daoUsuario=new DaoUsuario();
            $usuario= $daoUsuario->ObtenerUsuarioId($idUsuario);
            $usuario->setIdUsuario($idUsuario);
        }
    }
    
    //Audio
    $DaoAudio = new DaoAudio();
    $Audio=new Audio(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
    $idaudio=htmlspecialchars($_GET["IdAudio"]);
    if(!empty($idaudio)){
        $Audio=$DaoAudio->ExtraerAudio($idaudio);
    }   else {
        $Audio->setIdUsuario($usuario->getIdUsuario());
    }
    
    //Categorias y generos
    $DaoCategorias=new DaoCategoria();
    $DaoGeneros=new DaoGenero();
    $listaCategorias=$DaoCategorias->BuscarCategoria();
    $listaGeneros=$DaoGeneros->BuscarGenero();
    
    //Publicidad
    $daoPublicidadPagina= new DaoPublicidadPagina();
    $publicidad=$daoPublicidadPagina->BuscarPublicidadParaMostrar(4);
    $pathPublicidad=$publicidad->getPath();
    if(empty($pathPublicidad))
    {
        $pathPublicidad="City.mp4";
    }
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
            <?php   if(is_null($usuario->getIdUsuario()))   {?>
            <form action="controller/ControllerPerfilUsuario.php" method="post">
		<div id="InicioSesionUsuario" style="z-index: -1001;display: block;">
                    <img src="Imagenes/Tacha.png" onclick="CerrarInicioSesionUsuario()">
                    <h1>Unete a la comunidad de Cafe Vinyl</h1>
                    <input type="text" name="CorreoInicioSesion" placeholder="*Correo" title="*Correo" class="InputCorto" id="CorreoInicioSesion" oninput="FBotonInicioSesion()">
                    <input type="password" name="ContrasenaInicioSesion" placeholder="*Contrasena" title="*Contrasena" class="InputCorto" style="margin-right: 0%;" id="ContrasenaInicioSesion" oninput="FBotonInicioSesion()">
                    <br>
                    <div style="display: inline;">
                            <input class="Boton" style="float: right; " type="submit" name="IniciarSesion" value="Inicia Sesion" id="BotonInicioSesion">
                    </div>
		</div>
            </form>
            <form action="controller/ControllerPerfilUsuario.php" method="post">
		<div id="RegistroUsuario" style="z-index: -1001;display: block;">
                    <img src="Imagenes/Tacha.png" onclick="CerrarRegistroUsuario()">
                    <h1>Unete a la comunidad de Cafe Vinyl</h1>
                    <input type="text" name="Alias" placeholder="*Alias" title="*Alias" class="InputLargo" id="RegistroAlias" oninput="FBotonRegistroUsuario()">
                    <input type="text" name="Nombre(s)" placeholder="*Nombre" title="*Nombre(s)" class="InputCorto" id="RegistroNombre" oninput="FBotonRegistroUsuario()">
                    <input type="text" name="Apellidos" placeholder="*Apellido paterno" title="*Apellido paterno" class="InputCorto" style="margin-right: 0%;"  id="RegistroApellidos" oninput="FBotonRegistroUsuario()">
                    <input type="text" name="Correo" placeholder="*Correo" title="*Correo" class="InputCorto" id="RegistroCorreo" oninput="FBotonRegistroUsuario()">
                    <input type="password" name="Contrasena" placeholder="*Contrasena" title="*Contrasena" class="InputCorto" style="margin-right: 0%;" id="RegistroContrasena" oninput="FBotonRegistroUsuario()">
                    <h4>*Fecha de nacimiento</h4>

                    <select style="margin-right: 20px;" title="Dia" name="dia"> <!--id="RegistroDia" oninput="BotonRegistroUsuario()">-->
                        <?php
                            for ($index = 1; $index < 32; $index++) {                                    
                                echo "<option value=$index>$index</option>";                                 
                            }   ?>                           
                    </select>

                    <select style="margin-right: 20px; width:160px;" title="Mes" name="mes"> <!--id="RegistroAlias" oninput="BotonRegistroUsuario()">-->
                            <option value="01">Enero</option>
                            <option value="02">Febrero</option>
                            <option value="03">Marzo</option>
                            <option value="04">Abril</option>
                            <option value="05">Mayo</option>
                            <option value="06">Junio</option>
                            <option value="07">Julio</option>
                            <option value="08">Agosto</option>
                            <option value="09">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                    </select>
                    <select title="Año" name="año"> <!--id="RegistroAlias" oninput="BotonRegistroUsuario()">-->
                        <?php
                            for ($index = 1920; $index < 2017; $index++) {
                                echo "<option value=$index>$index</option>";                                   
                            }   ?>

                    </select>
                    <br>
                    <div style="font-size: 22px;display: inline;" title="*Sexo">
                            <input type="radio" name="Sexo" value="H" class="Radio" style="margin-right: 15px;" id="RegistroAlias" onclick="FBotonRegistroUsuario()" checked>Hombre
                            <input type="radio" name="Sexo" value="M" class="Radio" style="margin-right: 15px; margin-left: 15px;" id="RegistroAlias" onclick="FBotonRegistroUsuario()">Mujer
                    </div>
                    <div style="display: inline;"><input class="Boton" style="float: right;" name="Registro" value="Registrate" type="submit" id="BotonRegistroSesion"></button></div>
		</div>
            </form>
            <div id="EspacioGris" onclick="CerrarRegistroUsuario() ;CerrarInicioSesionUsuario()"></div>
            <?php }?>
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
                    
                        <?php   if(!is_null($usuario->getIdUsuario()))   {?>
                        <div id="NombreUsuario">
                            <h2><?php echo $usuario->getAlias();?></h2>
			</div>
                    
			<div id="FotoUsuario" onmouseover="Desplegar()" onmouseout="Minimizar()">
                                <img src="<?php if(empty($usuario->getFotoPerfil())){
                                    echo 'Imagenes/unknown.jpg';
                                } else{
                                    echo 'data:image/jpeg;base64,'.base64_encode($usuario->getFotoPerfil()).'';
                                }   ?>">
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
                                <?php if($usuario->getTipoUsuario()==="A"){?>
                                    <a href="Subir_Videos_Publicitarios.php"><div class="OpcionMenu">Publicidad</div></a>
                                <?php } ?>
                                <a href="controller/ControllerPerfilUsuario.php?CerrarSesion=1&Pagina=6"><div class="OpcionMenu">Cerrar sesion</div></a>
			</div>
                        <?php   }   else    {?>
                            <div id="BotonesRegistro">
                            <button class="Boton" onclick="AbrirRegistroUsuario()">Registrate</button>
                            <button class="Boton" onclick="AbrirInicioSesionUsuario()">Iniciar sesion</button>
			</div>
                        <?php }?>
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
                            <div class="AudioContenido"><?php
                            if(!empty($usuario->getIdUsuario())){
                                if((int)$idUsuario===$Audio->getIdUsuario())   {
                                    //echo "Este usuario es dueño de este audio"; ?>
                                <div class="SubirImagenAudio" onclick="SubirImagen()"></div>
                                <div class="AudioInfoCompleta">
                                    <form action="controller/ControllerGestionAudio.php" method="post" enctype="multipart/form-data">
                                        <input type="number" style="display: none;" value="<?php echo $usuario->getIdUsuario();?>" name="IdAutor">
                                        <input type="number" style="display: none;" value="<?php if(!empty($Audio->getIdAudio())){
                                            echo $Audio->getIdAudio();
                                        } else{ echo '0';} ?>" name="IdAudio">
                                        <h4>Artista: <?php echo $usuario->getAlias();?></h4>
                                        <h4>Titulo: </h4><input type="text" name="AudioTitulo" value="<?php echo $Audio->getTitulo(); ?>">
                                        <h4>Precio (en pesos): </h4><input type="number" name="AudioPrecio" title="Precio (en pesos)" value="<?php echo $Audio->getPrecio(); ?>">
                                        <h4>Genero: 
                                            <?php
                                                echo "<select name=\"AudioGenero\">";
                                                for($index =0;$index<count($listaGeneros);$index++)
                                                {
                                                    echo "<option value="; echo $listaGeneros[$index]->getIdGenero();
                                                    if($index===(int)$Audio->getGenero()){
                                                        echo ' selected="selected "';
                                                    }
                                                    echo ">";   echo $listaGeneros[$index]->getNombreGenero(); echo "</option>";
                                                }
                                                echo "</select>";
                                            ?>
                                            </h4>
                                            <h4>Categoria: 
                                                <?php
                                                echo "<select name=\"AudioCategoria\">";
                                                    for($index =0;$index<count($listaCategorias);$index++)
                                                    {
                                                        echo "<option value="; echo $listaCategorias[$index]->getIdCategoria();
                                                        if($index===(int)$Audio->getCategoria()){
                                                            echo ' selected="selected "';
                                                        }
                                                        echo ">"; echo $listaCategorias[$index]->getNombreCategoria(); echo "</option>";
                                                    }
                                                ?>
                                            </h4>
                                            <?php   if(empty($Audio->getIdAudio())){?>
                                                <input type="file" name="Audio" accept=".mp3">
                                            <?php   }   ?>
                                            <br><input type="submit" value="Subir cancion" class="Boton">
                                        </form>                                                         <!-- if((int)$usuario->getIdUsuario===(int)$Audio->getIdUsuario())-->
                            </div><?php }   else{ echo "<h2>Pagina no encontrada</h2>"; }
                            }   else{    echo "<h2>Necesitas tener sesión para poder agregar o editar tu audio</h2>";    }    ?>
                            </div>
			</div>
			<div id="Publicidad">
                            <video autoplay muted>
                                <?php   echo "<source src=Videos/"; echo $pathPublicidad;echo " type=video/mp4> ";  ?>
                                Este browser no acepta videos
                            </video>
                            <?php   if(!empty($usuario->getFotoPortada())){
                                echo '<img src="'.'data:image/jpeg;base64,'.base64_encode($usuario->getFotoPortada()).''.'">';
                            }?>
			</div>
		</div>
	</body>
</html>