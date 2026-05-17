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
<h1 style="font-weight: bold;">Nueva Publicación</h1>
<br>
<form id="form_new_post" enctype="multipart/form-data">
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputtitulo">Titulo de la Publicación</label>
            <input type="text" class="form-control" id="inputtitulo" name="inputtitulo" placeholder="Titulo">
        </div>
        <div class="form-group col-md-6">
            <label for="inputdes">Descripción</label>
            <input type="text" class="form-control" id="inputdes" name="inputdes" placeholder="Descripción">
        </div>
        <div class="form-group col-md-6">
            <label for="inputfile">Imagen</label>
            <input type="file" class="form-control" id="inputfile" name="inputfile" placeholder="Cargar Imagen">
        </div>

    </div>
    <button id="save_form" type="submit" class="btn btn-primary" style="float:right">Guardar</button>
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
        
        if ( $("#inputfile")[0].files.length === 0){
            errr = true;
            msj = "Ingresa una imagen para la publicación";
        }
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
            url: 'controladores/save-newpost_publi.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data)

                $('#save_form').html("Guardar");
                $('#save_form').removeClass("disabled");

                if(data.msj == "Registrado."){
                    $("#form_new_post")[0].reset();
                    
                    //alert
                    $("#alert-newpost").removeClass("alert-warning");
                    $("#alert-newpost").removeClass("alert-danger");
                    $("#alert-newpost").addClass("alert-success");
                    $("#contenido-alert-newpost").html(data.msj);
                    $("#alert-newpost").fadeIn();
                    eliminaralert();

                }

            }, error: function(xhr, status, errorThrown) {
                console.log(xhr, status, errorThrown);
                $('#save_form').html("Guardar");
                $('#save_form').removeClass("disabled");
                
                //alert
                $("#alert-newpost").removeClass("alert-success");
                $("#alert-newpost").removeClass("alert-warning");
                $("#alert-newpost").addClass("alert-danger");
                $("#contenido-alert-newpost").html("Error al registrar.");
                $("#alert-newpost").fadeIn();
                eliminaralert();

            }
        })

    });

</script>


