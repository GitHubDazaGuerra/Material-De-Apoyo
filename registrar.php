<?php

	include_once("conexion.php");//INCLUIMOS LA CONEXION

	//Agregamos variables y recibimos los datos del name de los input
	$tipoDocumento=$_POST['tipodocumento'];
	$documento=$_POST['documento'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$genero=$_POST['genero'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$password=$_POST['password'];

	//Utlizamos el metodo prepare, el cual nos sirve para preparar una consulta y no para ejecutarla
	//Tiene mayor rendimiento y eviya inyecciónes SQL a la BD.

	$insertar=$conexion->prepare("INSERT INTO usuarios(tipoDocumento,documento,nombreUsuario,apellidosUsuario,genero,
									telefono, correo,password) VALUES(:tipodocumento,:documento,:nombres,:apellidos,
									:genero,:telefono,:correo,:password)");


	//ASIGNAREMOS A LA VARIABLE $INSERTAR EL METODO bindParam()


	$insertar->bindParam(':tipodocumento',$tipoDocumento);
	$insertar->bindParam(':documento',$documento);
	$insertar->bindParam(':nombres',$nombres);	
	$insertar->bindParam(':apellidos',$apellidos);
	$insertar->bindParam(':genero',$genero);
	$insertar->bindParam(':telefono',$telefono);
	$insertar->bindParam(':correo',$correo);
	$insertar->bindParam(':password',$password);

	if ($insertar->execute()) {
		return header("Location:index.php");
	}else{
		return 'Error al insertar';
	}


?>