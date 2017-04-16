<?php 
	require('conexion.php');
	$checkuser = mysqli_query($Conexion, "SELECT * FROM users");
	$renglon = mysqli_fetch_assoc($checkuser);
	echo $renglon["name"];
?>