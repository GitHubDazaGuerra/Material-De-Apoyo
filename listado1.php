<?php
	
	include_once("conexion.php"); //Indica qeu estamos incluyendo todo el codigo de conexion.php
	$consulta=$conexion->query("SELECT * FROM usuarios;");
	$usuarios=$consulta->fetchAll(PDO::FETCH_OBJ);//$usuasios trae la informacion de la tabla

	//Tra e la informacion de la tabla

	//print_r($usuarios);
?>