<?php
	
	include("conexion.php"); 
	$con =  conectar(); //Igualando a la funcion o metodo del archivo conexion

	$id = $_GET['id'];

	$sql = "SELECT * FROM cliente WHERE documento = '$id'";
	$query = mysqli_query($con,$sql);

	$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
	
	<h2 class="text-center mt-5">Actualizar Datos</h2>

	<div class="container">
		
		<div class="col-md-6">
				
				<form action="actualizar.php" method="POST">
					
					<div class="form-group">
						<label>Documento:</label>
						<input type="text" name="documento" class="form-control" value="<?php echo $row['documento']?>" readonly>
					</div>

					<div class="form-group">
						<label>Nombres:</label>
						<input type="text" name="nombres" class="form-control" value="<?php echo $row['nombres']?>">
					</div>

					<div class="form-group">
						<label>Apellidos:</label>
						<input type="text" name="apellidos" class="form-control" value="<?php echo $row['apellidos']?>">
					</div>

					<div class="form-group">
						<label>Teléfono:</label>
						<input type="text" name="telefono" class="form-control" value="<?php echo $row['telefono']?>">
					</div>

					<div class="form-group">
						<label>E-mail:</label>
						<input type="mail" name="correo" class="form-control" value="<?php echo $row['correo']?>">
					</div>
					<br>
					<input type="submit" name="" class="btn btn-success btn-block" value="Actualizar">
				</form>
			</div>


	</div>
</body>
</html>