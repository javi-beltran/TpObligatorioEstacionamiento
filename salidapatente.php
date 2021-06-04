<?php

/*var_dump($_POST);
echo "<br>";
var_dump($_GET);

$patente = $_POST['Ipatente'];

echo $patente;*/
include_once "funciones.php";
$patente = $_POST['Ipatente'];
//echo $patente;
//var_dump($_POST);
$arrayspatente=Leerarchivos("estacionar.txt");
//var_dump($arrayspatente);
$ingresado="NO";
foreach ($arrayspatente as $datos) {
	if ($datos[0]==$patente) {
		//var_dump($datos[0]);
		
		$ingresado="Si";
		$fechaEntrada=$datos[1];
		$fechaSalida=date("Y-m-d H:i:s");
		$precio=calcularTotales($fechaEntrada,$fechaSalida);
		mostrarTicket($patente,$fechaEntrada,$fechaSalida,$precio);
		guardar("cobrados.txt","\n".$datos[0]."->".quitarultimocaracter($datos[1])."->".$fechaSalida."->".$precio);//guardar cobrados
		break;
	}
}
if ($ingresado=="NO") {
	echo "La patente NO fue encontrada";
}else
{
	crearArchivo("estacionar.txt");
	foreach ($arrayspatente as $datos) {
		if ($datos[0]!=$patente) 
		{
			$renglon="\n".$datos[0]."->".quitarultimocaracter($datos[1]);
			guardar("estacionar.txt",$renglon);
		}
	}
}


//function DiferenciaDeFechas($hora1 , $ahora2 , $formato = '%i' ) ;
 ?>


 <html>
	<head>
		<title>Salida patente</title>
	</head>
	<body>
	<a href="estacionar.php">
   <input type="button" value="Index" />
</a>

	</body>
</html>