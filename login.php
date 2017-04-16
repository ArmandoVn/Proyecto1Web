<?php
require('conection.php');

if (isset($_POST['ingresar'])) {

	if ((isset($_POST['user'])) && (isset($_POST['password']))) { 

		/*$user = $_POST['user'];
		$passw = $_POST['password'];*/

		$database = new conection;
		$database->login($_POST['user'], $_POST['password']);
		$database->closeDataBase();

	}
	else{
		header("location: index.php"); 
	}

}
else{
	header("location: index.php");
}

?>