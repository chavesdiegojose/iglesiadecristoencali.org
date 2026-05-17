<?php include_once("config-php.php"); ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="img/favicon.png"/>


    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Iglesia de Cristo en Cali</title>

    <style>
      .style-card{
        padding: 1em;
        text-align: center;
      }

      @media (max-width: 1200px){
        #img-logo-iglesia{
          display: none;
        }
        #img-logo-iglesia-top{
          display: block !important;
        }
        #sin-articulos{
          margin-top: -150px !important;
        }
        .posts-ultimos{
          top: 180px !important;
        }
      }

      @media (max-width: 900px){
        #sin-articulos{
          margin-top: 0px !important;
        }
        .footer-css{
          padding-left: 1.5em !important; padding-right: 1.5em !important;
        }
        .posts-ultimos{
          position: initial !important;
        }
        .posts-ultimos div{
          max-width: 300px;
          margin-bottom: 1em;
          margin-right: auto;margin-left: auto;
        }
        .section-ultimos{
          height: auto !important;
        }
        .section-ultimos .imagen-section-ultimos{
          margin-bottom: -65px;
        }
        .title-card-radio{
          font-size: 2.5em !important;
        }
        nav{
          padding: 1.5em !important;
        }
        .carousel-caption h1{
          font-size: 2.5em !important;
        }
        .carousel-caption p{
          font-size: 1em !important;
        }
      }

      @media (max-width: 700px){
        
        .carousel-caption{
          top: 0px !important;
        }
        .carousel-caption h1{
          font-size: 1.5em !important;
        }
        .carousel-caption p{
          font-size: .8em !important;
        }
        .carousel-caption p a{
          font-size: .8em !important;
        }
        .title-card-radio{
          font-size: 1.5em !important;
          margin-top: 20px !important;
          margin-left: 10px !important;
        }
        .text-info-radio-slider{
          font-size: .8em !important;
        }
      }

    </style>
  </head>

  <body>
    <!--menu -->
    <?php include_once("menu.php"); ?>

    

    
    <!--carrusel -->
    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="img/biblia.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block" style="top: 50px; text-align: left;">
            <h1 class="Oswald-Bold text-black" style="font-size: 4em;">¡Bienvenido!</h1>
            <p class="Oswald-Light text-dark" style="font-size: 1.3em;">Somos la iglesia de Cristo en Cali, la iglesia de Sana doctrina, donde cuidamos predicar la palabra de Dios tal cual ha sido enseñada desde el primer siglo. Creemos en el Padre, el Hijo y el Espíritu Santo. Nos sometemos al nuevo testamento donde Jesús es el Señor y nuestro Salvador. Le invitamos a que sea parte de nuestra familia de la fe.</p>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <img src="img/radio3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block" style="top: 50px; text-align: left;">
            <h1 class="Oswald-Bold" style="font-size: 4em;">Escucha Nuestros <br> Programas de Radio</h1>

            <p class="Oswald-Light text-info-radio-slider" style="font-size: 1.3em;">Escúchanos de Lunes a Viernes en nuestros programas de radio en diferido formando parte de nuestra red social WhatsApp. <a href="https://api.whatsapp.com/send?phone=573104933524" target="_black"> Envía un mensaje presionando aquí y te añadiremos al grupo inmediatamente.</a></p>

            <p style="" class="Oswald-Light"><a href="programas-radio.php" class="btn btn-outline-danger"><strong>Escuchar</strong></a></p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/libros2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block" style="top: 50px; text-align: left;">
            <h1 class="Oswald-Bold" style="font-size: 4em;">Aprenda con Nuestros Estudios y Artículos</h1>
            <p class="Oswald-Light"><a class="btn btn-outline-danger" href="publicaciones.php"><strong>En línea y archivos descargables para estudiar en sus dispositivos</strong></a></p>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


        <!-- Programas de Radio -->
        <div class="section-ultimos" style="position: relative; height: 700px;">

          <div class="card text-white imagen-section-ultimos">
            <img src="img/radio4.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h1 class="card-title title-card-radio Oswald-Regular text-black" style="margin-top: 50px;font-size: 4em;margin-left: 20px;">Últimos Programas de Radio</h1>
            </div>
          </div>

          <?php
            $sql = "SELECT * FROM post WHERE type_post != 'article' ORDER BY id_post desc LIMIT 5"; $r = $conexion->query($sql);
            $filas = $r->num_rows;
            $estilo = "";
            if ($filas == 1){
              $estilo = "width: 100%; position: absolute; top: 250px; padding-left: 1em; padding-right: 1em;";
            }else{
              $estilo = "position: absolute; top: 250px; padding-left: 1em; padding-right: 1em;";
            }
          ?>

          <div class="posts-ultimos row row-cols-1 row-cols-md-5 g-6" style="<?php echo $estilo; ?>">

            <?php   
              if($r->num_rows>0){
                  while($sql=$r->fetch_assoc()){ 
            ?>

            <div class="col">
              <div class="card h-100 style-card" style="border: 1px solid #b52626;">
                <img src="<?php echo "panel/controladores/".$sql["imagen"]; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title Oswald-Bold"><?php echo $sql["titulo"]; ?></h5>
                  <p class="card-text Oswald-Light" style="font-style: italic;"><?php echo $sql["descr"]; ?></p>
                  <a href="programa-radio.php?id_post=<?php echo $sql["id_post"]; ?>" class="card-link Oswald-Bold text-danger">VER</a>
                </div>
              </div>
            </div>

            <?php         
                      
                  }
              
                }else{
                  echo "</div> <div id='sin-articulos' class='col alert alert-primary Oswald-Light' style='width: 60%; margin-top: -250px; margin-right: auto;margin-left: auto;' align='center'><strong>No hay publicaciones disponibles</strong></div>";
                }
            ?>

            

          </div>


        </div>


      
        



<!-- Nuestros servicios --> <br>
    <div style="padding: 2em;">
      <h1 class="card-title title-card-radio Oswald-Regular text-black" style="margin-bottom:45px; text-align: center; font-size: 3em; margin-left: 20px;">Le Invitamos a Nuestros Servicios</h1>
      <p class="Oswald-Regular" style="font-size: 1.5em; text-align: center;">Aproveche nuestros diferentes espacios de estudio bíblico, devocionales, reflexiones y asambleas generales.</p>

      <div class="card mb-3" style="border: 0px;">
        <div class="row g-0">
          <div class="col-md-6">
            <img src="img/santa-cena.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body Oswald-Light">
              <h1 class="card-title text-danger" style="text-align: center;"><strong>Domingos</strong></h1>
              
              <p class="card-text" style="font-size: 1.4em; text-align: center;">

                  <span class="text-danger"><strong>9:00 a.m. – 11:00 a.m</strong></span>  
              </p>

              <p style="font-size: 1.4em;">
                  <span><strong>La iglesia se reúne con el propósito de llevar a cabo los mandamientos de Dios, como son:</strong></span>

                  <ul style="font-size: 1.4em;">
                    <li><strong>Cantar</strong> Efes. 5:19.</li>
                    <li><strong>Orar</strong> 1 Ts 5:17.</li>
                    <li><strong>Conmemorar la muerte, sepultura y resurrección de Cristo (Cena del Señor)</strong> Hech. 20:7; 1 Cor 11:23.</li>
                    <li><strong>Ofrendar conforme se ha prosperado (individualmente)</strong> 1 Cor. 16:1-2.</li>
                    <li><strong>Estudiar la palabra de Dios</strong> 2 Tim. 2:15; 2 Tim. 3:16-17.</li>
                  </ul>

                </p>

            </div>
          </div>
        </div>
      </div>


      <div class="card mb-3" style="border: 0px;">
        <div class="row g-0">
          
          <div class="col-md-6">
            <div class="card-body Oswald-Light">
              <h1 class="card-title text-danger" style="text-align: center;"><strong>Miércoles</strong></h1>
              
              <p class="card-text" style="font-size: 1.4em; text-align: center;">

                  <span class="text-danger" style=""><strong>7:00 p.m. – 8:00 p.m</strong></span>  
                  <br><br>

                  <ul style="font-size: 1.4em; margin-left: 2em;">
                    <li><strong>Cantar</strong> Efes. 5:19.</li>
                    <li><strong>Orar</strong> 1 Ts 5:17.</li>
                    <li><strong>Estudiar la palabra de Dios</strong> 2 Tim. 2:15; 2 Tim. 3:16-17.</li>
                  </ul>

                </p>

            </div>
          </div>

          <div class="col-md-6">
            <img src="img/nosotros2.jpg" class="img-fluid rounded-start" alt="...">
          </div>


        </div>
      </div>

    </div>




<div class="row" style="padding: 5em;">

  <div class="col-sm-6">
    <div class="card border-primary" style="padding: 2em;">

      <div class="card-header border-primary Oswald-Regular"><h1>Estudia con nosotros...</h1></div>

      <!-- <div class="card-body Oswald-Light">
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div> -->
      <br>
      <div class="card mb-3" style="">
        <div class="row g-0">
          
          <div class="col-md-12">
            <img src="img/img-1.jpg" class="img-fluid rounded-start" alt="...">
          </div>

          <div class="col-md-12">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text Oswald-Light" style="font-size: 1.4em;"> <strong>
                Estudios Bíblicos en el hogar <br>
                Clases para Parejas <br>
                ¿Qué debo hacer para ser salvo? <br>
                Devocionales <br>

                <a target="_blank" href="https://api.whatsapp.com/send/?phone=573104933524&amp;text=Un+saludo%2C+quisiera+recibir+estudios+b%C3%ADblicos.">Pregunte presionando aquí, estaremos contentos en poder ayudarle.</a><br>

                Cursos bíblicos <br>
                Consejería Matrimonial <br>
                Clases para Niños <br>
                Clases para Jóvenes <br>
                Conozca la voluntad de Dios para su vida</strong>
              </p>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

  <div class="col-sm-6">
    <div class="card border-danger" style="padding: 2em;">

      <div class="card-header border-danger Oswald-Regular"><h1>¿Qué debo hacer para ser salvo?</h1></div>
      <br>
      <div class="col-md-12">
            <img src="img/plandesalvacion.jpg" class="img-fluid rounded-start" alt="...">
      </div>

      <div class="card-body Oswald-Light">
        <p class="card-text">
                <ul style="font-size: 1.4em;">
                  <li> <strong>Oir</strong> el evangelio (Rom. 10:17)</li>
                  <li> <strong>Creer</strong> el evangelio (Mar. 16:15-16)</li>
                  <li> <strong>Arrepentirse</strong> de sus pecados (Hch. 17:30)</li>
                  <li> <strong>Confesar</strong> a Cristo (Rom. 10:9-10)</li>
                  <li> <strong>Bautizarse</strong> para el perdón de pecados (Hch. 2:38) </li>
                </ul>

        </p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>

    </div>
  </div>


</div>




        <!-- Documentos y Articulos -->
        <div class="section-ultimos" style="position: relative; height: 700px;">

          <div class="card text-white imagen-section-ultimos">
            <img src="img/libros2.jpg" class="card-img" alt="..." style="filter: brightness(0.5);">
            <div class="card-img-overlay">
              <h1 class="card-title title-card-radio Oswald-Regular text-white" style="margin-top: 50px;font-size: 4em;margin-left: 20px;">Últimos Artículos</h1>
            </div>
          </div>

          <div class="posts-ultimos row row-cols-1 row-cols-md-5 g-6" style="position: absolute;top: 250px; padding-left: 1em; padding-right: 1em;">

            <?php
                $sql = "SELECT * FROM post WHERE type_post = 'article' ORDER BY id_post desc LIMIT 5"; $r = $conexion->query($sql);
                if($r->num_rows>0){
              
                  while($sql=$r->fetch_assoc()){
            ?>

            <div class="col">
              <div class="card h-100 style-card" style="border: 1px solid #b52626;">
                <img src="<?php echo "panel/controladores/".$sql["imagen"]; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title Oswald-Bold"><?php echo $sql["titulo"]; ?></h5>
                  <p class="card-text Oswald-Light" style="font-style: italic;"><?php echo $sql["descr"]; ?></p>
                  <a href="programa-radio.php?id_post=<?php echo $sql["id_post"]; ?>" class="card-link Oswald-Bold text-danger">VER</a>
                </div>
              </div>
            </div>

            <?php            
                    }
                
                  }else{
                      echo "</div> <div id='sin-articulos' class='col alert alert-primary Oswald-Light' style='width: 60%; margin-top: -250px; margin-right: auto;margin-left: auto;' align='center'><strong>No hay publicaciones disponibles</strong></div>";
                  }
              ?>

            <!-- <div class="col">
              <div class="card h-100 style-card" style="border: 1px solid #0097ff;">
                <img src="img/img-post.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title Oswald-Bold">Card title</h5>
                  <p class="card-text fst-italic">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="#" class="card-link Oswald-Bold text-primary">VER</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 style-card" style="border: 1px solid #0097ff;">
                <img src="img/img-post.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title Oswald-Bold">Card title</h5>
                  <p class="card-text fst-italic">This is a short card.</p>
                  <a href="#" class="card-link Oswald-Bold text-primary">VER</a>
                  
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 style-card" style="border: 1px solid #0097ff;">
                <img src="img/img-post.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title Oswald-Bold">Card title</h5>
                  <p class="card-text fst-italic">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="card-link Oswald-Bold text-primary">VER</a>

                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 style-card" style="border: 1px solid #0097ff;">
                <img src="img/img-post.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title Oswald-Bold">Card title</h5>
                  <p class="card-text fst-italic">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="#" class="card-link Oswald-Bold text-primary">VER</a>

                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 style-card" style="border: 1px solid #0097ff;">
                <img src="img/img-post.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title Oswald-Bold">Card title</h5>
                  <p class="card-text fst-italic">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="#" class="card-link Oswald-Bold text-primary">VER</a>
                </div>
              </div>
              
            </div> -->

          </div>


        </div>



    



    <!-- Recomendaciones --> <br>
    <?php include_once("recomendaciones.php"); ?>
    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
    
    <?php include_once("footer.php"); ?>
  </body>
</html>