<?php
include_once("config-php.php");

if( isset($_GET["search"]) ){
    $get_search = $_GET["search"];
    
    $sql = "SELECT p.* FROM post p 
    WHERE p.titulo LIKE '%$get_search%' OR p.descr LIKE '%$get_search%'
    ORDER BY p.id_post desc;";
    
}else{

    $sql = "SELECT * FROM post ORDER BY id_post desc";

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
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
        .imagen-section{
            margin-bottom:-40px !important;
        }
        .title-card-radio{
            font-size: 2.2em !important; margin-top: 10px !important;
        }
        .text-info-radio{
            font-size:1em !important;
        }
      }

    </style>

</head>
<body>

<!--menu -->
<?php include_once("menu.php"); ?>


<!-- Resultados de busqueda -->
<div class="section-ultimos" style="">

<div class="card text-white imagen-section" style="margin-bottom:-250px;">
  <img src="img/piladelibros3.jpg" class="card-img" alt="..." style="filter: opacity(0.9);">
  <div class="card-img-overlay">
    <h1 class="card-title title-card-radio Oswald-Regular text-black" style="margin-top: 50px;font-size: 4em;margin-left: 20px; text-align: center;">Resultados de busqueda por: <span style="text-decoration: underline;"><?php echo $_GET["search"] ?></span> </h1>
  </div>
</div>





<div class="posts-ultimos row row-cols-1 row-cols-md-5 g-6" style="padding-left: 1em; padding-right: 1em;">
            <?php
                $r = $conexion->query($sql);
                
                if($r->num_rows>0){
              
                  while($sql=$r->fetch_assoc()){
            ?>



  <div class="col">
    <div class="card  style-card" style="border: 1px solid #b52626;">
      <img src="<?php echo "panel/controladores/".$sql["imagen"]; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title Oswald-Bold"><?php echo $sql["titulo"]; ?></h5>
        <p class="card-text fst-italic"><?php echo $sql["descr"]; ?></p>
        <a href="publicacion.php?id_post=<?php echo $sql["id_post"]; ?>" class="card-link Oswald-Bold text-danger">VER</a>
      </div>
    </div>
  </div>

  <!-- <div class="col">
    <div class="card  style-card" style="border: 1px solid #b52626;">
      <img src="img/img-post.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title Oswald-Bold">Card title</h5>
        <p class="card-text fst-italic">This is a short card.</p>
        <a href="#" class="card-link Oswald-Bold text-danger">VER</a>
        
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card  style-card" style="border: 1px solid #b52626;">
      <img src="img/img-post.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title Oswald-Bold">Card title</h5>
        <p class="card-text fst-italic">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="card-link Oswald-Bold text-danger">VER</a>

      </div>
    </div>
  </div>

  <div class="col">
    <div class="card  style-card" style="border: 1px solid #b52626;">
      <img src="img/img-post.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title Oswald-Bold">Card title</h5>
        <p class="card-text fst-italic">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="card-link Oswald-Bold text-danger">VER</a>

      </div>
    </div>
  </div>

  <div class="col">
    <div class="card  style-card" style="border: 1px solid #b52626;">
      <img src="img/img-post.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title Oswald-Bold">Card title</h5>
        <p class="card-text fst-italic">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="card-link Oswald-Bold text-danger">VER</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card  style-card" style="border: 1px solid #b52626;">
      <img src="img/img-post.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title Oswald-Bold">Card title</h5>
        <p class="card-text fst-italic">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="card-link Oswald-Bold text-danger">VER</a>

      </div>
    </div>
  </div>

  <div class="col">
    <div class="card  style-card" style="border: 1px solid #b52626;">
      <img src="img/img-post.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title Oswald-Bold">Card title</h5>
        <p class="card-text fst-italic">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="card-link Oswald-Bold text-danger">VER</a>
      </div>
    </div>
  </div> -->


              <?php         
                      
                    }
                
                  }else{
                      echo "<div id='sin-articulos' class='col alert alert-primary Oswald-Light' style='width: 60%; margin-right: auto;margin-left: auto; font-size: 1.1em;' align='center'><strong>No hay publicaciocnes disponibles de: ".$_GET['search']."</strong></div>";
                  }
              ?>

</div>


</div>

<?php include_once("info-radio.php"); ?>
<!-- Bootstrap Bundle with Popper -->
<script src="js/bootstrap.bundle.min.js"></script>
<?php include_once("footer.php"); ?>
</body>
</html>