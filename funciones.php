<?php

	function DiferenciaDeFechas($fecha1 , $fecha2 , $formato = '%i' ) 
	{
		//AAAA-MM-DD
		// %i son los minutos
	    $fechaHora1 = date_create($fecha1);
	    $fechaHora2 = date_create($fecha2);
	    $diferencia = date_diff($fechaHora1, $fechaHora2);
	    //return 1000;
	    return $diferencia->format($formato);
	}
	 function guardar($nombrearchivo,$registro)
	{

		$fichero=fopen($nombrearchivo,"a");
		fwrite($fichero, $registro);
		fclose($fichero);
	}

//GUARDAR ARRAYS SIN PROBLEMAS DE RENGLON
		/*public static */ 	function  guardarlistado($arrayName,$eltxt)
	{
		$archivo=fopen($eltxt, "a");
		foreach ($arrayName as $auto) 
		{
			//if(isset(auto[1]))
			//{
				fwrite($archivo,$auto[0]."->".$auto[1]."->A"."\n");
			//}
		}
		fclose($archivo);
	}
		/*public static*/  function guardarTICKECT($Cpatente,$CfechaEntrada,$CfechaSalida,$Cprecio)
	{
		$archivo=fopen("cobrados.txt", "a");
		fwrite($archivo,$Cpatente."->".$CfechaEntrada."->".$CfechaSalida."->".$Cprecio."\n");
		fclose($archivo);
	}
			//guardar("cobrados.txt",$datos[0]."->".$datos[1])."->".$fechaSalida."->".$precio."\n";//guardar los cobrados

	
	date_default_timezone_set("America/Argentina/Buenos_Aires");
	/*
	function Leerarchivo($NomArchivo,$separador) {

		$matrizDeRetorno=array();
		$archivo=fopen($NomArchivo,"r");
		while (!feof($archivo)) {
			$renglon=fgets($archivo);
			$registroActual=explode($separador, $renglon);
			if(isset($registroActual[1])){
				$matrizDeRetorno[]=$registroActual;
			}
		}
		fclose($archivo);
		return $matrizDeRetorno;
	}*/
	

	function calcularTotales($variable,$variable2)
	{
		$minutos= DiferenciaDeFechas($variable,$variable2,"%i");
		$horas= DiferenciaDeFechas($variable,$variable2,"%h");
		$dias= DiferenciaDeFechas($variable,$variable2,"%d");
		$horas=$horas*60;
		$dias=$dias*24*60;
		$minutos=$minutos+$horas+$dias;
//preguntar si se puede hacer asi		
		/*$Todoeldia=$dias*$monto;//el dia entero
		$todaLahora=$horas*$monto;//la hora
		$SoloMinutos=$minutos*$monto;//por minuto*/
////preguntar si se puede hacer asi
				//sacar calculo horario

		if ($minutos < 40){//hasta cobro x minutos
	$monto=5.45;
	}else
	{
		if ($minutos > 40 && $minutos <479 ){ // cobro x horas

		$monto=3;
		}else
		{

			if ($minutos > 480){// es mayor a 8 horas y cobro el dia
				$monto=2;
			}
		}

	}
	if ($minutos == 0){//por si es 0 q cobre el minimo
	$minutos=1;
	}
	$total=$minutos*$monto;
	return round($total); //Redondea el precio round($total,1) .?
	}

	function mostrarTicket($nropantente,$fechaE,$fechaS,$ptotal)
	{
		/*echo "Ticket <br>";
		echo "Nro pantente:". $nropantente." <br>";
		echo "Ingreso:". $fechaE."<br>";
		echo "Egreso:". $fechaS."<br>";
		echo "Ud se quedo ".DiferenciaDeFechas($fechaE,$fechaS,"%d dias %h horas %i minutos"). " <br>";
		echo "Total:". $ptotal."<br>";
		echo "Gracias q tenga un buen dia  <br>";
		*/
		$tablaHTML="<CENTER>";
		$tablaHTML.="<table BORDER = 0 WIDTH=100%>";
		$tablaHTML.="<tr ALIGN=CENTER >";
		$tablaHTML.="<th colspan='2'>";
		$tablaHTML.="<h1>IMPRIMIENDO</h1>";
		$tablaHTML.="</th>";
		$tablaHTML.="</tr>";


		$tablaHTML.="<tr ALIGN=CENTER >";
		$tablaHTML.="<th colspan='2'>";
		$tablaHTML.="<img src='IMPRIMIENDO.gif'>";
		$tablaHTML.="</th>";
		$tablaHTML.="</tr>";

		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<th colspan='2'>";
		$tablaHTML.="<h2>Ticket</h2>";
		$tablaHTML.="</th>";
		$tablaHTML.="</tr>";

		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td colspan='2'>";
		$tablaHTML.="<h4>Patente</h4>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";
		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td colspan='2'>";
		$tablaHTML.="<h2>".$nropantente."</h2>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";

		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td >";
		$tablaHTML.="<h4>Ingreso</h4>";
		$tablaHTML.="</td>";
		$tablaHTML.="<td>";
		$tablaHTML.="<h4>Egreso</h4>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";


		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td >";
		$tablaHTML.="<h2>".$fechaE."</h2>";
		$tablaHTML.="</td>";
		$tablaHTML.="<td>";
		$tablaHTML.="<h2>".$fechaS."</h2>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";


		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td colspan='2'>";
		$tablaHTML.="<h2>".DiferenciaDeFechas($fechaE,$fechaS,"%d dias %h horas %i minutos"). "</h2>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";


		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td colspan='2'>";
		$tablaHTML.="<h4>Total</h4>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";
		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td colspan='2'>";
		$tablaHTML.="<h2>$".$ptotal."</h2>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";



		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td colspan='2'>";
		$tablaHTML.="<h1>Gracias por elegirnos</h1>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";


		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td colspan='2'>";
		$tablaHTML.="<h1>Cocheras Javi S.A</h1>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";
/*$tablaHTML="<!--/*foreach($listado as $auto)
		{
			rowspan="2"
			colspan="2"
			$tablaHTML="<tr ALIGN=CENTER>";$tablaHTML="<td>";$auto[0]$tablaHTML="</td ALIGN=CENTER>";$tablaHTML="<td>";$auto[1]$tablaHTML="</td>";$tablaHTML="<td>";$auto[2]$tablaHTML="</td>";$tablaHTML="</tr>";
		}*/

		$tablaHTML.="</table>";
		$tablaHTML.="</CENTER>";
		$archivo=fopen("tablaTICKET.php","w");
		fwrite($archivo,$tablaHTML);
		fclose($archivo);

	}


		/*$tablaHTML="<CENTER>";
		$tablaHTML.="<table BORDER =1WIDTH=100%>";
		$tablaHTML.="<tr ALIGN=CENTER >";
		$tablaHTML.="<th rowspan=2>";
		$tablaHTML.='<img src="IMPRIMIENDO.gif">';
		$tablaHTML.="</th>";
		$tablaHTML.="</tr>";

		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<th rowspan=2>";
		$tablaHTML.="<h1>Ticket</h1>";
		$tablaHTML.="</th>";
		$tablaHTML.="</tr>";

		$tablaHTML.="<tr ALIGN=CENTER>";
		$tablaHTML.="<td >";
		$tablaHTML.="<h3>Patente</h3>";
		$tablaHTML.="</td>";
		$tablaHTML.="<td>";
		$tablaHTML.="<h3>".$nropantente."</h3>";
		$tablaHTML.="</td>";
		$tablaHTML.="</tr>";
/*foreach($listado as $auto)
		{
			$tablaHTML.="<tr ALIGN=CENTER><td>$auto[0]</td ALIGN=CENTER><td>$auto[1]</td><td>$auto[2]</td></tr>";
		}

		$tablaHTML.="</table>";
		$tablaHTML.="</CENTER>";

		echo "$tablaHTML";
	}*/
	

	function crearArchivo($nombrearchivo)
	{
		$fichero=fopen($nombrearchivo, "a");
		fwrite($fichero,"");
		fclose($fichero);
	}

	function borrarEstacionados($patente, $fechaEntrada,$combobox)
    {
//        $renglon="\n".$patente."->".$fechaEntrada."->A";
    	$renglon="\n".$patente."->".$fechaEntrada."->".$combobox."->A";
        $arrayspatente = file_get_contents("estacionar.txt");
        $arrayspatente = str_replace($renglon, '', $arrayspatente);
        file_put_contents("estacionar.txt", $arrayspatente);
    }

    function CtrlShiftF5()
    {
    	header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
		//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header('Pragma: no-cache');
		//header( 'Location: TpObligatorioEstacionamiento/estacionar.php' );
    }
?>