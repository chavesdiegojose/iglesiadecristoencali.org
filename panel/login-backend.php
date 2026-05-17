<?php
    //error_reporting(0);
    session_start();
    header('Content-type: application/json');
    //incluyo conexion
    include_once("../config-php.php");

    //hacer login
    $usuario = $_POST["usuario"];
    $pass = md5($_POST["pass"]);

    $sql = "SELECT * FROM usuarios WHERE name_user='$usuario' AND pass='$pass' ";

    $r = $conexion->query($sql);

    if($r->num_rows==1){

        $user = $r->fetch_assoc();
        echo json_encode( array( "r"=>true, "usuario"=>$user ) );

    }else{
        echo json_encode( array( "r"=>false, "msj"=>"Usuario y/o contraseñas incorrectos" ) );
    }


?>
