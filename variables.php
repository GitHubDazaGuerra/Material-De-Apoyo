<?php

$edad = 25;
$nombreUsuario ="Julio Cesar";
$apellidosUsuario ="Daza Guerra";
$sexo = true;
$dias = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');

echo "<h4> Mi nombre es: ","<br>", $nombreUsuario," ",$apellidosUsuario,"</h4>";
echo "<h4> Tengo:",$edad," ","años","<br>";
echo $sexo;
//condicional if= si, else= de lo contrario
if ($sexo==true) {
	$sexo="masculino";
}else{
	$sexo="femenino";
}
echo "<br>";
echo "genero:"," ",$sexo,"<br>";
echo "dia de nacimiento es:"," ",$dias[4],"<br>";
echo "variables de tipo areglo con propiedades","<br>";
$mesSemana= array('semana1'=>'lunes','semana1'=>'martes','semana2'=>'domingo');
echo "Esta es mi semana y dia de nacimiento....:$mesSemana[semana2]";
?>