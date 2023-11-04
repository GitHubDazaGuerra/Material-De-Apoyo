<?php
	
	include("conexion.php"); 
	$con =  conectar(); //Igualando a la funcion o metodo del archivo conexion

	$id = $_GET['id'];

	$sql = "DELETE FROM cliente WHERE documento = '$id'";
	$query = mysqli_query($con,$sql);

	$row = mysqli_fetch_array($query);

	if ($query) {
		Header("Location: index.php");
	}

?>