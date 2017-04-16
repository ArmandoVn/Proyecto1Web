<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="icon" type="image" href="img/icono.jpg">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Registro</title>
</head>
<body>
	<div>
		<img id="background" src="img/fondo.jpg" alt="Imagen"> <!--Use el id background define el z-index de la imagen de fondo, asi como la caracteristica de que sea uato ajustable-->
	</div>
	<div id="frontground" class="container">
		<div class="row">
			<div class="col-xs-10 col-sm-3">
				<div class="page-header text-center">
					<h2 style="color: gold;">Registro</h2>
				</div>
				<form class="form-signin" method="POST" action="altaAdmi.php">
					<input type="text" name="name" class="inputs form-control" placeholder="Nombre (obligatorio)" required><br>
					<input type="text" name="last_Name" class="inputs form-control" placeholder="Apellido Paterno (obligatorio)" required><br>
					<input type="text" name="last_Name2" class="inputs form-control" placeholder="Apellido Materno (obligatorio)" required><br>
					<input type="text" name="age" class="inputs form-control" placeholder="Edad" ><br>
					<input type="text" name="user" class="inputs form-control" placeholder="Usuario (obligatorio)" required><br>
					<input type="password" name="passw" class="inputs form-control" placeholder="Contraseña (obligatorio)" required><br>
					<input type="password" name="passw2" class="inputs form-control" placeholder="Repite contraseña (obligatorio)" required=""><br>
					<button type="submit" name="registarse" class="btn btn-colors btn-block">Registarse</button><br>
				</form>
			</div>
		</div>
	</div>

</body>
</html>