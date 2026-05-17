<?php
   error_reporting(0);
   //session_start();
   header('Content-type: application/json');
   //incluyo conexion
   include_once("../../config-php.php");
   $sql = "SELECT * FROM post ORDER BY id_post desc";

   $r = $conexion->query($sql);
    if($r->num_rows>0){

    while($sql=$r->fetch_assoc()){
        $sqlArray[]=$sql;    
    }

    echo json_encode( array( "r"=>true, "posts"=>$sqlArray ) );

    }else{
        echo json_encode( array( "r"=>false, "msj"=>"No hay publicaciones disponibles" ) );
    }



?>
