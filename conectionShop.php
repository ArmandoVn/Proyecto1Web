<?php 

class conectionShop{

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

	public function altProd($name, $price, $description, $cant){

		$insert = "INSERT into product values ('','$name','$price','$description','$cant')";
		mysqli_query($this->conection, $insert)
			or die ("Error al insertar registros");
		echo "Producto insertado correctamente";
	}

	public function delete($id){
		$delete = "DELETE from product where id_prod = '$id'";
		mysqli_query($this->conection, $delete)
			or die ("Error al borrar producto");
		echo "Producto borrado!";
	}

	public function showArticles(){
		$consult = "SELECT * from product";
		$result = mysqli_query($this->conection, $consult)
			or die ("Error al borrar usuario");

		echo '<table border="1">';
		echo '<tr>';
		echo '<th id="id">ID_PROD</th>';
		echo '<th id="name">NAME</th>';
		echo '<th id="price">PRICE</th>';
		echo '<th id="des">DESCRIPTION</th>';
		echo '<th id="cant">CANT</th>';
		echo '</tr>';

		while ($atrib = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>'.$atrib['id_prod'].'</td>';
			echo '<td>'.$atrib['name'].'</td>';
			echo '<td>'.$atrib['price'].'</td>';
			echo '<td>'.$atrib['description'].'</td>';
			echo '<td>'.$atrib['cant'].'</td>';
			echo '</tr>';
		}

		echo '</table>';
	}
}

?>