<?php include_once("../config-php.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - Iglesia de Cristo en Cali</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="icon" type="image/jpg" href="../img/favicon.png"/>

    <style>

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
       
    </style>
    <script>
        //validación de usuarios si está logueado
        iglesiadeCristoenCali = JSON.parse(localStorage.getItem('iglesiadeCristoenCali'));
        if(iglesiadeCristoenCali){
            window.location = "admin.php";
        }
        function eliminaralert(){
            setTimeout(function() {
            // Declaramos la capa  mediante una clase para ocultarlo
            $("#alert-newpost").fadeOut(1500);
            
            },3000);
        }
    </script>
</head>
<body class="">
    
    <?php include_once("menu.php"); ?>

    <div class=" tm-container-content tm-mt-60">

        <h1 class="h3 mb-3 Oswald-Regular alert alert-primary" style="padding: 0.5em; padding-left: 3em; text-align: center; ">Ingresar al Panel de Control</h1>

        <form id="form_signin" class="form-signin Oswald-Light" style="margin-right: auto;max-width: 290px; margin-left: auto;" method="post">
        <!-- <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
        <br><br>
        
        <label for="usuario" class="">Correo Electrónico</label>
        <input type="email" id="usuario" class="form-control" placeholder="" style="color:black !important;" required autofocus>
        
        <label for="pass" class="">Contraseña</label>
        <input type="password" id="pass" class="form-control" style="color:black !important;" placeholder="" required>
        <!-- <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div> -->
        <br>
        <button id="boton-login" class="btn btn-lg btn-primary btn-block" style="background-color: #0d6efd;" type="submit">Entrar</button>
        
        <br>
        
    </form>
    <br>
    <div id="alert-newpost" class="alert alert-warning alert-dismissible fade show  Oswald-Regular" role="alert" style="display:none; text-align: center;">
        <span id="contenido-alert-newpost"></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    
    </div> <!-- container-fluid, tm-container-content -->
    

    

    <br><br><br><br><br>
    <?php include_once("footer.php"); ?>
    <script src="../js/jquery.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>

        $("#form_signin").on("submit", function(e){
            
            e.preventDefault();

            //boton
            $("#boton-login").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">Cargando...</span>')
            $("#boton-login").attr("disabled", true)

            data = {
                usuario:$("#usuario").val(),
                pass:$("#pass").val()
            }
            //console.log(data);
            $.ajax({
                url: 'login-backend.php',
                type: 'POST',
                data: data,
                success: function(data) {

                    console.log(data)

                    if (data.r == false) {

                        $("#alert-newpost").removeClass("alert-success");
                        $("#alert-newpost").removeClass("alert-danger");
                        $("#alert-newpost").addClass("alert-warning");
                        $("#contenido-alert-newpost").html(data.msj);
                        $("#alert-newpost").fadeIn();
                        eliminaralert();
                        

                    }else{

                        localStorage.setItem("iglesiadeCristoenCali",JSON.stringify(data.usuario));
                        window.location = "admin.php";
                        
                    }

                    $("#boton-login").html('Entrar')
                    $("#boton-login").attr("disabled", false)

                }, error: function(xhr, status, errorThrown) {
                        $("#alert-newpost").removeClass("alert-success");
                        $("#alert-newpost").removeClass("alert-danger");
                        $("#alert-newpost").addClass("alert-warning");
                        $("#contenido-alert-newpost").html("Error de sistema, contactar con soporte técnico.");
                        $("#alert-newpost").fadeIn();

                    console.log(errorThrown, status);
                    $("#boton-login").html('Entrar')
                    $("#boton-login").attr("disabled", false)
                    eliminaralert();

                }
            })

        })


    </script>
</body>
</html>