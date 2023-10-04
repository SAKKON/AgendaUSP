<!DOCTYPE HTML>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    
    <title>Servicios - FaPsi</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="nav toolbarSocialMedia sizefontNavbar" style="height: 30px; justify-content: center;">
      <div class="pcVisibility text-dark" style="justify-content: left; width: 40vw; height: 20px; z-index: 7; background-color:#f4f2ed;"> Universidad Autónoma de Nuevo León</div>
      <div class="text-dark" style="position: absolute; justify-content: left; width: 20vw;z-index: 6;"> U.A.N.L.</div>
      <div style="position: relative; bottom: 30px; justify-content: right;" class="social">
      <ul>
        <li class="sprite facebook"><a target="_blank" href="https://www.facebook.com/FaPsi"></a></li>
          <li class="sprite twitter"><a target="_blank" href="https://twitter.com/Psicologia_UANL"></a></li>
          <li class="sprite instagram"><a target="_blank" href="https://www.instagram.com/fapsiuanl/"></a></li>
          <li class="sprite youtube"><a target="_blank" href="https://www.youtube.com/@fapsisistemasfacultaddepsi6226"></a></li>
          <li class="sprite linkedin"><a target="_blank" href="https://www.linkedin.com/company/uanl"></a></li>
      </ul>
    </div>
    </nav>
    <nav class="navbar cms navbar-expand-lg navbar-light maincompColor sizefontNavbar" style="height: 130px;">
        <a class="navbar-brand" href="#">
            <img src="images/Logo_Fapsi.png" width="auto" height="90" alt="">
          </a>
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
      
        <div class="collapse navbar-collapse shrinked-navbar" id="navbarSupportedContent">

            <div style="position: absolute; right: 5%; width: fit-content;">
                <div class="search" >
                    <form action="#">
                        
                            <a href="logout.php"><img id="img-perfil" src="images/Perfil.png" alt="">
                          <?php
session_start();

if (isset($_SESSION['dev'])) {
    $user = $_SESSION['dev'];
    echo $user;
} else {
    echo "Inicia sesion";
}                   ?>
                          </a>
                        </input>
                    </form>
                </div>
            </div>

      </div>

      </nav>
      <nav class="navbar cms navbar-expand-lg navbar-light toolbarPrimary sizefontNavbar2" style="height: 80px; justify-content: center;">
        
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        
        <div class="justify-content-center collapse navbar-collapse shrinked-navbar" id="navbarSupportedContent2">
        <ul class="navbar-nav pr-2">
          <li class="nav-item dropdown">
            <a class="nav-link text-light blackText" href="http://localhost/wordpress/wp-content/themes/FaPsiProject/PAGINA-DE-SERVICIOS.PHP">
              Inicio
            </a></li>
            <li class="nav-item dropdown">
            <a class="nav-link text-light blackText" href="http://localhost/wordpress/wp-content/themes/FaPsiProject/OTROS-SERV.PHP">
              Servicios
            </a></li>
            <li class="nav-item dropdown">
            <a class="nav-link text-light blackText" href="http://localhost/wordpress/wp-content/themes/FaPsiProject/NOTICIAS.PHP">
              Noticias
            </a></li>
          <li class="nav-item dropdown">
            <a class="nav-link text-light blackText" href="http://localhost/wordpress/wp-content/themes/FaPsiProject/AGENDA.PHP">
              Citas
            </a></li>
            <li class="nav-item dropdown">
              <a class="nav-link text-light blackText" href="http://localhost/wordpress/wp-content/themes/FaPsiProject/NOSOTROS.PHP">
                Nosotros
              </a>
              <!--<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Mapa Interactivo del Campus</a>
                <a class="dropdown-item" href="#">Facultad</a>
                <a class="dropdown-item" href="#">Auditorio Polivalente</a>
                <a class="dropdown-item" href="#">CRIDS</a>
              </div>-->
            </li>
            <br>
        </ul>
      </div>
      </nav>
    <!-- navbar end -->
    <!-- banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active CarouselImg">
            <img class="d-block w-100" src="images/33035.webp" alt="First slide">
            <div class="text-white bannerTitle">
                <h5>Material</h5>
                <p>Descubre material de ayuda.</p>
              </div>
          </div>
          <div class="carousel-item CarouselImg">
            <img class="d-block w-100" src="images/Library-many-books-path_1920x1080.jpg" alt="Second slide">
            <div class="text-white bannerTitle">
                <h5>Avizos</h5>
                <p>Informate de los acontecimientos de la USP.</p>
              </div>
            </div>
          <div class="carousel-item CarouselImg">
            <img class="d-block w-100" src="images/dirección.jpg" alt="Third slide">
            <div class="text-white bannerTitle">
                <h5>Nosotros</h5>
                <p>Conoce un poco mas la institucion.</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!-- banner end -->


    <!-- CONTENT -->
    <div class="row container-fluid cms py-5">

            <h1>Servicios</h1>
          <br><br><br><br>
            <div class="card-group purplecolorbkg cardShadow w-100">
              
              <div class="card" style="border-right: 1px solid #574096;">
                <img class="card-img-top" src="images/serv1.png" style="object-fit:scale-down; max-height: 300px;" alt="Card image cap">
                <div class="card-body text-dark">
                  <h5 class="card-title font-weight-bold">¿Primera vez? Agenda una preconsulta para conocer que podemos hacer por ti</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="font-weight-bold text-white">Se realizó el </small></p>
                  <a href="AGENDA.php" class="btn btn-yellow text-dark font-weight-bold">¡Agendar cita!</a>
                </div>
              </div>
				
              <div class="card" style="border-left: 1px solid #574096; border-right: 1px solid #574096;">
                <img class="card-img-top" src="images/serv2.png" style="object-fit:scale-down; max-height: 300px;" alt="Card image cap">
                <div class="card-body text-dark">
                  <h5 class="card-title font-weight-bold">¿Tienes una cuenta? Organzia las fechas de tus sesiones con comodidad</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="font-weight-bold text-white">Se realizó el </small></p>
                  <div class="contcont card-body h-25 w-100" style="background-color: transparent;">

                  <a onclick="myFunction()" class="btn btn-yellow text-dark font-weight-bold">Calendario</a>
                  </div>

<script>

function myFunction() {

  window.open("CALENDARIO.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=730,height=400");

}

</script>

                </div>
              </div>

              <div class="card" style="border-left: 1px solid #574096;">
                <img class="card-img-top" src="images/serv1.png" style="object-fit:scale-down; max-height: 300px;" alt="Card image cap">
                <div class="card-body text-dark">
                  <h5 class="card-title font-weight-bold">Ve algunos otros de los servicios que la USP tiene para ofrecerte. <br><br></h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="font-weight-bold text-white">Se realizó el </small></p>
                  <a href="OTROS-SERV.php" class="btn btn-yellow text-dark font-weight-bold">Ver Otros Servicios</a>
                </div>
              </div>
            
    
            </div>

        </div>  
        
        <br><br>
        <div class="row container-fluid cms py-0">
          

        <h1>Noticias</h1>
        <br><br><br><br>
    
        <div class="card text-white purplecolorbkg w-100 cardShadow">
          <img class="card-img-top" src="images/Noti_4.jpg" style="object-fit: cover; max-height: 300px;" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 30px;">Entrega de títulos a alumnos egresados</h5>
            <p class="card-text" style="font-size: 20px;"></p>
            <p class="card-text"><small class="font-weight-bold text-white" style="font-size: 15px;">Publicado el 20 MARZO</small></p>
            <a href="NOTICIAS.php" class="col-2 btn btn-yellow text-muted font-weight-bold" style="position: absolute; bottom:10px; right: 20px; width: 110px; min-width: 110px;">Ver Noticia</a>
          </div>
          </div>

    
    
          <div class="card-group purplecolorbkg cardShadow w-100">
          
              <div class="card" style="border-right: 1px solid #243A96;">
                <img class="card-img-top" style="max-height: 380px;" src="images/Noti_1.jpg" alt="Card image cap">
                <div class="card-body violetcolorbkg text-white">
                  <h5 class="card-title">Campaña vacunas COVID-19</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="font-weight-bold text-white">Publicado el 12 ABRIL</small></p>
                  <a href="NOTICIAS.php" class="btn btn-yellow text-muted font-weight-bold">Ver Noticia</a>
                </div>
              </div>

              <div class="card" style="border-left: 1px solid #243A96; border-right: 1px solid #243A96;">
                <img class="card-img-top" style="max-height: 380px;" src="images/Noti_2.jpg" alt="Card image cap">
                <div class="card-body violetcolorbkg text-white">
                  <h5 class="card-title">Conferencia Magistral</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="font-weight-bold text-white">Publicado el 31 ABRIL</small></p>
                  <a href="NOTICIAS.php" class="btn btn-yellow text-muted font-weight-bold">Ver Noticia</a>
                </div>
              </div>

              <div class="card" style="border-left: 1px solid #243A96;">
                <img class="card-img-top" style="max-height: 380px;" src="images/Noti_3.jpg" alt="Card image cap">
                <div class="card-body violetcolorbkg text-white">
                  <h5 class="card-title">Taller Interactivo " Yo y mi persona"</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="font-weight-bold text-white">Publicado el 2 MAYO</small></p>
                  <a href="NOTICIAS.php" class="btn btn-yellow text-muted font-weight-bold">Ver Noticia</a>
                </div>
              </div>
            </div>
        </div>  
    <!-- CONTENT end-->

    <div class="row container-fluid cms py-0" style="height:100px"></div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
