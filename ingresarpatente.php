<?php

/*var_dump($_POST);
echo "<br>";
var_dump($_GET);

$patente = $_POST['Ipatente'];

echo $patente;*/
	include_once ("funciones.php");
	$patente = $_POST['Ipatente'];
	if ($patente!=""){
		$ahora1=date("Y-m-d H:i:s");
		$renglon="\n".$patente."->".$ahora1."->A";
		guardar("estacionar.txt",$renglon);
		echo "Patente ingresado con exito";
		echo "<br>";
	}else
	{
	 	echo "Llena la patente POR FAVOR";

	}
?>
 <html>
	<head>
		<title>Ingreso patente</title>
		<?php
		include_once"titulo.php";
		?>
	</head>
	<body>
	<a href="estacionar.php">
   <input type="button" value="Index" />
</a>

	</body>
</html>