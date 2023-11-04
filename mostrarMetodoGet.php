<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width,initial-scale=1.0">
	<title>VISTA FORMULARIO</title>
</head>
<body>
<?php

isset($_POST['Nombre']);
echo "Usuario:";
echo $_POST['Nombre'];
echo "<br><br>";

isset($_POST['email']);
echo "Correo:";
echo $_POST['email'];
echo "<br><br>";

isset($_POST['paginaweb']);
echo "Direccion URL:";
echo $_POST['paginaweb'];
echo "<br><br>";

isset($_POST['valor']);
echo "Costo:";
echo $_POST['valor'];
echo "<br><br>";

isset($_POST['user']);
echo "Usuario Destino:";
echo $_POST['user'];
echo "<br><br>";

isset($_POST['servidor']);
echo "Servidor:";
echo $_POST['servidor'];
echo "<br><br>";

isset($_POST['observaciones']);
echo "Observacion:";
echo $_POST['observaciones'];
echo "<br><br>";

?>
</body>
</html>