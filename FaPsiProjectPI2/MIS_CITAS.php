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

              $username = "root";
              $password = "";
              $database = "citasfapsi";
              $mysqli = new mysqli("localhost", $username, $password, $database);

              function getDateString($date) {
                $date = strval($date);
                $dia = substr($date, 0, 2);
                $mes = substr($date, 2, 2);
                $ano = substr($date, 4, 8);
                $newDate = "$dia-$mes-$ano";
                return $newDate;
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
          <h3 style="font-size: 50px;">Mis Citas</h3>
        </div>
      <form style="display:inline-block;"  method="post">
            <!-- <div class="row container-fluid cms py-0" style="height:100px"></div> -->

            <!-- Tabla de agenda -->
            <div style="padding-top: 50px;">
              <?php
              
                $id_paciente = $_SESSION['id_paciente'];
                $username = "root";
                $password = "";
                $database = "citasfapsi";
                $mysqli = new mysqli("localhost", $username, $password, $database);
                $query = "SELECT hc.id_cita, ps.nombres, h.horario, d.dia, hc.int_fecha, hc.id_disponibilidad 
                FROM horarios_citas hc 
                LEFT JOIN psicólogos ps
                ON hc.id_psicologo = ps.id_psicologo
                INNER JOIN horas h
                ON hc.id_hora = h.id_hora 
                INNER JOIN dia_de_la_semana d
                ON hc.id_dia = d.id_dia
                WHERE id_paciente = $id_paciente";

              

                echo '<table border="0" cellspacing="2" cellpadding="2"> 
                <tr> 
                <th style="text-align: center;"> <font face="Arial"> Nombre </font> </th> 
                <th style="text-align: center;"> <font face="Arial"> Dia </font> </th>
                <th style="text-align: center;"> <font face="Arial"> Horario </font> </th> 
                <th style="text-align: center;"> <font face="Arial"> Fecha </font> </th> 
                <th style="text-align: center;"> <font face="Arial"> Disponibilidad </font> </th> 
                <th style="text-align: center;"> <font face="Arial"> PAGO</font> </th>
                <th style="text-align: center;"> <font face="Arial"> REPROGRAMAR</font> </th> 
 
                </tr>';

                if ($result = $mysqli->query($query)) {

                while ($row = $result->fetch_assoc()) {
                $field1name = $row["nombres"];
                $field2name = $row["dia"];
                $field3name = $row["horario"];
                $field4name = $row["int_fecha"];
                $field5name = $row["id_disponibilidad"];
                $id_cita = $row["id_cita"];

                if($field1name == NULL){
                    $field1name = "ESPERA";
                }

                if($field5name == 1) {
                $dispo = "PENDIENTE";
                }
                if($field5name == 2) {
                $dispo = "AGENDADO";
                }



                $newDateString = getDateString($field4name);
                echo '<tr> 
            <td>'.$field1name.'</td> 
            <td>'.$field2name.'</td>
            <td>'.$field3name.'</td> 
            <td>'.$newDateString.'</td> 
            <td>'.$dispo.'</td>
            <td><a href="pagoLinea.php">LINEA</a><a href="pagoPresencial.php">     PRESENCIAL</a></td>
            <td><button type="submit" class="font-weight-bold" id="reprogramar" value ='.$row["id_cita"].' name="reprogramar" formaction="AGENDA_REPROGRAMAR.php">Cambiar</button>
            </td>

            </tr>';

            }

            $result->free();

            }
            echo '</table>';
            ?>
              <br>

            </div>
            <button type="submit" formaction="AGENDA.php">Regresar</button>

          </form>
        </div>
      </div>

    </div>
    <br>
  </div>


  <!-- CONTENT end-->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/agenda.js"></script>
</body>

</html>