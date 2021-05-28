
<?php 
/*var_dump($_GET);

echo "<br>";

var_dump($_POST);
*/
$mail=$_POST['correo'];

$clave=$_POST['clave'];

$copiaclave=$_POST['copiaclave'];
//echo "su mail es ".$mail. " - su clave es ".$clave . " - su copia clave es ".$copiaclave;

if ($clave==$copiaclave)
{
	date_default_timezone_set("America/Argentina/Buenos_Aires");
	//date_default_timezone_get(date);
	$ahora=date("Y-m-d H:i:s");
	$reglon="\n".$mail."=>".$clave."=>".$ahora;
	$archivos=fopen("usuarios1.txt", "a");
	fwrite($archivos, $reglon);
	fclose($archivos);
 }else
 {
 	echo "Error en clave";
 }

 
 ?>
