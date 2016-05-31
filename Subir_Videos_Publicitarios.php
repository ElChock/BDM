<?PhP
           include_once './Dao/DaoPublicidadPagina.php';
            include_once './Model/Pagina.php';
            include_once './Dao/DaoPagina.php';
            include_once './Model/publicidad.php';
            include_once './Dao/DaoPublicidad.php';
            include_once './Dao/DaoUsuario.php';
            include_once './Model/Usuario.php';
           session_start();
            $DaoPagina = new DaoPagina();
            $DaoPublicidad=new DaoPublicidad();
            $listaPaginas=$DaoPagina->BuscarPagina();
            $listaPublicidad=$DaoPublicidad->buscarVideo();
            
            if(!empty($_SESSION["idUsuario"]))
{
 $idUsuario =$_SESSION["idUsuario"] ;
 
$daoUsuario=new DaoUsuario();
$usuario= $daoUsuario->ObtenerUsuarioId($idUsuario);
}

$daoPublicidadPagina= new DaoPublicidadPagina();
$publicidad=$daoPublicidadPagina->BuscarPublicidadParaMostrar(1);
$pathPublicidad=$publicidad->getPath();

if(empty($pathPublicidad))
{
    $pathPublicidad="City.mp4";
}
            
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
					 <form action="controller/ControllerGestionPublicidad.php" method="post" enctype="multipart/form-data">
                                                <?php
                                                $DaoPublicidadPagina= new DaoPublicidadPagina();
                                                
                                                
                                                    for($index =0;$index<count($listaPublicidad);$index++)
                                                    {
                                                        
                                                        echo "<td><button name=eliminar value="; echo $listaPublicidad[$index]->getIdPublicidad(); echo ">Eliminar</button></td>";
                                                        echo "<td>"; echo $listaPublicidad[$index]->getNombre() ;   echo "<video controls> <source src=Videos/"; echo $listaPublicidad[$index]->getPath(); echo " type=video/mp4> </video></td>";
                                                        $listaPublicidadPagina=$DaoPublicidadPagina->BuscarPublicidadPagina($listaPublicidad[$index]->getIdPublicidad());
                                                       echo"<td>";
                                                        
                                                        for ($index2=0;$index2<count($listaPublicidadPagina);$index2++)
                                                        {
                                                            
                                                            $dia=$listaPublicidadPagina[$index2]->getDia();
                                                            $horaFin=$listaPublicidadPagina[$index2]->getHoraFin();
                                                            $horaInicio=$listaPublicidadPagina[$index2]->getHoraInicio();
                                                            $idPagina=$listaPublicidadPagina[$index2]->getIdPagina();

                                                ?>             
                                            
                                                               Dia <select class="Selecciona" name="dia">
                                                               <option <?php if($dia=="L") {echo "selected";} ?> value="L">lunes</option>
                                                               <option <?php if($dia=="M") {echo "selected";} ?> value="M">Martes</option>
                                                               <option <?php if($dia=="X") {echo "selected";} ?> value="X">Miercoles</option>
                                                               <option <?php if($dia=="J") {echo "selected";} ?> value="J">Jueves</option>
                                                               <option <?php if($dia=="V") {echo "selected";} ?> value="V">Viernes</option>
                                                               <option <?php if($dia=="S") {echo "selected";} ?> value="S">Sabado</option>
                                                               <option <?php if($dia=="D") {echo "selected";} ?> value="D">Domingo</option>
                                                                   </select> 
                                                               Hora de inicio <select class="Selecciona" name="horaInicio">

                                                                <?php
                                                                for ($index3 = 0; $index3 < 25; $index3++) 
                                                                {
                                                                   echo "<option "; if($horaInicio==$index3){echo "selected";}  echo" value=$index3";  echo "0000>$index3</option>";
                                                                }
                                                               ?>

                                                               </select> 
                                                               Hora de fin <select class="Selecciona" name="horaFin">
                                                               <?php
                                                                for ($index4 = 0; $index4 < 25; $index4++) 
                                                                {
                                                                   echo "<option "; if($horaFin==$index4){echo "selected";}echo" value=$index4";  echo "0000>$index4</option>";
                                                                }
                                                               ?>
                                                               </select>

                                                               Pagina<select class="Selecciona" name="Pagina">
                                                                   <?php

                                                                       for ($index5 =0; $index5<count($listaPaginas);$index5++)
                                                                       {
                                                                            echo "<option "; if($idPagina==$listaPaginas[$index5]->getIdPagina()){echo "selected";} echo " value="; echo $listaPaginas[$index5]->getIdPagina(); echo ">"; echo $listaPaginas[$index5]->getNombre(); echo"</option>";
                                                                       }

                                                           ?>
                                                            </select>
                                                <?php               
                                                   echo "<button class=EliminarArticulo name=guardar value="; echo $listaPublicidad[$index]->getIdPublicidad();echo" >Guardar</button>";
                                       echo" </tr>";
                                                
                                                                                                                   
                                                        }
                                                    }
                                                ?>   
                                </form>
                                        </tr>

			<form action="controller/ControllerGestionPublicidad.php" method="post" enctype="multipart/form-data">
                                        <tr>
						<td></td>
                                                <td><input type="text" placeholder="Nombre" value="" name="name">
                                                    <input type="file" name="video"></td>
						<td>>Default <br>
						<img src="Imagenes/Boton_Articulo.png" class="BotonArticulo" title="Agregar"> Agregar horario <br>
                                                Dia <select class="Selecciona" name="dia">
                                                    <option value="L">lunes</option>
                                                    <option value="M">Martes</option>
                                                    <option value="X">Miercoles</option>
                                                    <option value="J">Jueves</option>
                                                    <option value="V">Viernes</option>
                                                    <option value="S">Sabado</option>
                                                    <option value="D">Domingo</option>
                                                </select> 
                                                Hora de inicio <select class="Selecciona" name="horaInicio">

                                                 <?php
                                                 
                                                 for ($index = 0; $index < 25; $index++) 
                                                 {
                                                    echo "<option value=$index";  echo "0000>$index</option>";
                                                 }
                                                ?>
                                                   
                                                </select> 
                                                Hora de fin <select class="Selecciona" name="horaFin">
                                                <?php
                                                 for ($index = 0; $index < 25; $index++) 
                                                 {
                                                    echo "<option value=$index";  echo "0000>$index</option>";
                                                 }
                                                ?>
                                                </select>
                                                
                                                Pagina<select class="Selecciona" name="Pagina">
                                                    <?php
                                                                               
                                                        for ($index =0; $index<count($listaPaginas);$index++)
                                                        {
                                                             echo "<option value="; echo $listaPaginas[$index]->getIdPagina(); echo ">"; echo $listaPaginas[$index]->getNombre(); echo"</option>";
                                                        }
                                                    
                                                    ?>
                                                </select>
                                                
						</td>
					</tr>
					<tr>
						<td colspan="3"><button>Agregar un video</button></td>
					</tr>
                                        </form>
				</table>
                                
			</div>
			</div>
	</body>
</html>