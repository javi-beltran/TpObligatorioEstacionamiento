<?php
//$separador="->";
	function LeerArchivo($NomArchivo,$separador) {

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

?>