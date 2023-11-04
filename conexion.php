<?php

	//Metodo para conectar a nuestra BD

	function conectar(){
		$hosting = "localhost";
		$usuario = "root";
		$pass = "root";
		//$puerto = 3307; //es opcional en caso de que tengan puertos diferentes a 3306

		$bd = "clientes";

		$conectar = mysqli_connect($hosting,$usuario,$pass,$bd);

		mysqli_select_db($conectar, $bd);

		return $conectar;

	}
?>