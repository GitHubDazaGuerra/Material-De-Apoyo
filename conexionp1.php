<?php
	
	$servidor="localhost";
	$usuario="root";
	$password="";
	$puerto=3307;

	try{

		$conexion = new PDO("mysql:host=$servidor;port=$puerto;dbname=usuarios",$usuario,$password);
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Conexión realizada Sactisfactoriamente";
	}

	catch(PDOException $e)
	{
		echo "La conexion ha fallado".$e->getMessage();
	}

	//$conexion = null;
	//$conexion = close();
?>