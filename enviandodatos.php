<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container"><br><br>
	<form method="GET" action="enviandodatos.php">
	<h1>Dia De La Semana</h1>
	<br><br>
	<labe>Digite Dia De La Semana:</labe>
	<input type="text" name="dia">
	<button type="input" class="btn btn-primary">CONSULTAR</button>
</form>
	<?php
	$dia = $_GET['dia'];
	switch ($dia) {
		case '1':
			echo "Dia Lunes";
			break;
			case '2':
			echo "Dia Martes";
			break;
			case '3':
			echo "Dia Miercoles";
			break;
			case '4':
			echo "Dia Jueves";
			break;
			case '5':
			echo "Dia Viernes";
		default;
			echo "Dia Fin De Semana";
			break;
	}

	?>
</div>
</body>
</html>