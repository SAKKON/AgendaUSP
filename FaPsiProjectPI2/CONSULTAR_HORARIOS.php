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

  <title>Agenda - FaPsi</title>
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
        <div class="search">
          <form action="#">

            <a href="logout.php"><img id="img-perfil" src="images/Perfil.png" alt="">
              <?php

              session_start();

              if (isset($_SESSION['dev'])) {
                $user = $_SESSION['dev'];
                echo $user;
              } else {
                echo "Inicia sesion";
              }
              if (!isset($_SESSION['dev'])) {
                echo '<script> alert("Favor de iniciar sesion."); </script>';
                header("Location: INICIO-SESION.php");

                exit();
              }

              if (isset($_POST["consulta_horarios"])) {

                $fecha = $_POST["fecha"];
                $id_psicologo = $_POST["consulta_horarios"];
                $especialista = $_POST["especialista"];
                $hora = $_POST["horas"];
              }

              $username = "root";
              $password = "";
              $database = "citasfapsi";
              $mysqli = new mysqli("localhost", $username, $password, $database);


              //Obtener nombre del psicologo
              $queryPsicologo = "SELECT nombres FROM psicólogos  WHERE id_psicologo = $id_psicologo";
              $resultPsicologo = $mysqli->query($queryPsicologo);

              //Obtener todos lo horarios disponibles
              $query_horarios_existentes = "SELECT horario FROM horas";
              $result_horarios_existentes = $mysqli->query($query_horarios_existentes);


              if ($resultPsicologo->num_rows > 0) {
                $rowPsicologo = $resultPsicologo->fetch_assoc();
                $valuePsicologo = $rowPsicologo["nombres"];
              }

              if ($result_horarios_existentes->num_rows > 0) {
                $row_horarios_existentes = $result_horarios_existentes->fetch_assoc();
                $value_horarios_existentes = $row_horarios_existentes["horario"];
              }


              ?>
            </a>
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
          <a class="nav-link text-light blackText" href="PAGINA-DE-SERVICIOS.PHP">
            Inicio
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-light blackText" href="OTROS-SERV.PHP">
            Servicios
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-light blackText" href="NOTICIAS.PHP">
            Noticias
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-light blackText" href="AGENDA.PHP">
            Citas
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-light blackText" href="NOSOTROS.PHP">
            Nosotros
          </a>
          <!--<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Mapa Interactivo del Campus</a>
                <a class="dropdown-item" href="#">Facultad</a>
                <a class="dropdown-item" href="#">Auditorio Polivalente</a>
                <a class="dropdown-item" href="#">CRIDS</a>
              </div>-->
        </li>
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
          <h5>Avisos</h5>
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
  <div class="row container-fluid cms py-5 w-100">
    <div class="justify-content-centercontcont card-body h-25 w-100">
      <br>
      <div class="Citas-main">
        <div>
          <h3 style="font-size: 50px;">Consultar</h3>
        </div>
        <div class="cont-citas">
          <form style="display:inline-block;">
            <br>
            <label for="Día">Fecha a revisar: <b><i><?php echo $fecha ?></i></b></label>
            
          </form>
          
            <div style="padding-top: 50px;">
              <?php
              $fechaInt = preg_replace('[\D]', '', $fecha);
              $query_hora_id_ocupada = "SELECT id_hora FROM horarios_citas WHERE int_fecha = $fechaInt AND id_disponibilidad = 2";

              if ($result = $mysqli->query($query_hora_id_ocupada)) {
                while ($row = $result->fetch_assoc()) {

                  $id_hora = $row["id_hora"];
                  $query_temp = "UPDATE temporal SET id_disponibilidad = 2 WHERE id_hora = $id_hora ";
                  $mysqli->query($query_temp);

                }
                $result->free();
              }

              $query_horas_ocupadas = "SELECT horario, id_disponibilidad FROM temporal";

              echo '<table border="0" cellspacing="5" cellpadding="5"><tr></tr>';
              if ($result = $mysqli->query($query_horas_ocupadas)) {
                while ($row = $result->fetch_assoc()) {

                  $field1name = $row["horario"];
                  $field2name = $row["id_disponibilidad"];
                  if ($field2name == 2) {
                    $value = "OCUPADO";
                  } else {
                    $value = "LIBRE";
                  }


                  echo '<tr>
                            <td style="width: 200px;">' . $field1name . '</td>
                            <td style="width: 200px;">' . $value . '</td>  
                       </tr>';
                }
                $result->free();
              }

              echo '</table>';
              ?>
              <br>
            </div>
          </div>
        </div>

	<div class="Citas-main text-center mt-4" style="margin-left: 100px; background-color: transparent;">
        <a href="AGENDA.php"><button class="btn btn-primary" style="border-color: transparent;">Regresar a página de Citas</button></a>
    </div>
      </div>
    </div>
    
    <div style="padding-top: 50px;"> </div>
    <!-- CONTENT end-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/agenda.js"></script>
</body>

</html>