<!DOCTYPE html>
<?php
    include_once './Model/Reporte.php';
    include_once './Dao/DaoReporte.php';
    $daoReporte = new DaoReporte();
    session_start();
    $listaReporte;
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $idUsuario = $_SESSION["idUsuario"];
        $dia=$_POST["dia"];
        $mes=$_POST["mes"];
        $año=$_POST["año"];
        $fechaInicio=substr($año, 2,2)."-".$mes."-".$dia;
        $diaFin=$_POST["diaFin"];
        $mesFin=$_POST["mesFin"];
        $añoFin=$_POST["añoFin"];
        $fechaFin=substr($añoFin, 2,2)."-".$mesFin."-".$diaFin;
        $listaReporte = $daoReporte->reporteFecha($fechaInicio, $fechaFin, $idUsuario);
    } 
    
?>
<html>
	<head>
		<title>Cafe Vinyl</title>
                <link rel="stylesheet" type="text/css" href="CSS/Hoja_Estilo_BDM.css">
		<meta charset="UTF-8">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                <script src="Paginas Proyecto BDM/Table_Plugin/stupidtable.js?dev"></script>
                <script src="JS/Codigo_Javascript_BDM.js"></script>
		<script>
		    $(function(){
		        $("table").stupidtable();
		    });
	  </script>
	</head>

	<body>
		<div id="Encabezado">
			<div id="Logotipo">
				<a href="Pagina_Inicio.php">
                                    <img src="Imagenes/CafeVinyl.png">
				</a>
			</div>
			<div id="BusquedaAudio">
				<form action="Pagina_Inicio.php" method="get">
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
				<a href="Carrito_Compras.php"><div class="OpcionMenu">Carrito de compras</div></a>
				<a href="Perfil_Usuario.php"><div class="OpcionMenu">Mi perfil</div></a>
				<a href="Usuario_Listas.php"><div class="OpcionMenu">Mis listas</div></a>
				<a href="Subir_Audio.php"><div class="OpcionMenu">Subir audio</div></a>
				<a href="Reporte_Ventas.php"><div class="OpcionMenu">Reporte de ventas</div></a>
				<a href="Subir_Videos_Publicitarios.php"><div class="OpcionMenu">Publicidad</div></a>			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido" style="width: 100%">
				<h3 style="font-size:50px; margin-top:20px;">Reporte de ventas</h3>
			
                                <form actio="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                      
                                      <!-- fecha Inicio -->
                                    <select style="margin-right: 20px;" title="Dia" name="dia">
                                        <?php
                                            for ($index = 1; $index < 32; $index++) {

                                                echo "<option value=$index>$index</option>";

                                            }

                                         ?>                           
                                    </select>

                                    <select style="margin-right: 20px; width:160px;" title="Mes" name="mes">
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
                                    <select title="Año" name="año">
                                        <?php
                                            for ($index = 1920; $index < 2017; $index++) {

                                                echo "<option value=$index>$index</option>";

                                            }
                                        ?>
                                    </select>
                                      
                                      
                                      <!-- fecha fin -->
                                      
                                    <select style="margin-right: 20px;" title="Dia" name="diaFin">
                                        <?php
                                            for ($index = 1; $index < 32; $index++) {

                                                echo "<option value=$index>$index</option>";

                                            }

                                         ?>                           
                                    </select>

                                    <select style="margin-right: 20px; width:160px;" title="Mes" name="mesFin">
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
                                    <select title="Año" name="añoFin">
                                        <?php
                                            for ($index = 1920; $index < 2017; $index++) {

                                                echo "<option value=$index>$index</option>";

                                            }
                                        ?>
                                    </select>
                                      
                                      
                                      <button  > buscar</button>
                                    
                                </form>
                                
				<table class="TablaEspecial">
				    <thead>
				      <tr>
                                        <th data-sort="int">Fecha de compra</th>
				        <th data-sort="string">Audio</th>
                                        <th data-sort="int">categoria</th>
				        <th data-sort="string">Correo</th>
				        <th data-sort="string">Domicilio</th>				        
				        <th data-sort="string">Tarjeta</th>
				        <th data-sort="string">Digitos de la tarjeta</th>
                                        <th data-sort="int">Impuesto (%)</th>
                                        <th data-sort="int">Precio</th>
				      </tr>
				    </thead>
				    <tbody>
                                        <?php
                                        $TotalVenta;
                                        echo "<tr>";
                                        if(isset($listaReporte))
                                        {
                                            for($indes=0;$index<count($listaReporte);$index++)
                                            {
                                                echo "<td>"; echo $listaReporte[$index]->getFecha(); echo "</td>";
                                                echo "<td>"; echo $listaReporte[$index]->getTitulo(); echo "</td>";
                                                echo "<td>"; echo $listaReporte[$index]->getNombreCategoria(); echo "</td>";
                                                echo "<td>"; echo $listaReporte[$index]->getCorreo(); echo "</td>";
                                                echo "<td>"; echo $listaReporte[$index]->getPais(); echo "</td>";
                                                echo "<td>"; echo $listaReporte[$index]->getTipoTarjeta(); echo "</td>";
                                                echo "<td>"; echo $listaReporte[$index]->getFecha(); echo "</td>";
                                                echo "<td>"; echo $listaReporte[$index]->getUltimosNumeroTarjeta(); echo "</td>";
                                                echo "<td>"; echo $listaReporte[$index]->getPrecio(); echo "</td>";
                                                $TotalVenta+=$listaReporte[$index]->getPrecio();
                                            }
                                        }
                                        echo "</tr>";
                                        ?>
				    </tbody>
				  </table>

				

				
			</div>
		</div>
	</body>
</html>