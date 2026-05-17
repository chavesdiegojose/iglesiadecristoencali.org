<?php
    error_reporting(0);
    //session_start();
    header('Content-type: application/json');
    //incluyo conexion
    include_once("../../config-php.php");

    //data
    $inputtitulo = $_POST["inputtitulolink"];
    $link = $_POST["inputlink"];
    $id_post = $_POST["id_post"];
    //echo json_encode( array( "inputtitulo"=>$inputtitulo, "link"=>$link, "id_post"=>$id_post ) );
        $fecha = new DateTime();
        $fecha = $fecha->format('Y-m-d H:i:s');
        //$sql = "INSERT INTO item (id_post, titulo, archivo, link, fecha) VALUES ($id_post, '$inputtitulo', ' ', '$link', $fecha) ";
        $sql = "INSERT INTO `item` (`id_item`, `id_post`, `titulo`, `archivo`, `link`, `fecha`) VALUES (NULL, '$id_post', '$inputtitulo', NULL, '$link', '$fecha')";
        
        $r = $conexion->query($sql);
        if($r===TRUE){
            //echo json_encode( array( "r"=>$conexion) );
            echo json_encode( array( "r"=>true, "msj"=>"Registrado." ) );
        }else{
            //echo json_encode( array( "r"=>$conexion) );
            echo json_encode( array( "r"=>false, "msj"=>"Error al registrar." ) );
        }

?>
