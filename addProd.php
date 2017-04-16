<?php 
	
	require('conectionShop.php');

	$database = new conectionShop;
	$database->altProd($_POST['prod'],$_POST['pric'],$_POST['des'],$_POST['can']);
	$database->closeDataBase();
?>