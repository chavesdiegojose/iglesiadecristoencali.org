<?php
    $sql = "SELECT * FROM post WHERE id_post = $_GET[idpost]"; $r = $conexion->query($sql); $sql=$r->fetch_assoc();
?>
<style>
    .col-md-6{
            width: 45%;
        }
</style>
<script>
    function eliminaralert(){
        setTimeout(function() {
		// Declaramos la capa  mediante una clase para ocultarlo
        $("#alert-newpost").fadeOut(1500);
		
        },3000);
    }
</script>
<h1><strong>Editar Publicación</strong></h1>
<br>
<form id="form_new_post" enctype="multipart/form-data">
    <input type="hidden" name="id_post" value="<?php echo $_GET["idpost"]; ?>">
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputtitulo">Titulo de la Publicación</label> 
            <input type="text" class="form-control" id="inputtitulo" name="inputtitulo" placeholder="Titulo" value="<?php echo $sql["titulo"]; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="inputdes">Descripción</label>
            <input type="text" class="form-control" id="inputdes" name="inputdes" placeholder="Descripción" value="<?php echo $sql["descr"]; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="inputfile">Cambiar Imagen</label>
            <input type="file" class="form-control" id="inputfile" name="inputfile" placeholder="Cargar Imagen"><br>
            
            <figure>
                <figcaption>Imagen Actual</figcaption><br>
                <img src="<?php echo "controladores/".$sql["imagen"]; ?>" alt="Imagen de la Publicación" class="img-fluid">
            </figure>

        </div>

    </div>
    <button id="save_form" type="submit" class="btn btn-primary" style="float:right">Editar</button>
</form>

<br><br><br>

<div id="alert-newpost" class="alert alert-warning alert-dismissible fade show" role="alert" style="display:none;">
    <span id="contenido-alert-newpost"></span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<br>

<script type="text/javascript">

    $("#save_form").on("click", function(e){
        e.preventDefault();
        $('#save_form').addClass("disabled");
        $('#save_form').html("Cargando registro...");

        $("#contenido-alert-newpost").html("");
        $("#alert-newpost").fadeOut();
        
        //validaciones ----------------------------------------------------------------------
        var errr = false;
        var msj = false;
        
        if ( $("#inputdes").val() == "" ) {
            errr = true;
            msj = "Ingresa una descripción para la publicación";
        }
        if ( $("#inputtitulo").val() == "" ) {
            errr = true;
            msj = "Ingresa un titulo para la publicación";
        }
        if (errr) {
            $('#save_form').html("Guardar");
            $('#save_form').removeClass("disabled");
            
            $("#alert-newpost").removeClass("alert-success");
            $("#alert-newpost").removeClass("alert-danger");
            $("#alert-newpost").addClass("alert-warning");
            $("#contenido-alert-newpost").html(msj); //console.log("error,"+msj);
            $("#alert-newpost").fadeIn();
            return false;
            
        }
        //fin validaciones ----------------------------------------------------------------------

        var formData = new FormData(document.getElementById("form_new_post"));

        $.ajax({
            url: 'controladores/save-editpost.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data)

                $('#save_form').html("Editar");
                $('#save_form').removeClass("disabled");

                if(data.msj == "Registrado."){
                    
                    $("input").prop('disabled', true);

                    //alert
                    $("#alert-newpost").removeClass("alert-danger");
                    $("#alert-newpost").removeClass("alert-warning");
                    $("#alert-newpost").addClass("alert-success");
                    $("#contenido-alert-newpost").html(data.msj);
                    $("#alert-newpost").fadeIn();
                    eliminaralert();

                }else{

                    //alert
                    $("#alert-newpost").removeClass("alert-danger");
                    $("#alert-newpost").removeClass("alert-success");
                    $("#alert-newpost").addClass("alert-warning");
                    $("#contenido-alert-newpost").html(data.msj);
                    $("#alert-newpost").fadeIn();
                    eliminaralert();
                }
                    

                

            }, error: function(xhr, status, errorThrown) {
                console.log(xhr, status, errorThrown);
                $('#save_form').html("Editar");
                $('#save_form').removeClass("disabled");
                
                //alert
                $("#alert-newpost").removeClass("alert-success");
                $("#alert-newpost").removeClass("alert-warning");
                $("#alert-newpost").addClass("alert-danger");
                $("#contenido-alert-newpost").html("Error al registrar");
                $("#alert-newpost").fadeIn();
                eliminaralert();

            }
        })

    });

</script>


