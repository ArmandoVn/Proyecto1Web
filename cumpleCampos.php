<?php
 
if (isset($_POST['submit'])) {

	if ((isset($_POST['user'])) && (isset($_POST['password']))) { //La funcion isset como su nombre lo indica nos dice si "ha sido entregado" el valor correspondiente de las variables
	}
	else{
		header("location: index.php"); //La funcion header nos ayuda a establecer que no se podra acceder a la nueva pagina hasta que se halla loggeado de manera exitosa
	}
}
else{
	header("location: index.php");
}

?>
