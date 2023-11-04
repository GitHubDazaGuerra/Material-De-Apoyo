<?php
$N="Nomina Empleados Mes De <H1>AGOSTO</H1>";
$nombre1="Julio Cesar";
$nombre2="Frank David";
$nombre3="Camilo Andres";

$apellido1="Daza Guerra";
$apellido2="Rodriguez Guerra";
$apellido3="Guerra Acuña";

$sueldo1=0;
$sueldo2=0;
$sueldo3=0;

$total=$sueldo1+$sueldo2+$sueldo3;

echo $N,"<br>","<br>";
echo "Nombre Empleado :","<br>",$nombre1," ",$apellido1,"<br>";
echo "Sueldo: $", $sueldo1," ","Millones De Pesos","<br>";
echo "Nombre Empleado :","<br>",$nombre2," ",$apellido2,"<br>";
echo "Sueldo: $", $sueldo2," ","Millones De Pesos","<br>";
echo "Nombre Empleado :","<br>",$nombre3," ",$apellido3,"<br>";
echo "Sueldo: $", $sueldo3," ","Millones De Pesos","<br>";
if ($sueldo1>0 && $sueldo2>0 && $sueldo3>0 && $total<20.000000) {
	echo "Total Nomina Mensual Es:$ $total","Pesos Colombianos";
	echo "<h2>AVISO:</h2>","<br>"," Valor Inferior A 20.000000 Millones De Pesos ";
}
else{
	echo "No Se Debe Pagar Nada";
}
?>