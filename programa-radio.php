<?php
include_once("config-php.php");
$sql = "SELECT * FROM post WHERE id_post = $_GET[id_post]"; $r = $conexion->query($sql); $sql=$r->fetch_assoc();
$sql_items = "SELECT * FROM item WHERE id_post = $_GET[id_post] ORDER BY `item`.`id_item` ASC"; $r_items = $conexion->query($sql_items);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programas de Radio</title>
    <link rel="icon" type="image/jpg" href="img/favicon.png"/>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        .style-card{
            padding: 1em;
            text-align: center;
        }
        .posts-ultimos .col{
            margin-bottom: 1em;
        }
        @media (max-width: 1200px){
            .imagen-section{
                margin-bottom:-150px !important;
            }
            #img-logo-iglesia{
                display: none;
            }
            #img-logo-iglesia-top{
                display: block !important;
            }
        }
      @media (max-width: 700px){
        .card-body h5{
            font-size:1.1em !important;
        }
        .card-body p{
            font-size:1.1em !important;
        }
        .imagen-section{
            margin-bottom:-40px !important;
        }
        .title-card-radio{
            font-size: 1.8em !important; margin-top: 0px !important;
        }
        .text-info-radio{
            font-size:1em !important;
        }
        .texto-descripcion{
            font-size: 1.2em !important;
        }
        #date-post{
          text-align: right !important;
          position: relative !important;
          bottom: 0em !important;
          left:0em !important;
        }
      }

    </style>

</head>
<body>

<!--menu -->
<?php include_once("menu.php");

$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getBrowser($user_agent){

if(strpos($user_agent, 'MSIE') !== FALSE)
   return 'Internet explorer';
 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
   return 'Microsoft Edge';
 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
    return 'Internet explorer';
 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
   return "Opera Mini";
 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
   return "Opera";
 elseif(strpos($user_agent, 'Firefox') !== FALSE)
   return 'Mozilla Firefox';
 elseif(strpos($user_agent, 'Chrome') !== FALSE)
   return 'Google Chrome';
 elseif(strpos($user_agent, 'Safari') !== FALSE)
   return "Safari";
 else
   return 'No hemos podido detectar su navegador';

}
$navegador = getBrowser($user_agent);

?>


<!-- Programas de Radio -->
<div class="section-ultimos" style="">

<div class="card text-white imagen-section" style="margin-bottom:-250px;">
  <img src="img/radio4.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h1 class="card-title title-card-radio Oswald-Regular text-black" style="margin-top: 50px;font-size: 4em;margin-left: 20px; text-align: center;"><?php echo $sql["titulo"]; ?></h1>
  </div>
</div>


<div class="card" style="max-width: 100%; margin-left: 1.5em; margin-right: 1.5em;">
  <div class="row g-0" style="padding: 1.5em;">
    
    <div class="col-md-6">
      
        <p class="card-text Oswald-Light texto-descripcion" style="font-size: 1.5em;"> <?php echo $sql["descr"]; ?> </p>

                          <?php
                            while( $sql_items=$r_items->fetch_assoc() ){

                                if($sql_items["archivo"] != null && $sql_items["archivo"] != "" && (strpos($sql_items["archivo"], ".mp3" ) !== false || strpos($sql_items["archivo"], ".MP3" ) !== false) ){

                                    if($navegador == "Safari"){
                                        $viewinfo = '<br><audio src="panel/mini-upload-form/'.$sql_items["archivo"].'" style="width: 75%; height: 35px;" type="audio/mp3" controls>Your browser does not support the <code>audio</code> element.</audio> &nbsp; &nbsp; &nbsp; <a href="panel/mini-upload-form/'.$sql_items["archivo"].'" download><i class="bi bi-cloud-arrow-down-fill" style="font-size: 2em;"></i></a> ';
                                    }else{
                                        $viewinfo = '<br><audio src="panel/mini-upload-form/'.$sql_items["archivo"].'" style="width: 100%; height: 35px;" type="audio/mp3" controls>Your browser does not support the <code>audio</code> element.</audio>';
                                    }
                            
                                }else if ( $sql_items["archivo"] != null && $sql_items["archivo"] != "" && strpos($sql_items["archivo"], ".pdf" ) !== false ){

                                    $viewinfo = "<a target='_blanck' style='text-decoration: none;' class='mute' href='panel/mini-upload-form/".$sql_items['archivo']."'>Ver archivo PDF <img src='img/pdf1.png' alt='Ir a link' style='width: 24px;'></a>";
                                
                                }else{
                                    $viewinfo = "<a target='_blanck' style='text-decoration: none;' href=".$sql_items['link'].">Accede pulsando aquí <img src='img/red-mundial.png' alt='Ir a link' style='width: 24px;'></a>";
                                }

                            
                        ?>

      <div class="card-body">
        <h5 class="card-title Oswald-Regular" style="font-size: 1.5em;"><?php echo $sql_items["titulo"]; ?></h5>
        <p class="card-text Oswald-Light" style="font-size: 1.5em;"><?php echo $viewinfo; ?></p>
      </div>

                        <?php
                            }
                            
                            
                            if (mysqli_num_rows($r_items)<1) {
                        ?>
                            <div class="list-group-item list-group-item-action">
                                <div class="Oswald-Regular justify-content-between text-center" style="font-size: 1.5em;">
                                    No hay contenido asociado a esta publicación.
                                </div>
                            </div>
                        <?php
                            }
                        
                        ?>
                        <p id="date-post" class="card-text Oswald-Light" style="bottom: 3em; position: absolute;left: 40%;"><small class="text-muted"><?php $time = strtotime($sql["fecha"]); echo date("d-m-Y", $time); ?></small></p>

    </div>

    <div class="col-md-6">
      <img src="<?php echo "panel/controladores/".$sql["imagen"]; ?>" class="img-fluid rounded-start" alt="...">
    </div>

  </div>
</div>



</div>

<?php include_once("info-radio.php"); ?>
<!-- Bootstrap Bundle with Popper -->
<script src="js/bootstrap.bundle.min.js"></script>
<?php include_once("footer.php"); ?>
</body>
</html>