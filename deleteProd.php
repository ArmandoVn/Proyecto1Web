<?php 
	
	require('conectionShop.php');

	$database = new conectionShop;
	$database->delete($_POST['borrar']);
	$database->closeDataBase();
?>