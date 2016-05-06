<!DOCTYPE html>
<html>
	<head>
		<title>Cafe Vinyl</title>
		<link href='https://fonts.googleapis.com/css?family=Teko:600' rel='stylesheet' type='text/css'>
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
				<form>
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
				<a href=""><div class="OpcionMenu">Carrito de compras</div></a>
				<a href="Perfil_Usuario.html"><div class="OpcionMenu">Mi perfil</div></a>
				<a href=""><div class="OpcionMenu">Mis listas</div></a>
				<a href=""><div class="OpcionMenu">Subir audio</div></a>
				<a href=""><div class="OpcionMenu">Reporte de ventas</div></a>
			</div>
		</div>

		<div id="EspacioContenido">
			<div id="Contenido" style="width: 100%">
				<h3>Carrito de compras</h3>

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
		</div>
	</body>
</html>