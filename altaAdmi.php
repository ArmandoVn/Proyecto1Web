<?php 
	require('conection.php');
	
if (isset($_POST['registarse'])) {

		$database = new conection;
		$database->altaAdmi($_POST['name'],$_POST['last_Name'],$_POST['last_Name2'],$_POST['age'],$_POST['user'],$_POST['passw']);
		$database->closeDataBase();
		header("location: registroExitoso.php"); 

}else{
	header("location: index.php"); 
}

?>