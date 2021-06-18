<?php
include_once "estacionamiento.php";


//$listado=estacionamiento::leer();
//
function retornarListadoAutocomplit() {
		$arrayPatentes = estacionamiento::leer();
		$listadoRetorno="";
		foreach($arrayPatentes as $datos){
			$listadoRetorno.="\"$datos[0]\","; 
		}
		return $listadoRetorno;
	}
$ListadoPatentes=retornarListadoAutocomplit();

//$ListadoPatentes="\"aaa123\" , \"bbb102\", \"fff555\", \"mmm444\"";
$textoDelArchivoJS="$(function(){
             
			  var patentes = [ 

			    	
			    $ListadoPatentes	



			  ];


			  
			  // setup autocomplete function pulling from patentes[] array
			  $('#autocomplete').autocomplete({
			    lookup: patentes,
			    onSelect: function (suggestion) {
			      var thehtml = '<strong>patente: </strong> ' + suggestion.value + ' <br> <strong>ingreso: </strong> ' + suggestion.data;
			      $('#outputcontent').html(thehtml);
			         $('#botonIngreso').css('display','none');
      						console.log('aca llego');
			    }
			  });
			  

			});";
$archivoJS=fopen("js/funcionAutoCompletar.js","w");
fwrite($archivoJS, $textoDelArchivoJS);
fclose($archivoJS);
?>