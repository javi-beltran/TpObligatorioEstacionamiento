
<?php 
/*var_dump($_GET);

echo "<br>";

var_dump($_POST);*/
if (isset($_POST['correo'])) 
{
	$mail=$_POST['correo'];
	$clave=$_POST['clave'];
}else
{
	die();
}

/*$mail=$_POST['correo'];
$clave=$_POST['clave'];*/
$ListaDeUsuarios= array();




$archivo=fopen("usuarios1.txt", "r");
while (!feof($archivo)) {
	//echo "Reglon: ".fgets($archivo)."<br>";
	//fgetc(handle) ES POR CATACTER
	$Reglon=fgets($archivo);
	$datosDeUnUsuario=explode("=>", $Reglon);
	if (isset($datosDeUnUsuario[1]))	//[0]!="") 
	{
		$ListaDeUsuarios[]=$datosDeUnUsuario;
	}
//	var_dump($datosDeUnUsuario);
//	echo "<br>";
	/*if ($datosDeUnUsuario[0]==$mail) 
	{
		if ($datosDeUnUsuario[1]==$clave) 
		{
		 	echo "Bienvenido";
		}
	}*/
}
		fclose($archivo);
	//var_dump($ListaDeUsuarios);

		$ingreso="No ingreso";
		foreach ($ListaDeUsuarios as $datos) 
		{
			if ($datos[0]==$mail) 
		{
		if ($datos[1]==$clave) 
		{
		 	echo "Bienvenido";
		 	$ingreso="Ingreso";
		 	break;
		}
		}
		
		}
		if ($ingreso=="No ingreso") {
		 	echo "Datos erroneos";
		}
 ?>