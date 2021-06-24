<?php


//var_dump($_FILES);

	//para la imagen
	$nombre_imagen=$_FILES['imagen']['name'];
	$tipo_imagen=$_FILES['imagen']['type'];
	$tamano_imagen=$_FILES['imagen']['size'];

	//ruta destino
	$carpetaDestino='IMG/';

	move_uploaded_file($_FILES['imagen']['tmp_name'], $carpetaDestino.$nombre_imagen);

//	echo "$carpetaDestino "."$nombre_imagen";



?>