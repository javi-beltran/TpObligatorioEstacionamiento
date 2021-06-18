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

		/*public static function retornarListadoAutocomplit() {
		$arrayPatentes = leer();
		$listadoRetorno="";
		foreach($arrayPatentes as $datos){
			$listadoRetorno.="\"$datos[0]\","; 
		}
		return $listadoRetorno;
	}*/

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
		$tablaHTML.="<th >";
		$tablaHTML.="Gama";
		$tablaHTML.="</th>";
		$tablaHTML.="</tr>";
		foreach($listado as $auto)
		{
			$tablaHTML.="<tr ALIGN=CENTER><td>$auto[0]</td ALIGN=CENTER><td>$auto[1]</td><td>$auto[2]</td></tr>";
		}

		$tablaHTML.="</table>";
		$tablaHTML.="</CENTER>";
		$archivo=fopen("tablaestacionados.php","w");
		fwrite($archivo,$tablaHTML);
		fclose($archivo);


	}


}


?>