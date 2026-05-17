<h1 style="display: inline-block; font-weight: bold;">Publicaciones</h1><a class="btn btn-primary" href="?op=newpost_publi" style="float:right">Crear Publicación</a>


    <div class="container-fluid tm-container-content tm-mt-60">

        <div class="row mb-4">
            <!-- <h2 class="col-6 tm-text-primary">
                Últimas Publicaciones
            </h2> -->
            <!-- <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 180
                </form>
            </div> -->
        </div>

        <div id="viewposts" class="row tm-mb-90 tm-gallery">

            <!-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="../img/img-01.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Hangers</h2>
                        <a href="video-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span>24 Oct 2020</span>
                    <span>10,460 views</span>
                </div>
            </div> -->

            <?php
                $sql = "SELECT * FROM post WHERE type_post = 'article' ORDER BY id_post desc"; $r = $conexion->query($sql);
                if($r->num_rows>0){
              
                  while($sql=$r->fetch_assoc()){
                    //$sqlArray[]=$sql; 
            ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="<?php echo "controladores/".$sql["imagen"]; ?>" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2><?php echo $sql["titulo"]; ?></h2>
                            <a href="admin.php?op=viewpost&idpost=<?php echo $sql["id_post"]; ?>">View more</a>
                        </figcaption>                    
                    </figure>
                    <div class="d-flex justify-content-between">
                        <span class="text-dark" style="font-weight: bold;"><?php echo $sql["titulo"]; ?></span>
                        <span><?php $time = strtotime($sql["fecha"]); echo date("d-m-Y", $time); ?></span>
                    </div>
                </div>
            <?php         
                      
                  }
              
                }else{
                    echo "<div class='' align='center'>No hay publicaciones disponibles</div>";
                }
            ?>

            

            
        </div> <!-- row -->

        <!-- <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                    <a href="javascript:void(0);" class="tm-paging-link">2</a>
                    <a href="javascript:void(0);" class="tm-paging-link">3</a>
                    <a href="javascript:void(0);" class="tm-paging-link">4</a>
                </div>
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>            
        </div> -->

    </div> <!-- container-fluid, tm-container-content -->

<script>
/*var formData = new FormData();
var contenido = "";
    $.ajax({
        url: 'controladores/viewposts.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data)
            //posts(data.posts);

            if(data.r == false){$("#viewposts").html("<div class='' align='center'>"+data.msj+"</div>")}
            
            else if (data.r == true){

                for (let i = 0; i < data.posts.length; i++) {
                    const p = data.posts[i];

                    contenido += `
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="${"controladores/"+p.imagen}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>${p.titulo}</h2>
                                <a href="video-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span>${convertDateFormat(p.fecha)}</span>
                            <span>${p.titulo}</span>
                        </div>
                    </div>
                    `;
                
                }

                $("#viewposts").html(contenido)

            }else{
                $("#viewposts").html("<div class='' align='center'>Error al obtener publicaciones</div>")
            }
            
            


        }, error: function(xhr, status, errorThrown) {
            console.log(errorThrown, status);
        }
    })*/
</script>
