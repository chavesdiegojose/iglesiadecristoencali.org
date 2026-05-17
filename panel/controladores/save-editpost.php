<?php
    error_reporting(0);
    //session_start();
    header('Content-type: application/json');
    //incluyo conexion
    include_once("../../config-php.php");

    //data
    $inputtitulo = $_POST["inputtitulo"];
    $des = $_POST["inputdes"];
    $id_post = $_POST["id_post"];
    
    $subio_imagen = null;
    $subio_doc = null;

    $fecha = new DateTime();
    $fecha = $fecha->format('Y-m-d H:i:s');

    if ($_FILES['inputfile']['name'] != null) {
        
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
    
        $sql = "UPDATE post SET titulo='$inputtitulo', descr='$des', imagen='$dest_path', fecha='$fecha' WHERE id_post='$id_post' ";
        $r = $conexion->query($sql);
        
        if($r===TRUE){
            echo json_encode( array( "r"=>true, "msj"=>"Registrado." ) );
        }else{
            echo json_encode( array( "r"=>false, "msj"=>"Error al registrar." ) );
        }
    
    } else{

            $sql = "UPDATE post SET titulo='$inputtitulo', descr='$des', fecha='$fecha' WHERE id_post='$id_post' ";
            $r = $conexion->query($sql);
            
            if($r===TRUE){
                echo json_encode( array( "r"=>true, "msj"=>"Registrado." ) );
            }else{
                echo json_encode( array( "r"=>false, "msj"=>"Error al registrar." ) );
            }

    }


?>
