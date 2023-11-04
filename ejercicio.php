<?php
$numero1=130;
$numero2=140;
$numero3=0;

if ($numero1==$numero2) {
$numero3 = ($numero1+$numero2);
echo "La Suma Es: $numero3";	
}elseif ($numero1>$numero2) {
$numero3 = ($numero1 * $numero2);
echo "La Multiplicacion Es: $numero3";	
}elseif ($numero1<$numero2) {
	$numero3 = ($numero1 / $numero2);
	echo "La Division Es: $numero3";
}
?>