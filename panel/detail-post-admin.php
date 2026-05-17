<?php
$sql = "SELECT * FROM post WHERE id_post = $_GET[idpost]"; $r = $conexion->query($sql); $sql=$r->fetch_assoc();
$sql_items = "SELECT * FROM item WHERE id_post = $_GET[idpost] ORDER BY `item`.`id_item` ASC"; $r_items = $conexion->query($sql_items);
?>


    <div class="container-fluid tm-container-content tm-mt-60">

        <div class="row mb-4">
            <h2 class="col-12"><strong><?php echo $sql["titulo"]; ?></strong> <a href="?op=editpost&idpost=<?php echo $_GET["idpost"]; ?>"> <i class="fas fa-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Publicación"></i> </a> </h2>

        <div class="row tm-mb-90">            

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <!-- <p class="mb-4">
                        <?php $time = strtotime($sql["fecha"]); echo date("d-m-Y", $time); ?>
                    </p>                  -->
                    <div class="mb-4 d-flex flex-wrap">
                        <div class="mr-4 mb-2 tm-text-gray-dark">
                            <?php echo $sql["descr"]; ?>
                        </div>
                    </div>

                    <div class="list-group">
                    
                        <?php
                            while( $sql_items=$r_items->fetch_assoc() ){

                                if($sql_items["archivo"] != null && $sql_items["archivo"] != "" && (strpos($sql_items["archivo"], ".mp3" ) !== false || strpos($sql_items["archivo"], ".MP3" ) !== false) ){

                                        $viewinfo = '<br><audio src="mini-upload-form/'.$sql_items["archivo"].'" type="audio/mp3" style="width:85%;height:35px;" class="Oswald-Light" controls>Your browser does not support the <code>audio</code> element.</audio>

                                        <a href="#" class="delete_item delete_item_'.$sql_items["id_item"].'" id_item="'.$sql_items["id_item"].'">
                                        <i class="fas fa-backspace" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar" style="color: #cf3636;float: right;margin-top: 5px;font-size: 1.5em;"></i>
                                        </a> ';

                                
                                }else if ( $sql_items["archivo"] != null && $sql_items["archivo"] != "" && strpos($sql_items["archivo"], ".pdf" ) !== false ){

                                    $viewinfo = "<a target='_blanck' class='mute' href='mini-upload-form/".$sql_items['archivo']."'>Ver Documento <img src='../img/pdf1.png' alt='Ir a link' style='width: 24px;'></a>
                                    
                                    <a href='#' class='delete_item delete_item_".$sql_items["id_item"]."' id_item='".$sql_items["id_item"]."'>
                                    <i class='fas fa-backspace' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar' style='    color: #cf3636;float: right;margin-top: 5px;font-size: 1.5em;'></i>
                                    </a>";


                                }else{

                                    $viewinfo = "<a class='mute' target='_blanck' href=".$sql_items['link'].">Acceder <img src='../img/red-mundial.png' alt='Ir a link' style='width: 24px;'></a>
                                    
                                    <a href='#' class='delete_item delete_item_".$sql_items["id_item"]."' id_item='".$sql_items["id_item"]."'>
                                    <i class='fas fa-backspace' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar' style='    color: #cf3636;float: right;margin-top: 5px;font-size: 1.5em;'></i>
                                    </a> ";

                                }
                                
                            
                        ?>

                            <div href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?php echo $sql_items["titulo"]; ?></h5>
                                    <small><?php $time = strtotime($sql_items["fecha"]); echo date("d-m-Y", $time); ?></small>
                                </div> 
                                <p class="mb-1">
                                    <?php echo $viewinfo; ?>
                                </p>
                                <!-- <small>And some small print.</small> -->
                            </div>
                        
                        <?php
                            }

                            if (mysqli_num_rows($r_items)<1) {
                        ?>
                            <div class="list-group-item list-group-item-action">
                                <div class=" justify-content-between text-center">
                                    Aún no hay contenido asociado a esta publicación.
                                </div>
                            </div>
                        <?php
                            }
                        
                        ?>
                            
                    </div>

                    <!-- <div>
                        <h3 class="tm-text-gray-dark mb-3">Etiquetas</h3>
                        <a href="../#" class="tm-text-primary mr-4 mb-2 d-inline-block">Arrepentimiento</a>
                        <a href="../#" class="tm-text-primary mr-4 mb-2 d-inline-block">Perdón</a>
                        <a href="../#" class="tm-text-primary mr-4 mb-2 d-inline-block">Bautismo</a>
                        <a href="../#" class="tm-text-primary mr-4 mb-2 d-inline-block">Amor</a>
                        <a href="../#" class="tm-text-primary mr-4 mb-2 d-inline-block">Infierno</a>
                        <a href="../#" class="tm-text-primary mr-4 mb-2 d-inline-block">Cielo</a>
                    </div> -->

                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <img src="<?php echo "controladores/".$sql["imagen"]; ?>" alt="Imagen de la Publicación" class="img-fluid">
            </div>

        </div>

    </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne" style="background-color: #e7f4ff; padding: 0.4em; border: 1px solid #d0d0d0; color: #545454; text-transform: uppercase; font-size: 1.5em;">
                
                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="text-align: center;">
                    <strong>Agregar Archivo</strong>
                </div>

                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                    <div class="accordion-body">
                        
                        <form id="upload" method="post" action="mini-upload-form/upload.php" enctype="multipart/form-data">
                            <input type="hidden" name="id_post" value="<?php echo $_GET["idpost"]; ?>">

                            <div class="form-row">

                                <div class="form-group col-md-6" style="width: 100%;">
                                    <label for="inputtitulofile">Titulo</label>
                                    <input type="text" class="form-control" id="inputtitulofile" name="inputtitulofile" placeholder="Titulo">
                                </div>
                                <div class="form-group col-md-6" style="width: 100%;">
                                    
                                    <label for="inputdes">Archivo</label>
                                    <!-- <input type="text" class="form-control" id="inputdes" name="inputdes" placeholder="Archivo">-->
                                    <input type="file" name="upl" id="file_input" accept="audio/*, .pdf" disabled/>
                                    
                                    <ul id="ul-file" style="list-style:none;"><!-- The file uploads will be shown here --></ul>
                               
                                </div>

                            </div>
                            <!-- <button id="save_form_file" type="submit" class="btn btn-primary" style="">Guardar</button> -->
                        </form>

                    </div>

                    <br>
                    <div id="alert-newpost-file" class="alert alert-warning alert-dismissible fade show" role="alert" style="display:none;">
                        <span id="contenido-alert-newpost-file"></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                </div>
            </div>
            
            <br>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo" style="background-color: #e7f4ff; padding: 0.4em; border: 1px solid #d0d0d0; color:#545454; text-transform: uppercase; font-size: 1.5em;">
                
                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="text-align: center;">
                    <strong>Agregar Link</strong>
                </div>
                
                </h2>

                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                
                    <div class="accordion-body">

                        <form id="form_link">

                            <input type="hidden" name="id_post" value="<?php echo $_GET["idpost"]; ?>">

                            <div class="form-row">

                                <div class="form-group col-md-6" style="width: 100%;">
                                    <label for="inputtitulolink">Titulo</label>
                                    <input type="text" class="form-control" id="inputtitulolink" name="inputtitulolink" placeholder="Titulo">
                                </div>
                                <div class="form-group col-md-6" style="width: 100%;">
                                    <label for="inputlink">Link</label>
                                    <input type="text" class="form-control" id="inputlink" name="inputlink" placeholder="Link">
                                </div>

                            </div>
                            <button id="save_form_link" type="submit" class="btn btn-primary" style="">Guardar</button>
                        </form>
            
                    </div>

                    <br>
                    <div id="alert-newpost-link" class="alert alert-warning alert-dismissible fade show" role="alert" style="display:none">
                        <span id="contenido-alert-newpost-link"></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                </div>
            </div>


        </div>


    <!-- JavaScript Includes FILE -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script src="mini-upload-form/assets/js/jquery.knob.js"></script>
		<!-- jQuery File Upload Dependencies -->
		<script src="mini-upload-form/assets/js/jquery.ui.widget.js"></script>
		<script src="mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
		<script src="mini-upload-form/assets/js/jquery.fileupload.js"></script>
		<!-- Our main JS file -->

		<script src="mini-upload-form/assets/js/script.js?v=1.1"></script>

    <script type="text/javascript">

    function eliminaralert(){
        setTimeout(function() {
		// Declaramos la capa  mediante una clase para ocultarlo
        $("#alert-newpost-link").fadeOut(1500);
        $("#alert-newpost-file").fadeOut(1500);

        },3000);
    }

    //register form of file
    $("#jhjh").on("click", function(e){
        e.preventDefault();
        $('#save_form_file').addClass("disabled");
        $('#save_form_file').html("Cargando...");

        /*$("#contenido-alert-newpost").html("");
        $("#alert-newpost").fadeOut();*/
        
        //validaciones ----------------------------------------------------------------------
        var errr = false;
        var msj = false;
        
        /*if ( $("#inputlink").val() == "" ){
            errr = true;
            msj = "Ingresa una dirección web en: Link";
        }*/
        if ( $("#inputtitulofile").val() == "" ) {
            errr = true;
            msj = "Ingresa un titulo";
        }
        if (errr) {
            $('#save_form_file').html("Guardar");
            $('#save_form_file').removeClass("disabled");
            
            $("#alert-newpost-file").removeClass("alert-success");
            $("#alert-newpost-file").removeClass("alert-danger");
            $("#alert-newpost-file").addClass("alert-warning");
            $("#contenido-alert-newpost-file").html(msj); //console.log("error,"+msj);
            $("#alert-newpost-file").fadeIn();
            eliminaralert();
            return false;
            
        }
        //fin validaciones ----------------------------------------------------------------------

        var formData = new FormData(document.getElementById("form_file"));

        $.ajax({
            url: 'controladores/save-file.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data);

                $('#save_form_file').html("Guardar");
                $('#save_form_file').removeClass("disabled");

                if(data.msj == "Registrado."){
                    $("#form_file")[0].reset();
                    
                    //alert
                    $("#alert-newpost-file").removeClass("alert-warning");
                    $("#alert-newpost-file").removeClass("alert-danger");
                    $("#alert-newpost-file").addClass("alert-success");
                    $("#contenido-alert-newpost-file").html(data.msj);
                    $("#alert-newpost-file").fadeIn();
                    eliminaralert();

                }

            }, error: function(xhr, status, errorThrown) {
                console.log(xhr, status, errorThrown);
                $('#save_form_file').html("Guardar");
                $('#save_form_file').removeClass("disabled");
                

                //alert
                $("#alert-newpost-file").removeClass("alert-success");
                $("#alert-newpost-file").removeClass("alert-warning");
                $("#alert-newpost-file").addClass("alert-danger");
                $("#contenido-alert-newpost-file").html("Error al registrar.");
                $("#alert-newpost-file").fadeIn();
                eliminaralert();

            }
        })

    });

    //registrar form de link
    $("#save_form_link").on("click", function(e){
        e.preventDefault();
        $('#save_form_link').addClass("disabled");
        $('#save_form_link').html("Cargando...");

        /*$("#contenido-alert-newpost").html("");
        $("#alert-newpost").fadeOut();*/
        
        //validaciones ----------------------------------------------------------------------
        var errr = false;
        var msj = false;
        
        if ( $("#inputlink").val() == "" ){
            errr = true;
            msj = "Ingresa una dirección web en: Link";
        }
        if ( $("#inputtitulolink").val() == "" ) {
            errr = true;
            msj = "Ingresa un titulo";
        }
        if (errr) {
            $('#save_form_link').html("Guardar");
            $('#save_form_link').removeClass("disabled");
            
            $("#alert-newpost-link").removeClass("alert-success");
            $("#alert-newpost-link").removeClass("alert-danger");
            $("#alert-newpost-link").addClass("alert-warning");
            $("#contenido-alert-newpost-link").html(msj); //console.log("error,"+msj);
            $("#alert-newpost-link").fadeIn();
            eliminaralert();
            return false;
            
        }
        //fin validaciones ----------------------------------------------------------------------

        var formData = new FormData(document.getElementById("form_link"));

        $.ajax({
            url: 'controladores/save-link.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data);

                $('#save_form_link').html("Guardar");
                $('#save_form_link').removeClass("disabled");

                if(data.msj == "Registrado."){
                    $("#form_link")[0].reset();
                    
                    //alert
                    $("#alert-newpost-link").removeClass("alert-warning");
                    $("#alert-newpost-link").removeClass("alert-danger");
                    $("#alert-newpost-link").addClass("alert-success");
                    $("#contenido-alert-newpost-link").html(data.msj);
                    $("#alert-newpost-link").fadeIn();
                    eliminaralert();

                }

            }, error: function(xhr, status, errorThrown) {
                console.log(xhr, status, errorThrown);
                $('#save_form_link').html("Guardar");
                $('#save_form_link').removeClass("disabled");
                

                //alert
                $("#alert-newpost-link").removeClass("alert-success");
                $("#alert-newpost-link").removeClass("alert-warning");
                $("#alert-newpost-link").addClass("alert-danger");
                $("#contenido-alert-newpost-link").html("Error al registrar.");
                $("#alert-newpost-link").fadeIn();
                eliminaralert();

            }
        })

    });

    $("#inputtitulofile").on('keyup', function() {
        if ( ($('#inputtitulofile').val().length == 0) || ($('#inputtitulofile').val().length < 4 ) ) {
            $('#file_input').prop('disabled', true);
        }else{
            $('#file_input').prop('disabled', false);
        }
    });

    $(".delete_item").on('click', function(){

        var id_item = $(this).attr("id_item");

        $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="float: right;margin-top: 5px;font-size: 1.5em;"></span><span class="sr-only">Cargando...</span>');

        var formData = new FormData();
        formData.append('id_item', id_item);

        $.ajax({
            url: 'controladores/delete_item.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data);
                if(data.msj == "Eliminado."){
                    $(".delete_item_"+id_item+"").parent().parent().remove();
                }


            }, error: function(xhr, status, errorThrown) {
                console.log(xhr, status, errorThrown);
                
            }
        })


    })

</script>