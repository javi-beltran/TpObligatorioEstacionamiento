<?php

/*var_dump($_POST);
echo "<br>";
var_dump($_GET);

$patente = $_POST['Ipatente'];

echo $patente;*/

$patente = $_POST['Ipatente'];
date_default_timezone_set("America/Argentina/Buenos_Aires");
if ($patente!=""){
$ahora=date("Y-m-d H:i:s");
$renglon="Patente". $patente ." -> ". $ahora . "\n";
$archivo=fopen("estacionar.txt", "a");
fwrite($archivo, $renglon);
fclose($archivo);
}
else
{
	echo "Llena el con la patente campeon";
}


?>
