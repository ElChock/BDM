<!DOCTYPE html>
<html>
	<head>
		<title>Cafe Vinyl</title>
		<link rel="stylesheet" type="text/css" href="Hoja_Estilo_BDM.css">
		<meta charset="UTF-8">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  		<script src="Table_Plugin/stupidtable.js?dev"></script>
		<script src="Codigo_Javascript_BDM.js"></script>
		<script>
		    $(function(){
		        $("table").stupidtable();
		    });
	  </script>
	</head>

	<body>
		<div id="Encabezado">
			<div id="Logotipo">
				<a href="Pagina_Inicio.html">
					<img src="CafeVinyl.png">
				</a>
			</div>
			<div id="BusquedaAudio">
				<form action="Pagina_Inicio.html" method="get">
					<input type="text" placeholder="Buscar audio..." name="BuscarAudio">
				</form>
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
				<a href="Carrito_Compras.html"><div class="OpcionMenu">Carrito de compras</div></a>
				<a href="Perfil_Usuario.html"><div class="OpcionMenu">Mi perfil</div></a>
				<a href="Usuario_Listas.html"><div class="OpcionMenu">Mis listas</div></a>
				<a href="Subir_Audio.html"><div class="OpcionMenu">Subir audio</div></a>
				<a href="Reporte_Ventas.html"><div class="OpcionMenu">Reporte de ventas</div></a>
				<a href="Subir_Videos_Publicitarios.html"><div class="OpcionMenu">Publicidad</div></a>
			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido">
				<h1 style="font-size:50px;">Carrito de compras</h1>

				<table class="TablaEspecial">
				    <thead>
				      <tr>
				      	<th data-sort="string">Audio</th>
				        <th data-sort="string">Artista</th>
				        <th data-sort="string">Precio (pesos)</th>
				        <th data-sort="int">Comprar</th>
				        <th data-sort="float">Quitar</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td><a href="Pagina_Audio.html">You're not alone</a></td>
				        <td><a href="Perfil_Usuario.html">Michael Jackson</a></td>
				        <td>$49.00</td>
				        <td>
				        	<button>Comprar</button>
				    	</td>
				        <td>
				        	<button>Quitar del carrito</button>
				        </td>
				      </tr>
				      <tr>
				        <td><a href="Pagina_Audio.html">21 Guns</a></td>
				        <td><a href="Perfil_Usuario.html">Green Day</a></td>
				        <td>$49.00</td>
				        <td><button>Comprar</button></td>
				        <td><button>Quitar del carrito</button></td>
				      </tr>
				      <tr>
				        <td><a href="Pagina_Audio.html">Millenium</a></td>
				        <td><a href="Perfil_Usuario.html">Robert Williams</a></td>
				        <td>$49.00</td>
				        <td><button>Comprar</button></td>
				        <td><button>Quitar del carrito</button></td>
				      </tr>
				    </tbody>
				  </table>
			</div>
			<div id="Publicidad">
				<video autoplay loop muted>
					<source src="City.mp4" type="video/mp4">
					Este browser no acepta videos
				</video>
				<img src="Fondo_Portada.jpg">
			</div>
		</div>
	</body>
</html>