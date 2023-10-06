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
}
if (!isset($_SESSION['dev'])) {
	 echo '<script> alert("Favor de iniciar sesion."); </script>';
    header("Location: INICIO-SESION.php");

    exit();
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
    <div class="justify-content-center contcont card-body h-25 w-100">
        <br>
        <div class="Citas-main">
            <div>
                <h3 style="font-size: 50px;">Citas</h3>
            </div>
            <div>
                <h4>Agenda tus citas de manera más cómoda:</h4>
                <p>Para agendar, selecciona la fecha en la que deseas que se te atienda, esta información irá a tu terapeuta el cual podrá confirmar si es una fecha ideal. Una vez ambos estén de acuerdo, se agendará en el siguiente calendario; en el caso contrario se regresará una respuesta y las posibles fechas más cercanas a la fecha deseada</p>
            </div>
            <div class="cont-citas">
                <div>
                    <p>Elija en el calendario de la derecha la fecha que desea agendar su cita y la razón por la que la desea agendar</p>
                </div>
						
				<form style="display:inline-block;" action="agendacita.php" method="post">
                        <label for="Horario">Horario a elegir:</label>
                        <select name="horas" id="horas">
                            <option value="9 AM a 10 AM">9:00AM - 10:00 AM</option>
                            <option value="10 AM a 11 AM">10:00AM - 11:00 AM</option>
                            <option value="11 AM a 12 PM">11:00AM - 12:00 PM</option>
                            <option value="12 PM a 1 PM">12:00PM - 1:00 PM</option>
                            <option value="1 PM a 2 PM">1:00PM - 2:00 PM</option>
                            <option value="2 PM a 3 PM">2:00 PM - 3:00 PM</option>
                            <option value="3 PM a 4 PM">3:00 PM - 4:00 PM</option>
                            <option value="4 PM a 5 PM">4:00 PM - 5:00 PM</option>
                            <option value="5 PM a 6 PM">5:00 PM - 6:00 PM</option>
                            <option value="6 PM a 7 PM">6:00 PM - 7:00 PM</option>
                          </select>
                          <br>
                          <label for="Día">Fecha a elegir:</label>
                          <select name="fecha">
                              <?php
                                // Obtener la fecha actual
                                $fechaActual = new DateTime();

                                // Mostrar las fechas desde hoy hasta 4 días después
                                for ($i = 0; $i <= 4; $i++) {
                                  $fecha = $fechaActual->format('d-m-Y');
                                  echo '<option value="' . $fecha . '">' . $fecha . '</option>';

                                  // Añadir un día a la fecha actual
                                  $fechaActual->add(new DateInterval('P1D'));
                                }
                              ?>
                          </select>
                          <br>
                          <label for="Especialista">Especialista:</label>
                          <select>
                            <option value="psic">Psicólogo</option>
                            <option value="psiq">Psiquiatra</option>
                          </select>
                          
                          <button type="submit" class="font-weight-bold" id="submitagenda" name="submitagenda">Agendar cita</button>
                        
                    </form>
                        
                       <!-- <div class="row container-fluid cms py-0" style="height:100px"></div> -->
                        
                        <!-- Tabla de agenda -->
                    <div class="table-responsive tabladiseño">
                    <?php 
                        $id_paciente = $_SESSION['id_paciente'];
                        $username = "root"; 
                        $password = ""; 
                        $database = "citasfapsi"; 
                        $mysqli = new mysqli("localhost", $username, $password, $database); 
                        $query = "SELECT * FROM horarios WHERE id_paciente = $id_paciente";

                        echo '<table class="table table-bordered"  border="1" cellspacing="2" cellpadding="2"> 
                            <tr> 
                                <th>     Numero de cita     </th> 
                                <th>     ID paciente     </th> 
                                <th>     Hora y fecha de cita     </th> 
                                <th>     Disponibilidad     </th> 
                            </tr>';

                        if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $field1name = $row["num_cita"];
                                $field3name = $row["id_paciente"];
                                $field4name = $row["fechayhoras"];
                                $field5name = $row["isdisponible"]; 

                                echo '<tr> 
                                    <td>'.$field1name.'</td> 
                                    <td>'.$field3name.'</td> 
                                    <td>'.$field4name.'</td> 
                                    <td>'.$field5name.'</td> 
                                </tr>';
                            }
                            $result->free();
                        } 
                    ?>
                </div>
                        
            
        </div>
	</div>
	<div class="text-center mt-4">
            <a href="http://psicologia.uanl.mx"><button class="btn btn-primary" >Salir a la Facultad de Psicología</button></a>
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
