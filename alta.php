<?php 
	require('conection.php');
	/*$query = "select id_user, name, ls_name, ls_name2, age, user_Name, passw, admin from users where user_Name = '".$user."'";
		$consult = $this->conection->query($query);

		if ($row = mysqli_fetch_array($consult)) {
			echo "Usuario ya existente";
		}
		else{
			echo "Usuario o contraseña incorrectos";
		}*/
if (isset($_POST['registarse'])) {

		$database = new conection;
		$database->altaUser($_POST['name'],$_POST['last_Name'],$_POST['last_Name2'],$_POST['age'],$_POST['user'],$_POST['passw']);
		$database->closeDataBase();
		header("location: registroExitoso.php"); 

}else{
	header("location: index.php"); 
}

?>