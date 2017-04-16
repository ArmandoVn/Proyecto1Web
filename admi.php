<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="icon" type="image" href="img/icono.jpg">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Administrador</title>
</head>
<body style="background-color: #736D6D;">
	
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
				<li class="active"><a href="tienda.php">Tienda</a></li>
				<li><a href="registro.php">Registrar Usuario</a></li>
				<li><a href="registroAdmi.php">Registar Administrador</a></li>
				<li><a href="cerrarSesion.php">Cerrar sesion</a></li>
			</ul>
		</div>
	</div>
	</nav><br>
	<div style="margin:50px;" class="container-fluid">
		<?php
			require('conection.php');

			$database = new conection;
			$database->showAdm(); 
			$database->closeDataBase();

		?>
		<br>
		<br>
		<?php 
			require('conectionShop.php');

			$database = new conectionShop;
			$database->showArticles();
			$database->closeDataBase();

		?>
	</div>
	<div style="margin: 20px;" class="container row">
		<div class="col-xs-4 col-sm-2">
			<form class="form-signin" action="delete.php" method="POST">
				<h4 style="color: gold;">Borrar Usuario:</h4>
				<input type="text" name="borrar" class="form-control inputs" placeholder="ID Usuario">
				<button type="sumbit" name="delete"  class="btn btn-colors btn-block">Borrar</button>
			</form>
		</div>
		<div class="col-sm-2">
		</div>
		<div class="col-xs-4 col-sm-2">
			<form class="form-signin" action="addProd.php" method="POST">
				<h4 style="color: gold;">Insertar producto:</h4>
				<input type="text" name="prod" class="form-control inputs" placeholder="Producto" required>
				<input type="text" name="pric" class="form-control inputs" placeholder="Precio" required>
				<input type="text" name="des" class="form-control inputs" placeholder="Descripcion" required>
				<input type="text" name="can" class="form-control inputs" placeholder="Cantidad" required>
				<button type="sumbit" name="delete"  class="btn btn-colors btn-block">Agregar</button>
			</form>
		</div>
		<div class="col-sm-2">
		</div>
		<div class="col-xs-4 col-sm-2">
			<form class="form-signin" action="deleteProd.php" method="POST">
				<h4 style="color: gold;">Borrar Producto:</h4>
				<input type="text" name="borrar" class="form-control inputs" placeholder="ID Producto" required>
				<button type="sumbit" name="delete"  class="btn btn-colors btn-block">Borrar</button>
			</form>
		</div>
	</div>

</body>
</html>