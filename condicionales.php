<!DOCTYPE html>
<html>
<head>
	<title>condicional if, else</title>
</head>
<body>
<?php
$numero1=500;
$numero2=100;
$numero3=100;
if ($numero1>$numero2 && $numero1>$numero3) {
	echo "El numero Mayor Es: $numero1";
}else if ($numero2>$numero1 && $numero2>$numero3) {
	echo "El Numero Mayor Es: $numero2";
}elseif ($numero1==$numero2 && $numero2==$numero3) {
	echo "Todos son iguales";
}
else{
echo "El Numero Mayor Es: $numero3";
}
?>
</body>
</html>