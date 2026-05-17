<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="icon" type="image/jpg" href="img/favicon.png"/>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        .card-group .card{
          margin-bottom: 0em;
        }
        .style-card{
            padding: 1em;
            text-align: center;
        }
        .posts-ultimos .col{
            margin-bottom: 1em;
        }
        @media (max-width: 1200px){
            .imagen-section{
                /*margin-bottom:-150px !important;*/
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
            /*margin-bottom:-40px !important;*/
        }
        .title-card-radio{
            font-size: 2.2em !important; margin-top: 10px !important;
        }
        .text-info-radio{
            font-size:1em !important;
        }
        .text-nosotros{
          display: contents;
          font-size: 1em !important;
        }
      }

    </style>

</head>
<body>

<!--menu -->
<?php include_once("menu.php"); ?>


<!-- Publicaciones -->
<div class="section-ultimos" style="">

<div class="card text-white imagen-section" style="">
  <img src="img/nosotros.jpg" class="card-img" alt="...">
  
  <!-- <div class="card-img-overlay">
    <h1 class="card-title title-card-radio Oswald-Regular text-white" style="margin-top: 50px;font-size: 4em;margin-left: 20px; text-shadow: 0 0 10px black; text-align: center;">Nosotros</h1>
  </div> -->

  <div class="card card-img-overlay text-nosotros" style="width: 100%; height: 110px; margin-top: 70px; text-align: center;font-size: 1.5em;color: #3e4095; padding: 0em;">

    <div class="card-body Oswald-Regular ">
    Siéntase en la libertad de escribirnos y contactarnos para poder ayudarle con sus inquietudes, <br> acompañarle en el proceso de ag​radar a Dios y ser parte de su iglesia aquí en la ciudad de Cali.
    </div>

  </div>

</div>





<div class="card-group text-white">

  <div class="card" style="background-color: #2cccc4;">
    <div class="card-body">

      <div class="container">

        <div class="row">

              <div class="col-2"><i class="bi bi-telephone-forward" style="font-size: 2.2em;"></i></div>

              <div class="col-10">
                <h5 class="card-title Oswald-Regular">TELEFONOS</h5>
                <p class="card-text Oswald-Light">+57 310 493 3524</p>
              </div>
            
        </div>
          
      </div>

    </div>

  </div>

  <div class="card" style="background-color: #f1c50e;">
    <div class="card-body">

      <div class="container">

        <div class="row">

            <div class="col-2"><i class="bi bi-pin-map-fill" style="font-size: 2.2em;"></i></div>

            <div class="col-10">
              <h5 class="card-title Oswald-Regular">DIRECCION</h5>
              <p class="card-text Oswald-Light">Barrio Vipasa Calle 44 N #2 BN 01. Cali, Colombia.</p>
            </div>
          
        </div>

      </div>

    </div>
  </div>

  <div class="card" style="background-color: #db545a;">
    
    <div class="card-body">
    
    <div class="container">
      
      <div class="row">

          <div class="col-2"><i class="bi bi-envelope-paper" style="font-size: 2.2em;"></i></div>

          <div class="col-10">
            <h5 class="card-title Oswald-Regular">E-MAIL</h5>
            <p class="card-text Oswald-Light">iglesiadecristoencali@gmail.com</p>
          </div>
        </div>
        
      </div>
    </div>

  </div>

  <div class="card" style="background-color: #0c4097;">
    
    <div class="card-body">
    
    <div class="container">
      
      <div class="row">

          <div class="col-2"><i class="bi bi-envelope-paper" style="font-size: 2.2em;"></i></div>

          <div class="col-10">
            <h5 class="card-title Oswald-Regular">Facebook</h5>
            <a class="card-text Oswald-Light" href="https://www.facebook.com/profile.php?id=100067686124661" target="_blanck" style="color: white;">Ir a nuestro Facebook.</a>
          </div>
        </div>
        
      </div>
    </div>

  </div>

  <div class="card" style="background-color: #db0f0f;">
    
    <div class="card-body">
    
    <div class="container">
      
      <div class="row">

          <div class="col-2"><i class="bi bi-envelope-paper" style="font-size: 2.2em;"></i></div>

          <div class="col-10">
            <h5 class="card-title Oswald-Regular">YouTube</h5>
            <a class="card-text Oswald-Light" href="https://www.youtube.com/@iglesiadecristocali" target="_blanck" style="color: white;">Ir a nuestro YouTube.</a>
          </div>
        </div>
        
      </div>
    </div>

  </div>

</div>



<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d31859.85161389561!2d-76.5146361!3d3.4752257!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8e30a6257866ed5b%3A0x46fbc8d8fd9214eb!2sCl.%2044%20Nte.%20%232a%20Norte-61%20a%202a%20Norte-1%20Cali%2C%20Valle%20del%20Cauca%20Colombia!3m2!1d3.4752256999999998!2d-76.51463609999999!5e0!3m2!1ses!2sve!4v1664305173154!5m2!1ses!2sve" width="600" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


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


<?php include_once("info-radio.php"); ?>

<!-- Recomendaciones -->
<?php include_once("recomendaciones.php"); ?>


<!-- Bootstrap Bundle with Popper -->
<script src="js/bootstrap.bundle.min.js"></script>
<?php include_once("footer.php"); ?>
</body>
</html>