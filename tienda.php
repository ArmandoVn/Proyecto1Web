<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="icon" type="image" href="img/icono.jpg">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Tienda</title>
</head>
<body style="background-color: #686464;">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">	
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="callapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Navegacion</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="registro.php">Registrar Usuario</a></li>
				<li><a href="registroAdmi.php">Registar Administrador</a></li>
				<li><a href="cerrarSesion.php">Cerrar sesion</a></li>
			</ul>
		</div>
	</div>
	</nav><br>
	<div style="margin:50px;" class="container">
		<?php 
		require('conectionShop.php');

			$database = new conectionShop;
			$database->showArticles();
			$database->closeDataBase();

		?>
	</div>
</body>
</html>