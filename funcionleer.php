<?php
//$separador="->";
	function LeerArchivo($ELTXT,$separador) {

		$matrizDeRetorno=array();
		$archivo=fopen($ELTXT,"r");
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