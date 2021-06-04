<?php

	function DiferenciaDeFechas($fecha1 , $fecha2 , $formato = '%i' ) 
	{
		//AAAA-MM-DD
	    $fechaHora1 = date_create($fecha1);
	    $fechaHora2 = date_create($fecha2);
	    $diferencia = date_diff($fechaHora1, $fechaHora2);
	    //return 1000;
	    return $diferencia->format($formato);
	}

	function guardar($nombrearchivo,$registro){

		$fichero=fopen($nombrearchivo, "a");
		fwrite($fichero, $registro);
		fclose($fichero);
	}
	date_default_timezone_set("America/Argentina/Buenos_Aires");

	function Leerarchivos($nombrearchivo)
	{
		$arraysretorno=array();
		$fichero=fopen($nombrearchivo, "r");
		while (!feof($fichero)) 
		{
			$registro=fgets($fichero);
			$nuevorenglon=explode("->", $registro);
			if (isset($nuevorenglon[1])) 
			{
				$arraysretorno[]=$nuevorenglon;

			}
			
		}
		fclose($fichero);
		return $arraysretorno;
	}

	function calcularTotales($variable,$variable2)
	{
		$dias= DiferenciaDeFechas($variable,$variable2,"%d");
		$horas= DiferenciaDeFechas($variable,$variable2,"%H");
		$minutos= DiferenciaDeFechas($variable,$variable2,"%i");
		$totalDia=$dias*2000;
		$totalHoras=$horas*100;
		$totalMinutos=$minutos*5;

		$total= $totalDia + $totalHoras + $totalMinutos;
		return $total;
	}

	function mostrarTicket($nropantente,$fechaE,$fechaS,$ptotal)
	{
		echo "Ticket <br>";
		echo "Nro pantente:". $nropantente." <br>";
		echo "Ingreso:". $fechaE." <br>";
		echo "Egreso:". $fechaS." <br>";
		echo "Ud se quedo ".DiferenciaDeFechas($fechaE,$fechaS,"%d dias %h horas %i minutos"). " <br>";
		echo "Total:". $ptotal;

	}
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