<?PhP
           include_once './Dao/DaoPublicidadPagina.php';
            include_once './Model/Pagina.php';
            include_once './Dao/DaoPagina.php';
            include_once './Model/publicidad.php';
            include_once './Dao/DaoPublicidad.php';
           session_start();
            $DaoPagina = new DaoPagina();
            $DaoPublicidad=new DaoPublicidad();
            $listaPaginas=$DaoPagina->BuscarPagina();
            $listaPublicidad=$DaoPublicidad->buscarVideo();
            
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
            <?php

            ?>
		<div id="Encabezado">
			<div id="Logotipo">
				<a href="Pagina_Inicio.html">
					<img src="Imagenes/CafeVinyl.png">
				</a>
			</div>
			<div id="BusquedaAudio">
				<form>
					<input type="text" placeholder="Buscar audio..." name="BuscarAudio">
				</form>
			</div>

			<div id="NombreUsuario">
                            <h2><!--<?php echo "$usuario->getAlias()" ?>--></h2>
			</div>
			<div id="FotoUsuario" onmouseover="Desplegar()" onmouseout="Minimizar()">
                            <img src="IImagenes/user.png" >
			</div>
			<div id="OpcionesUsuario" onmouseover="Desplegar()" onmouseout="Minimizar()">
				<img src="Imagenes/Pestaña.png">
			</div>

			<div id="MenuOpciones" onmouseover="Desplegar()" onmouseout="Minimizar()">
				<a href=""><div class="OpcionMenu">Administrar audios</div></a>
				<a href=""><div class="OpcionMenu">Carrito de compras</div></a>
				<a href="Imagenes/Perfil_Usuario.html"><div class="OpcionMenu">Mi perfil</div></a>
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