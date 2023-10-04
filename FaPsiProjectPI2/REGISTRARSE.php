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
    
    <title>Registrarse - FaPsi</title>
  </head>
  <body>

    <?php 
  $link = mysqli_connect("localhost","root","","citasfapsi");

  if(!$link){

    die("No se pudo conectar a la base de datos: ". mysqli_connect_error());

  }
  echo "Conexión Exitosa";
  mysqli_close($link);

  ?>

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
                        
                            <a href="INICIO-SESION.php"><img id="img-perfil" src="images/Perfil.png" alt=""></a>
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
              <a class="nav-link text-light blackText" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <div class="Content-bg">
      <div class="row container-fluid cms py-5 w-100">


        <!-- R E G I S T R A R -->
        <div class="contcont w-100">
          <div class="container w-100">
            <h1>Regístrate Aquí</h1>
            <br>
            <form action="login-register.php" method="post">
              
                <input type="text" id="nombres" name="nombres" placeholder="Ingresa tu(s) nombre(s)" required><br>
                <input type="text" id="apellidos" name="apellidos" placeholder="Ingresa tu(s) apellido(s)" required><br>
                <input type="text" id="correo" name="correo" placeholder="Correo" required><br>
                <input type="password" id="creapass" name="creapass" placeholder="Crea una contraseña" required><br>
                <input type="password" id="verifpass" name="verifpass" placeholder="Ingresa de nuevo tu contraseña" required><br>
                <br>
                <button type="submit" class="font-weight-bold" id="submitregister" name="submitregister">Regístrate</button>
                <br>
                <br>
                <p>¿Ya posees una cuenta?, ¡Inicia sesión!</p>
                <a href="INICIO-SESION.php" class="btn btn-yellow text-muted font-weight-bold">Inicia Sesión</a>
            
              </form>
          </div>
          
          </div>
          <!-- R E G I S T R A R -->

      </div>
      <div class="contcont card-body h-25 w-100" style="background-color: transparent;">
        <a href="http://www.psicologia.uanl.mx" class="btn btn-yellow text-muted font-weight-bold">Salir a Facultad de Psicología</a>
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
