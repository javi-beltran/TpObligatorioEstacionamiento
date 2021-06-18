<html>
	<head>
		<title>Salida patente</title>
	</head>
	<body>
		<BR>
	<a href="estacionar.php" >
   		 <button type="button">VOLVER</button> 
	</a>
	
	<!--<!<?php
	/*foreach ($arrayspatente as $auto) 
{
	echo $auto[0]."<br>";
}*/
	//echo "$renglon";
	?>-->
	</body>
</html>
<?php
include_once "funciones.php";
include_once "estacionamientosalidas.php";
include_once  "estacionamiento.php";
//include_once "tablaTICKET.php";

//echo "<br>";
/*var_dump($_GET);

//$patente = $_POST['Ipatente'];

echo $patente;*/
$patente = $_POST['Ipatente'];

//$combo = $_POST['Icombo'];

//echo $patente." patente ingresada <br>";
//var_dump($_POST);

$arrayspatente=Leerarchivo("estacionar.txt","->");

//var_dump($arrayspatente);

$ingresado="NO";
foreach ($arrayspatente as $datos) {
	if ($datos[0]==$patente) {
		//var_dump($datos[0]);
		
		$ingresado="Si";
		$fechaEntrada=$datos[1];
		$combo = $datos[2];
		$fechaSalida=date("Y-m-d H:i:s");
		$precio=calcularTotales($fechaEntrada,$fechaSalida);
		
		
		//guardar("cobrados.txt",$datos[0]."->".$datos[1])."->".$fechaSalida."->".$precio."\n";//guardar los cobrados
		//guardar("cobrados.txt","\n".$datos[0]."->".quitarultimocaracter($datos[1])."->".$fechaSalida."->".$precio);//guardar los cobrados
			//$listaCobrado=array();
					
		
		
		
		guardarTICKECT($patente,$fechaEntrada,$fechaSalida,$precio);
		mostrarTicket($patente,$fechaEntrada,$fechaSalida,$precio);
		borrarEstacionados($patente, $fechaEntrada,$combo);
		estacionamiento::CreartablaEstacionados();
		echo "<br>";
		include_once "tablaTICKET.php";		
		break;
	}else
	{
		
			//echo "<br><h1>PATENTE NO VALIDA <br></h1>";
			
			//echo '<img src="404PATENTE.png">';
			/*?>
	
   		   			<img src="404PATENTE.png">
	
			<?php*/
			echo '<img src="404PATENTE.png">';			
			echo "<br>";
			die();
	}
}



//guardarlistado($arrayspatente,"estacionados.txt"); 

/*function CreartablaEstacionados() {
		$listado=estacionamientosalidas::leerestacionados();
		$tablaHTML="<CENTER>";
		$tablaHTML.="<table BORDER = 1 WIDTH=100%>";
		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<th >";
		$tablaHTML.="patente";
		$tablaHTML.="</th>";
		$tablaHTML.="<th >";
		$tablaHTML.="Ingreso";
		$tablaHTML.="</th>";
		$tablaHTML.="</tr>";
		foreach($listado as $auto)
		{
			$tablaHTML.="<tr ALIGN=CENTER><td>$auto[0]</td ALIGN=CENTER><td>$auto[1]</td></tr>";
		}

		$tablaHTML.="</table>";
		$tablaHTML.="</CENTER>";
		$archivo=fopen("tablaestacionados.php","w");
		fwrite($archivo,$tablaHTML);
		fclose($archivo);
	}*/
	
//echo "Borrando la palabra";

   /*function actualizaEstacionados($patente, $fechaEntrada)
    {
        $renglon="\n".$patente."->".$fechaEntrada."->A";
        $arrayspatente = str_replace($renglon, '', $arrayspatente);
        $archivo=fopen("estacionar.txt", "a");
		fwrite($renglon);
		fclose($archivo);
    }*/
    //$renglon="\n".$patente."->".$fechaEntrada."->A";
    //$datos0="$patente";
    //$datos1="fechaEntrada";
//----------------------------------------------------------
	/*$textos = array("Hola", "Chau", "Bien", "Mal");
 
echo "Borrando la palabra 'Chau' dentro del array:<br>";
if (($clave = array_search("Chau", $textos)) !== false) {
    unset($textos[$clave]);
    print_r($textos);
}*/


	/*--esta bien 
		//$listaDeAutosLeida=array();
		$estacionar=array();
		$estacionar=LeerArchivo("estacionar.txt","->");
		return $estacionar;

		 guardarlistado ($estacionar);
	*/
//function DiferenciaDeFechas($hora1 , $ahora2 , $formato = '%i' ) ;
 ?>


 