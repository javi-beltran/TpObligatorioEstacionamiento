<?php

include_once "funcionleer.php";
class estacionamiento 
{
	public static function saludar(){
		echo "Se creo tablaestacionados.php";
	}

	public static function leer(){
		//$listaDeAutosLeida=array();
		$listaDeAutosLeida=LeerArchivo("estacionar.txt","->");
		return $listaDeAutosLeida;
	}
	public static function CreartablaEstacionados() {
		$listado=estacionamiento::leer();
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


	}

	public static function guardarlistado ($arrayName)
	{
		$archivo=fopen("estacionar.txt", "w");
		foreach ($arrayName as $auto) 
		{
			if(isset(auto[1]))
			{
				fwrite($archivo,$auto[0]."-".$auto[1]."\n");
			}
		}
		fclose($archivo);
	}

}


?>