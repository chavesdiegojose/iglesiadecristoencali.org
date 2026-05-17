<?php
    error_reporting(0);
    //session_start();
    header('Content-type: application/json');
    //incluyo conexion
    include_once("../../config-php.php");

    //data
    $id_item = $_POST["id_item"];
    
        /*$fecha = new DateTime();
        $fecha = $fecha->format('Y-m-d H:i:s');*/
        $sql = "DELETE FROM item WHERE id_item = '$id_item';";
        
        $r = $conexion->query($sql);
        if($r===TRUE){
            echo json_encode( array( "r"=>true, "msj"=>"Eliminado." ) );
        }else{
            //echo json_encode( array( "r"=>$conexion) );
            echo json_encode( array( "r"=>false, "msj"=>"Error al eliminar." ) );
        }

?>
