<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="icon" type="image" href="img/icono.jpg">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Bienvenido</title>
</head>
<body">
	<div>
		<img id="background" src="img/fondo.jpg" alt="Imagen"> <!--Use el id background define el z-index de la imagen de fondo, asi como la caracteristica de que sea uato ajustable-->
	</div>
	<div id="frontground" class="container"> <!--frontground define unicamente el z-index para que se puedan ver lo elementos-->
		<div class="row">
			<div class="col-xs-10 col-sm-3">
				<div class="page-header text-center"> <!--La clase page-header define que el texto de esta etiqueta sera el encabezado del contenedor y despues de el dibuja una linea-->
					<h2 style="color:gold;">Bienvenido<br><small style="color: silver;">Asus</small></h2>
				</div>
				<form class="form-signin" method="POST" action="login.php"> <!--Formulario con los elementos dinamicos-->
					<h3 class="form-signin-heading text-center" style="color: gold;">Ingrese sus datos:</h3>
					<!--<label for="user" class="sr-only">Usuario</label>-->
					<input type="text" name="user" class="form-control inputs" placeholder="Usuario" required autofocus><br><!--El atributo name define el nombre de la variable asosiada al input y que sera la cual se enviara, el atributo placeholder sera el texto que aparecera dentro de mi input-->
					<!--<label for="password" class="sr-only">Password</label>-->
					<input type="password" name="password" class="form-control inputs" placeholder="Contraseña" required>
					<br>
					<!--<input type="submit" name="ingresar" class="btn btn-colors btn-block" value="Ingresar">-->
					<button type="submit" name="ingresar" class="btn btn-colors btn-block"><b>Ingresar</b></button>  <!--btn-primary daformato al boton: color: azul, btn-block indica al boton que abarque todo el espacio disponible-->
				</form>
				<br>
				<form class="form-signin" method="POST" action="registro.php">
					<!--<input type="submit" name="resgistro" class="btn btn-colors1 btn-block" value="Registrarse">-->
					<button type="submit" name="resgistro" class="btn btn-colors1 btn-block"><b>Registrarse</b></button><br>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" href="js/jquery.min.js"></script>
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</body>
</html>