<?php
    error_reporting(0);
    //session_start();
    header('Content-type: application/json');
    //incluyo conexion
    include_once("../../config-php.php");

    //data
    $inputtitulo = $_POST["inputtitulo"];
    $des = $_POST["inputdes"];
    
    $subio_imagen = null;
    $subio_doc = null;
    

    //carga de imagen ------------------------------------------------------------------------
    $uploadFileDir = 'uploads/img/';
    $nombre_archivo = $_FILES['inputfile']['name'];
    $fileTmpPath = $_FILES['inputfile']['tmp_name'];

    $fileNameCmps = explode(".", $nombre_archivo);
    $fileExtension = strtolower(end($fileNameCmps));
    //$newFileName = md5(time().$nombre_archivo).'.'.$fileExtension;
    $newFileName = md5(time().$nombre_archivo).$nombre_archivo;
    $dest_path = $uploadFileDir.$newFileName;
    
    if( $_FILES['inputfile']['name'] != null ){

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $subio_imagen = true;
        }else{
            echo json_encode( array( "r"=>false, "msj"=>"Error al cargar imagen." ) );
            return false;
        }
    }


    # continua si no hay error de subida...
    
        $fecha = new DateTime();
        $fecha = $fecha->format('Y-m-d H:i:s');

        $sql = "INSERT INTO post (titulo, descr, imagen, type_post, fecha) VALUES ('$inputtitulo', '$des', '$dest_path', '', '$fecha') ";
        $r = $conexion->query($sql);
        if($r===TRUE){
            echo json_encode( array( "r"=>true, "msj"=>"Registrado." ) );
        }else{
            echo json_encode( array( "r"=>false, "msj"=>"Error al registrar." ) );
        }

    /*}else{
        echo json_encode( array( "r"=>false, "msj"=>"Could not register post. Not files" ) );
        return false;
    }*/


?>
