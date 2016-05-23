<!DOCTYPE html>
<html>
	<head>
		<title>Cafe Vinyl</title>
                <link rel="stylesheet" type="text/css" href="CSS/Hoja_Estilo_BDM.css">
		<meta charset="UTF-8">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                <script src="Paginas Proyecto BDM/Table_Plugin//Table_Plugin/stupidtable.js?dev"></script>
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

				<table class="TablaEspecial">
				    <thead>
				      <tr>
				        <th data-sort="string">Audio</th>
				        <th data-sort="int">Fecha de compra</th>
				        <th data-sort="int">Precio</th>
				        <th data-sort="int">Impuesto (%)</th>
				        <th data-sort="string">Correo</th>
				        <th data-sort="string">Domicilio</th>
				        <th data-sort="string">RFC</th>
				        <th data-sort="string">CURP</th>
				        <th data-sort="string">Tarjeta</th>
				        <th data-sort="string">Digitos de la tarjeta</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td><a href="Pagina_Audio.php">You're not alone</a></td>
				        <td>16/05/2016</a></td>
				        <td>$49.00</td>
				        <td>10%</td>
				        <td>BNS@gmail.com</td>
				        <td>Green Coast #722, San Nicolás de los Garza. Nuevo León. México</td>
				        <td>IFUEWUIH82</td>
				        <td>IFUEWUIH82</td>
				        <td>Master Card</td>
				        <td>1234</td>
				      </tr>
				      <tr>
				        <td><a href="Pagina_Audio.php">You're not alone</a></td>
				        <td>16/05/2016</a></td>
				        <td>$49.00</td>
				        <td>10%</td>
				        <td>BNS@gmail.com</td>
				        <td>Green Coast #722, San Nicolás de los Garza. Nuevo León. México</td>
				        <td>IFUEWUIH82</td>
				        <td>IFUEWUIH82</td>
				        <td>Master Card</td>
				        <td>1234</td>
				      </tr>
				      <tr>
				        <td><a href="Pagina_Audio.php">You're not alone</a></td>
				        <td>16/05/2016</a></td>
				        <td>$49.00</td>
				        <td>10%</td>
				        <td>BNS@gmail.com</td>
				        <td>Green Coast #722, San Nicolás de los Garza. Nuevo León. México</td>
				        <td>IFUEWUIH82</td>
				        <td>IFUEWUIH82</td>
				        <td>Master Card</td>
				        <td>1234</td>
				      </tr>
				    </tbody>
				  </table>

				  <h3 style="font-size:50px; margin-top:20px;">Discos comprados</h3>

				<table class="TablaEspecial">
				    <thead>
				      <tr>
				        <th data-sort="string">Audio</th>
				        <th data-sort="int">Fecha de compra</th>
				        <th data-sort="int">Precio</th>
				        <th data-sort="int">Impuesto (%)</th>
				        <th data-sort="string">Correo</th>
				        <th data-sort="string">Domicilio</th>
				        <th data-sort="string">RFC</th>
				        <th data-sort="string">CURP</th>
				        <th data-sort="string">Tarjeta</th>
				        <th data-sort="string">Digitos de la tarjeta</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td><a href="Pagina_Audio.php">You're not alone</a></td>
				        <td>16/05/2016</a></td>
				        <td>$49.00</td>
				        <td>10%</td>
				        <td>BNS@gmail.com</td>
				        <td>Green Coast #722, San Nicolás de los Garza. Nuevo León. México</td>
				        <td>IFUEWUIH82</td>
				        <td>IFUEWUIH82</td>
				        <td>Master Card</td>
				        <td>1234</td>
				      </tr>
				      <tr>
				        <td><a href="Pagina_Audio.php">You're not alone</a></td>
				        <td>16/05/2016</a></td>
				        <td>$49.00</td>
				        <td>10%</td>
				        <td>BNS@gmail.com</td>
				        <td>Green Coast #722, San Nicolás de los Garza. Nuevo León. México</td>
				        <td>IFUEWUIH82</td>
				        <td>IFUEWUIH82</td>
				        <td>Master Card</td>
				        <td>1234</td>
				      </tr>
				      <tr>
				        <td><a href="Pagina_Audio.html">You're not alone</a></td>
				        <td>16/05/2016</a></td>
				        <td>$49.00</td>
				        <td>10%</td>
				        <td>BNS@gmail.com</td>
				        <td>Green Coast #722, San Nicolás de los Garza. Nuevo León. México</td>
				        <td>IFUEWUIH82</td>
				        <td>IFUEWUIH82</td>
				        <td>Master Card</td>
				        <td>1234</td>
				      </tr>
				    </tbody>
				  </table>
			</div>
		</div>
	</body>
</html>