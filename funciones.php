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
		/*public static */ function  guardarlistado ($arrayName)
	{
		$archivo=fopen("estacionar.txt", "a");
		foreach ($arrayName as $auto) 
		{
			if(isset(auto[1]))
			{
				fwrite($archivo,$auto[0]."-".$auto[1]."\n");
			}
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
	}
	

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
	$monto=5;
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
	$total=$minutos*$monto;
	return $total;
	}

	function mostrarTicket($nropantente,$fechaE,$fechaS,$ptotal)
	{
		echo "Ticket <br>";
		echo "Nro pantente:". $nropantente." <br>";
		echo "Ingreso:". $fechaE."<br>";
		echo "Egreso:". $fechaS."<br>";
		echo "Ud se quedo ".DiferenciaDeFechas($fechaE,$fechaS,"%d dias %h horas %i minutos"). " <br>";
		echo "Total:". $ptotal."<br>";
		echo "Gracias q tenga un buen dia";


	}
	//fijar hacer un if
	function quitarultimocaracter($variable)
	{
		$retorno=substr($variable, 0,19);
		return $retorno;
	}

	function crearArchivo($nombrearchivo)
	{
		$fichero=fopen($nombrearchivo, "w");
		fwrite($fichero,"");
		fclose($fichero);
	}
?>