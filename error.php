<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="icon" type="image" href="img/icono.jpg">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Document</title>
</head>
<body>
	<div>
		<img id="background" src="img/fondo.jpg" alt="Imagen"> <!--Use el id background define el z-index de la imagen de fondo, asi como la caracteristica de que sea uato ajustable-->
	</div>
	<div style="top: 10%;" id="frontground" class="container">
		<div class="row">
			<div class="col-xs-10 col-sm-5">
				<h1 style="color: gold;">Usuario o contraseña incorrectos</h1><br>
				<form action="index.php">
					<button class="btn btn-colors btn-block">Continuar</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>