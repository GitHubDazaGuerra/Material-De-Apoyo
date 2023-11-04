<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clientes</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<br>
		<h2 class="text-center"> Insertar Usuarios</h2> <br>

		<div class="row">
			
			<div class="col-md-6">
				
				<form action="agregar.php" method="POST">
					
					<div class="form-group">
						<label>Documento:</label>
						<input type="text" name="documento" class="form-control">
					</div>

					<div class="form-group">
						<label>Nombres:</label>
						<input type="text" name="nombres" class="form-control">
					</div>

					<div class="form-group">
						<label>Apellidos:</label>
						<input type="text" name="apellidos" class="form-control">
					</div>

					<div class="form-group">
						<label>Teléfono:</label>
						<input type="text" name="telefono" class="form-control">
					</div>

					<div class="form-group">
						<label>E-mail:</label>
						<input type="mail" name="correo" class="form-control">
					</div>
					<br>
					<input type="submit" name="" 
					class="btn btn-success btn-block">
				</form>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-12">

				<h2 class="text-sm-center">Listado de Usuarios</h2><br>

				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Documento</th>
				      <th scope="col">Nombres</th>
				      <th scope="col">Apellidos</th>
				      <th scope="col">Teléfono</th>
				      <th scope="col">Correo</th>
				      <th scope="col">Editar</th>
				      <th scope="col">Eliminar</th>
				    </tr>
				  </thead>
				  <tbody>
				    <!--Aqui traemos los datos de la Base de datos-->

				    <?php
				    	include_once("listado.php");
				    ?>

				    <?php
				    	while($row = mysqli_fetch_array($query)){
				    ?>

					<tr>
						
						<td><?php echo $row['documento']?></td>
						<td><?php echo $row['nombres']?></td>
						<td><?php echo $row['apellidos']?></td>
						<td><?php echo $row['telefono']?></td>
						<td><?php echo $row['correo']?></td>

						<td> <a href="editar.php?id=<?php echo $row['documento']?>" class="btn btn-primary">Editar</a></td>

						<td> <a href="eliminar.php?id=<?php echo $row['documento']?>" class="btn btn-danger">Eliminar</a></td>
					</tr>

				<?php }?>
				  </tbody>
				</table>
				
			</div>
		</div>
	</div>
	
</body>
</html>