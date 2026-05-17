<script>
        //finalizar sesión de usuarios
        function salir(){
            localStorage.removeItem('iglesiadeCristoenCali'); window.location = "index.php";
        };
        $(document).on("click", ".logout", function(){
            salir();
        })
</script>

<nav id="salir" class="navbar navbar-expand-lg Oswald-Light" style="text-transform: uppercase; padding-right: 2em;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <!-- <i class="fas fa-film mr-2"></i> -->
                <img src="../img/logo-cali.png" alt="Iglesia de Cristo en Cali" width="200">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: initial;">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="text-dark" aria-current="page" style="font-weight: bold;letter-spacing: 1px;" href="admin.php?op=posts">Programas de Radio</a>
                </li>
                <li class="nav-item">
                    <a class="text-dark" aria-current="page" style="font-weight: bold;letter-spacing: 1px;" href="admin.php?op=posts_publi">Publicaciones</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link nav-link-4" href="admin.php?op=contacto">Contacto</a>
                </li> -->
                <li class="nav-item">
                    <a class="logout text-dark" style="font-weight: bold;letter-spacing: 1px;" href="">Cerrar Sesión</a>
                </li>
            </ul>
            </div>
        </div>
</nav>