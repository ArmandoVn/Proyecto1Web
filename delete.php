<?php 
	
	require('conection.php');

	$database = new conection;
	$database->delete($_POST['borrar']);
	$database->closeDataBase();
?>