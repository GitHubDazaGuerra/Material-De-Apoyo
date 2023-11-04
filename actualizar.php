<?php
	
	include("conexion.php"); 
	$con =  conectar(); //Igualando a la funcion o metodo del archivo conexion

	$documento=$_POST['documento'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];

	$sql = "UPDATE cliente SET documento = '$documento', nombres='$nombres', apellidos='$apellidos',
								telefono='$telefono',correo='$correo' WHERE  documento='$documento'";

	$query = mysqli_query($con,$sql);

	if ($query) {
		Header("Location: index.php");
	}
?>