<?php

include_once("../../config-php.php");
$inputtitulo = $_POST["inputtitulofile"];
$id_post = $_POST["id_post"];
$archivo = "uploads/".$_FILES['upl']['name'];

// A list of permitted file extensions $allowed = array('png', 'jpg', 'gif','mp3');
$allowed = array('mp3', 'pdf');


if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name'])){
		
		$fecha = new DateTime(); $fecha = $fecha->format('Y-m-d H:i:s');
		$sql = "INSERT INTO `item` (`id_item`, `id_post`, `titulo`, `archivo`, `link`, `fecha`) VALUES (NULL, '$id_post', '$inputtitulo', '$archivo', NULL, '$fecha')";
		$r = $conexion->query($sql);
		if($r===TRUE){
			echo '{"status":"success"}'; exit;
		}else{
			echo '{"status":"error"}'; exit;
		}
	}
}

echo '{"status":"error"}';exit;