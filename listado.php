<?php

	include("conexion.php"); 
	$con =  conectar(); //Igualando a la funcion o metodo del archivo conexion

	$sql = "SELECT * FROM cliente";

	$query = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($query);

?>