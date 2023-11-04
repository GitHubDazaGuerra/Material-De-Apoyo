<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuarios</title>

	<!--CDN DE BOOTSTRAP-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

	<!--CDN DE JAVASCRIPS-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<br><br>
		<h2 class="text-sm-center">Listado de usuarios</h2>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  			Agragar Usuario
		</button>

		<br><br>
		<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Tipo Documento</th>
			      <th scope="col">Documento</th>
			      <th scope="col">Nombre(s)</th>
			      <th scope="col">Apellidos(s)</th>
			      <th scope="col">Genero</th>
			      <th scope="col">Teléfono</th>
			      <th scope="col">Correo</th>
			    </tr>
			  </thead>
			  <tbody>
			    
			    <!--Aqui agregaremos los registros de la BD-->

			    <?php
			    	include_once("listado.php"); // Llamamos al archivo que trae ellistado de usuarios
			    ?>

			    <?php
			    	foreach ($usuarios as $usuario) {
			    	
			    ?>

			    	<tr>
			    		<td><?php echo $usuario->idUsuario?></td>
			    		<td><?php echo $usuario->tipoDocumento?></td>
			    		<td><?php echo $usuario->documento?></td>
			    		<td><?php echo $usuario->nombreUsuario?></td>
			    		<td><?php echo $usuario->apellidosUsuario?></td>
			    		<td><?php echo $usuario->genero?></td>
			    		<td><?php echo $usuario->telefono?></td>
			    		<td><?php echo $usuario->correo?></td>

			    	</tr>

			    <?php } ?>

			  </tbody>
		</table>

	</div>

			<!--insertar el modal-->

			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Agragando Usuarios</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        <!--AQUI AGREGO EL FORMULARIO CON LOS INPUT Y LABEL DE CADA ATRIBUTO-->

				        <div class="container">
				        	
				        	<form action="registrar.php" method="POST">
				        		
				        		<!--Aqui implementamos todos los Input y label que nececitemos-->

				        		<div class="form-group">
				        			<label class="control-label">Tipo de Documento</label>
				        			<select class="form-control" name="tipodocumento">
				        				<option value="CC.">CC.</option>
				        				<option value="TI.">TI.</option>
				        				<option value="RC.">RC.</option>
				        			</select>

				        		</div>

				        		<div class="form-group">
				        			<label class="control-label">Documento.</label>
				        			<input type="text" name="documento" class="form-control">
				        		</div>


				        		<div class="form-group">
				        			<label class="control-label">Nombre(s)</label>
				        			<input type="text" name="nombres" class="form-control">
				        		</div>

				        		<div class="form-group">
				        			<label class="control-label">Apellidos(s)</label>
				        			<input type="text" name="apellidos" class="form-control">
				        		</div>

				        		<div class="form-group">
				        			<label class="control-label">Género.</label>
				        			<select class="form-control" name="genero">
				        				<option value="Masculino.">Masculino.</option>
				        				<option value="Femenino.">Femenino.</option>
				        				<option value="Otro.">Otro.</option>
				        			</select>

				        		</div>

				        		<div class="form-group">
				        			<label class="control-label">Teléfono</label>
				        			<input type="text" name="telefono" class="form-control">
				        		</div>

				        		<div class="form-group">
				        			<label class="control-label">E-mail</label>
				        			<input type="text" name="correo" class="form-control">
				        		</div>

				        		<div class="form-group">
				        			<label class="control-label">Password</label>
				        			<input type="text" name="password" class="form-control">
				        		</div>

				        		<div class="modal-footer">
				        			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				        			<button type="input" class="btn btn-primary">Guardar Cambios</button>
				      			</div>
				        	</form>

				        </div>

				      </div>
				      
				    </div>
				  </div>
			</div>
</body>
</html>