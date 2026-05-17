<?php include_once("../config-php.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iglesia de Cristo en Cali</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../fontawesome/css/all.min.css">

    <link rel="stylesheet" href="../css/templatemo-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    <script src="../js/jquery.min.js"></script>
    
    <link rel="icon" type="image/jpg" href="../img/favicon.png"/>

    <style>
        body{
        }
        .form-group{
            display: inline-block;
        }
    </style>
    <script>
        //validate user
        iglesiadeCristoenCali = JSON.parse(localStorage.getItem('iglesiadeCristoenCali'));
        if(!iglesiadeCristoenCali){
           window.location = "index.php";
        }

    </script>
</head>
<body class="Oswald-Light">
    
    
    <?php include_once("menu-admin.php"); ?>

    <div class="container-fluid tm-container-content tm-mt-60">

        
        <?php
            if(isset($_GET["op"]) AND $_GET["op"]=="posts"){
                include_once("posts.php");
            }else if(isset($_GET["op"]) AND $_GET["op"]=="newpost"){
                include_once("newpost.php");
            }else if(isset($_GET["op"]) AND $_GET["op"]=="contacto"){
                include_once("contacto.php");
            }else if(isset($_GET["op"]) AND $_GET["op"]=="viewpost"){
                include_once("detail-post-admin.php");
            }else if(isset($_GET["op"]) AND $_GET["op"]=="editpost"){
                include_once("editpost.php");
            }else if(isset($_GET["op"]) AND $_GET["op"]=="posts_publi"){
                include_once("posts_publi.php");
            }else if(isset($_GET["op"]) AND $_GET["op"]=="newpost_publi"){
                include_once("newpost_publi.php");
            }else{
                include_once("posts.php");
            }
        
        ?>

        
    </div> <!-- container-fluid, tm-container-content -->

    <br><br>
    <?php include_once("footer.php"); ?>
    
    <script src="../js/bootstrap.bundle.min.js"></script>
    


    <script>
        
        function convertDateFormat(string) {
            var info = string.split('-');
            return info[2] + '/' + info[1] + '/' + info[0];
        }

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>