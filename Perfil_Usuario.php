<?php
error_reporting(0);
include_once './Dao/DaoPublicidad.php';
include_once './Model/Publicidad.php';
include_once './Dao/DaoPublicidadPagina.php';
include_once './Dao/DaoUsuario.php';
include_once './Model/Usuario.php';
include_once './Dao/DaoPais.php';
include_once './Model/pais.php';
    include_once './Dao/DaoAudio.php';
    include_once './Model/Audio.php';
session_start();

$usuario=new Usuario(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
if(!empty($_GET["idUsuario"]))
{
    $daoUsuario=new DaoUsuario();
    $usuario= $daoUsuario->ObtenerUsuarioId($_GET["idUsuario"]);
}
else
{
    if(!empty($_SESSION["idUsuario"]))
    {
     $idUsuario =$_SESSION["idUsuario"] ;

    $daoUsuario=new DaoUsuario();
    $usuario= $daoUsuario->ObtenerUsuarioId($idUsuario);
    }
}
$daoPais = new DaoPais();
$listPais = $daoPais->obtenerPais();

$daoPublicidadPagina= new DaoPublicidadPagina();
$publicidad=$daoPublicidadPagina->BuscarPublicidadParaMostrar(5);
$pathPublicidad=$publicidad->getPath();

if(empty($pathPublicidad))
{
    $pathPublicidad="City.mp4";
}
$DaoAudio = new DaoAudio();
$listaAudios=$DaoAudio->BuscarAudio(NULL,NULL,NULL,$usuario->getAlias());

?>

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
            <?php   if(is_null($usuario->getIdUsuario()))   {?>
            <form action="controller/ControllerPerfilUsuario.php" method="post">
		<div id="InicioSesionUsuario" style="z-index: -1001; visibility: hidden;">
                    <img src="Imagenes/Tacha.png" onclick="CerrarInicioSesionUsuario()">
                    <h1>Unete a la comunidad de Cafe Vinyl</h1>
                    <input type="text" name="CorreoInicioSesion" placeholder="*Correo" title="*Correo" class="InputCorto" id="CorreoInicioSesion" oninput="FBotonInicioSesion()">
                    <input type="password" name="ContrasenaInicioSesion" placeholder="*Contrasena" title="*Contrasena" class="InputCorto" style="margin-right: 0%;" id="ContrasenaInicioSesion" oninput="FBotonInicioSesion()">

                    <br><div style="display: inline;"><input class="Boton" style="float: right;" type="submit" name="IniciarSesion" value="Inicia Sesion" id="BotonInicioSesion"></button></div>
		</div>
            </form>
            <form action="controller/ControllerPerfilUsuario.php" method="post">
		<div id="RegistroUsuario">
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
                                <?php if($usuario->getTipoUsuario()=="A"){?>
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
				<div id="EspacioPerfil">
                                    <form  action="controller/ControllerPerfilUsuario.php" method="post" enctype="multipart/form-data">
                                        <div style="background-image: url(  <?php echo 'data:image/jpeg;base64,'.base64_encode($usuario->getFotoPortada()).''; ?>); background-color: #dfe1be;" id="PerfilPortada" onmouseover="MostrarCargarImagen(0)" onmouseout="OcultarCargarImagen(0)">
                                            <label for="FotoPortada" class="Cargar"></label>
                                            <input id="FotoPortada" type="file" name="Portada"  style="display:none;" accept="image/*">
                                            <input  type="submit" name="fotoPortada" value="Subir">
                                        </div>
                                    
                                        <div style="background-image: url(<?php
                                        if(empty($usuario->getFotoPerfil())){
                                            echo 'Imagenes/unknown.jpg';
                                        } else{
                                            echo 'data:image/jpeg;base64,'.base64_encode($usuario->getFotoPerfil()).''; }?>);"    id="PerfilAvatar"  onmouseover="MostrarCargarImagen(1)" onmouseout="OcultarCargarImagen(1)">
                                            <label for="FotoAvatar" class="Cargar"></label>
                                            <input id="FotoAvatar" type="file" name="Perfil" style="display:none;" accept="image/*">
                                            <input type="submit" name="fotoPerfil" value="Subir">
                                        </div>
                                    </form>
                                        <h2 id="NombrePerfil"><?php  if(!empty($usuario->getAlias())){echo $usuario->getAlias();}?> </h2>
				</div>
				<h2>Informacion personal <button class="Boton" style="margin-bottom: 10px; font-size: 17px;" onclick="MostrarEditorInformacionPersonal()">Editar datos personales</button></h2>
				<!--Editar informacion personal-->
                                 <form action="controller/ControllerPerfilUsuario.php" method="post">
				<div id="EdicionInformacionPersonal">
                                    <input type="text" name="AliasEditar" placeholder="*Alias" title="*Alias" class="InputLargo" value="<?php if(!empty($usuario->getAlias()))echo $usuario->getAlias(); ?>" style="width: 93%;">
                                    <input type="text" name="NombreEditar" placeholder="*Nombre" title="*Nombre(s)" class="InputCorto" value="<?php if(!empty($usuario->getNombre())) echo $usuario->getNombre(); ?>">
                                    <input type="text" name="ApellidosEditar" placeholder="*Apellidos" title="*Apellidos" class="InputCorto" style="margin-right: 0%;" value="<?php if(!empty($usuario->getApellidoPaterno())) echo $usuario->getApellidoPaterno()." ".$usuario->getApellidoMaterno(); ?>">
                                    <input type="text" name="CorreoEditar" placeholder="*Correo" title="*Correo" class="InputCorto" value="<?php if(!empty($usuario->getCorreo())) echo $usuario->getCorreo(); ?>">
					<input type="password" name="*ContrasenaAnterior" placeholder="*Contrasena anterior" title="Contrasena anterior" class="InputCorto" style="margin-right: 0%;" value="secreto">
					<input type="password" name="ContrasenaNuevaEditar" placeholder="Contrasena nueva" title="Contrasena nueva" class="InputCorto">
					<input type="password" name="ConfirmaContrasenaEditar" placeholder="Confirma contrasena" title="Confirma contrasena" class="InputCorto" style="margin-right: 0%;">
					<br><h4 style="color: black;">*Fecha de nacimiento</h4><br>
					<h4>Dia</h4>
					<select style="margin-right: 20px;" title="Dia" name="DiaEditar">
					 <?php
                                         $dia= substr($usuario->getFechaNacimiento(),8,2);
                                         $mes= substr($usuario->getFechaNacimiento(),5,2);
                                         $año=substr($usuario->getFechaNacimiento(),0,4);
                                            for ($index = 1; $index < 32; $index++) {
                                                echo "<option "; if($dia==$index) echo "selected"; echo " value=$index>$index</option>";
                                            }
                                     ?>
					</select>
					<h4>Mes</h4>
					<select style="margin-right: 20px; width:160px;" title="Mes" name="MesEditar" >
                                            <option <?php if($mes ==1) echo " selected "; ?> value="01">Enero</option>
                                            <option <?php if($mes ==2) echo " selected "; ?> value="02">Febrero</option>
                                            <option <?php if($mes ==3) echo " selected "; ?> value="03">Marzo</option>
                                            <option <?php if($mes ==4) echo " selected "; ?> value="04">Abril</option>
                                            <option <?php if($mes ==5) echo " selected "; ?> value="05">Mayo</option>
                                            <option <?php if($mes ==6) echo " selected "; ?> value="06">Junio</option>
                                            <option <?php if($mes ==7) echo " selected "; ?> value="07">Julio</option>
                                            <option <?php if($mes ==8) echo " selected "; ?> value="08">Agosto</option>
                                            <option <?php if($mes ==9) echo " selected "; ?> value="09">Septiembre</option>
                                            <option <?php if($mes ==10) echo " selected "; ?> value="10">Octubre</option>
                                            <option <?php if($mes ==11) echo " selected "; ?> value="11">Noviembre</option>
                                            <option <?php if($mes ==12) echo " selected "; ?> value="12">Diciembre</option>
					</select>
					<h4>Año</h4>
					<select title="AñoEditar" name="AñoEditar">
                                            <?php
                                                for ($index = 1920; $index < 2017; $index++) {
                                                    echo "<option "; if($año==$index) echo "selected" ;echo" value=$index>$index</option>";
                                                }
                                            ?>
					</select>
					<br>
					<h4 style="color: black;">*Sexo</h4>
					<div style="font-size: 22px;display: inline;" title="*Sexo" name="SexoEditar">
                                            <input <?php if($usuario->getGenero()=="H")echo "checked"; ?> type="radio" name="SexoEditar" value="H" class="Radio" style="margin-right: 15px;">Hombre
						<input <?php if($usuario->getGenero()=="M")echo "checked"; ?> type="radio" name="SexoEditar" value="M" class="Radio" style="margin-right: 15px; margin-left: 15px;">Mujer
					</div>
					<br>
					<h4 style="color: black;">*Domicilio</h4><br>
                                        <h4 style="margin-right: 92px;">Calle</h4><input type="text" name="CalleEditar" placeholder="*Calle" title="*Calle" value="<?php echo $usuario->getCalle() ?>" style="margin-right: 20px;">
                                        <h4>Numero de casa</h4><input type="number" name="NumeroCasaEditar" placeholder="*Numero" title="*Numero" value="<?php echo $usuario->getNumero() ?>" style="width: 206px;">
					<br>
                                        <h4 style="margin-right: 69px;">Colonia</h4><input type="text" name="ColoniaEditar" placeholder="*Colonia" title="*Colonia" value="<?php echo $usuario->getColonia() ?>" style="margin-right: 23px;">
					<h4 style="margin-right: 67px;">Municipio</h4>
                                        <input type="text" name="municipioEditar" value="" title="Municipio" style="width: 237px;">
					<br>
					<h4 style="margin-right: 72px;">Estado</h4>
                                        <input type="text" name="coloniaEditar" title="Estado" value="" style="margin-right: 20px; width: 280px;">
						
					
					<h4 style="margin-right: 115px;">Pais</h4>
					<select title="Pais" name="paisEditar">
                                            <?php 
                                            for($index=0;$index<count($listPais);$index ++)
                                            {
                                             echo "<option ";  if($usuario->getIdPais()==$listPais[$index]->getIdPais()) echo "selected" ; echo " value=";echo $listPais[$index]->getIdPais();  echo" >"; echo $listPais[$index]->getPais(); echo" </option> ";
                                            }
                                            
                                            ?>
					
					</select>
					<br>
                                        <h4>Codigo postal</h4><input type="number" name="CodigoPostalEditar" placeholder="*Codigo Postal" title="*Codigo Postal" value="<?php echo $usuario->getCodigoPostal() ?>" style="margin-right: 20px;">

					<div style="display:inline;">
						<button class="Boton"  style="margin-right: 140px; margin-left: 19px;" onclick="OcultarEditorInformacionPersonal()">Cancelar</button>
						<button class="Boton" name="UsuarioCambio" value="UsuarioCambio" type="submit" >Guardar cambios</button>
					</div>
				</div>
                                
                                 </form>
					<!--Información personal-->
				<div id="InformacionPersonal">
					<table>
						<tr>
							<td>Alias: </td>
                                                        <td><?php echo $usuario->getAlias() ?></td>
						</tr>
						<tr>
							<td style="width: 160px;">Nombre completo:</td>
                                                        <td><?php echo $usuario->getNombre()." ".$usuario->getApellidoPaterno() ?></td>
						</tr>
						<tr>
							<td>Correo: </td>
                                                        <td><?php echo $usuario->getCorreo() ?></td>
						</tr>
						<tr>
							<td title="Solo tu puedes ver esto">Domicilio: </td>
                                                        <td title="Solo tu puedes ver esto"> <?php echo $usuario->getCalle()." ".$usuario->getNumero().", ".$usuario->getColonia().". ".$usuario->getIdPais() ?> </td>
						</tr>
						<tr>
							<td title="Solo tu puedes ver esto">Codigo postal: </td>
                                                        <td title="Solo tu puedes ver esto"><?php echo $usuario->getCodigoPostal() ?></td>
						</tr>
					</table>
					</div>
				<h1>Audios de este artista</h1>
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
                            <video autoplay muted>
                                <?php   echo "<source src=Videos/"; echo $pathPublicidad;echo " type=video/mp4> ";  ?>
                                Este browser no acepta videos
                            </video>
				<img src="Imagenes/CafeVinyl1.jpg" style="width: 70%; height: 70%">
			</div>
		</div>
	</body>
</html>