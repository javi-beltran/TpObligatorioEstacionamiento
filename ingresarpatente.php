<?php

/*var_dump($_POST);
echo "<br>";
var_dump($_GET);

$patente = $_POST['Ipatente'];

echo $patente;*/

	include_once ("funciones.php");
	include_once "estacionamientosalidas.php";
	include_once  "estacionamiento.php";
	
	
	$patente = $_POST['Ipatente'];
	$combo = $_POST['Icombo'];

	
	//var_dump($_POST);
    
	/*foreach ($combo as $comboselec) {
		# code...
	}*/
	//echo $combo . "<br>";
	if ($patente!=""){
		$ahora1=date("Y-m-d H:i:s");
		$renglon="\n".$patente."->".$ahora1."->".$combo."->A";
		guardar("estacionar.txt",$renglon);
		echo "Patente ingresado con exito";
		echo "<br>";
		include_once  "generarAutocompletar.php";
	}else
	{
	 	//echo "Llena la patente POR FAVOR";
	 	?>
				<a href="estacionar.php" >
   		   			<img src="404PATENTE.png">
				</a>

				<BR>
			<?php

	}
	/*for ($i=0;$i<count($combo);$i++) 
      { 
      	echo "<br> Cerveza " . $i . ": " . $combo[$i]; 
      	// $i . ": " . $combo[$i]; 
      }*/
estacionamiento::CreartablaEstacionados();

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