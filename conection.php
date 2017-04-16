<?php 

class conection{

	private $conection;

	public function __construct(){

		$this->conection = new mysqli('localhost','root','','proyectoweb1');

		if ($this->conection->connect_errno) {
			die("Fallo al tratar de conectar con MySQL ".$this->conection->connect_errno);
		}
	}

	public function closeDataBase(){
		$this->conection->close();
	}

	public function login($user, $passw){
		$query = "SELECT id_user, name, ls_name, ls_name2, age, user_Name, passw, admin from users where user_Name = '".$user."' and passw = '".$passw."'";
		$consult = $this->conection->query($query);

		if ($row = mysqli_fetch_array($consult)) {
			session_start();
			$_session['id'] = $row['id_user'];
			$_session['usr'] = $row['user_Name'];
			$_session['pws'] = $row['passw'];
			$_session['admi'] = $row['admin'];
			if ($_session['admi'] == '0') {
				header("location: admi.php");
			}else{
				header("location: usuario.php");
			} 
		}
		else{
			header("location: error.php");
		}
	}

	public function altaUser($name, $ls, $ls2, $age, $user, $passw){
		$admin = "1";
		$insert = "INSERT into users values ('','$name','$ls','$ls2','$age','$user','$passw','$admin')";
		mysqli_query($this->conection, $insert)
			or die ("Error al insertar registros");
		echo "Datos insertados correctamente";
	}

	public function altaAdmi($name, $ls, $ls2, $age, $user, $passw){
		$admin = "0";
		$insert = "INSERT into users values ('','$name','$ls','$ls2','$age','$user','$passw','$admin')";
		mysqli_query($this->conection, $insert)
			or die ("Error al insertar registros");
		echo "Datos insertados correctamente";
	}

	public function delete($id){
		$del = "DELETE from users where id_user = '$id'";
		mysqli_query($this->conection, $del)
			or die ("Error al borrar usuario");
		echo "Usuario borrado";
	}

	public function showAdm(){
		$consult = "SELECT * from users";
		$result = mysqli_query($this->conection, $consult)
			or die ("Error al borrar usuario");

		echo '<table border="1">';
		echo '<tr>';
		echo '<th id="id">ID_USER</th>';
		echo '<th id="name">NAME</th>';
		echo '<th id="ls">LAST_NAME</th>';
		echo '<th id="ls2">LAST_NAME</th>';
		echo '<th id="age">AGE</th>';
		echo '<th id="user">USER</th>';
		echo '<th id="passw">PASSWORD</th>';
		echo '<th id="admi">ADMIN</th>';
		echo '</tr>';

		while ($atrib = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>'.$atrib['id_user'].'</td>';
			echo '<td>'.$atrib['name'].'</td>';
			echo '<td>'.$atrib['ls_name'].'</td>';
			echo '<td>'.$atrib['ls_name2'].'</td>';
			echo '<td>'.$atrib['age'].'</td>';
			echo '<td>'.$atrib['user_Name'].'</td>';
			echo '<td>'.$atrib['passw'].'</td>';
			echo '<td>'.$atrib['admin'].'</td>';
			echo '</tr>';
		}

		echo '</table>';
	}

	public function showUsr($user, $passw){
		$query = "SELECT id_user, name, ls_name, ls_name2, age, user_Name, passw, admin from users where user_Name = '".$user."' and passw = '".$passw."'";
		$consult = $this->conection->query($query);

		if ($row = mysqli_fetch_array($consult)) {
			echo '<table border="1">';
			echo '<tr>';
			echo '<th id="id">ID_USER</th>';
			echo '<th id="name">NAME</th>';
			echo '<th id="ls">LAST_NAME</th>';
			echo '<th id="ls2">LAST_NAME</th>';
			echo '<th id="age">AGE</th>';
			echo '<th id="user">USER</th>';
			echo '<th id="passw">PASSWORD</th>';
			echo '<th id="admi">ADMIN</th>';
			echo '</tr>';

			echo '<tr>';
			echo '<td>'.$row['id_user'].'</td>';
			echo '<td>'.$row['name'].'</td>';
			echo '<td>'.$row['ls_name'].'</td>';
			echo '<td>'.$row['ls_name2'].'</td>';
			echo '<td>'.$row['age'].'</td>';
			echo '<td>'.$row['user_Name'].'</td>';
			echo '<td>'.$row['passw'].'</td>';
			echo '<td>'.$row['admin'].'</td>';
			echo '</tr>';
			echo '</table>';
		}
	}
}

?>