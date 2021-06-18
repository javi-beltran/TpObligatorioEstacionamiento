<?php

include_once "funcionleer.php";
class estacionamientosalidas 
{
	public static function saludar(){
		echo "hola";
	}

	public static function leercobrados(){
		//$listaDeAutosLeida=array();
		$listaDeAutosLeida=LeerArchivo("cobrados.txt","->");
		return $listaDeAutosLeida;
	}
	public static function leerestacionados(){
		//$listaDeAutosLeida=array();
		$listaDeAutosLeida=LeerArchivo("estacionar.txt","->");
		return $listaDeAutosLeida;
	}
	public static function CrearTablaEstacionados2() {
		$listado=estacionamientosalidas::leercobrados();
		$tablaHTML="<CENTER>";
		$tablaHTML="<table border=1>";
		$tablaHTML.="<th>";
		$tablaHTML.="patente";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="Ingreso";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="Salida";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="Total";
		$tablaHTML.="</th>";
		foreach($listado as $auto)
		{
			$tablaHTML.="<tr><td>$auto[0]</td><td>$auto[1]</td><td>$auto[2]</td><td>$auto[3]</td></tr>";
		}

		$tablaHTML.="</table>";
		$tablaHTML.="</CENTER>";
		$archivo=fopen("TablaEstacionados2.php","w");
		fwrite($archivo,$tablaHTML);
		fclose($archivo);


	}

	public static function guardarlistado ($arrayName)
	{
		$archivo=fopen("cobrados.txt", "w");
		foreach ($arrayName as $auto) 
		{
			if(isset(auto[1]))
			{
				fwrite($archivo,$auto[0]."-".$auto[1]."\n");
			}
		}
		fclose($archivo);
	}
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
}