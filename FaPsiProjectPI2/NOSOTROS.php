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
                        <input type="text"
                            placeholder=" Buscar"
                            name="search">
                            <img id="img-lupa" src="images/Busqueda.png" alt="">
                            <a href="INICIO-SESION.php"><img id="img-perfil" src="images/Perfil.png" alt="">
                          <?php
session_start();

if (isset($_SESSION['dev'])) {
    $user = $_SESSION['dev'];
    echo $user;
} else {
    echo "Inicia sesion";
}
                          ?>
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
            <a class="nav-link text-light blackText" href="PAGINA-DE-SERVICIOS.PHP">
              Inicio
            </a></li>
            <li class="nav-item dropdown">
            <a class="nav-link text-light blackText" href="OTROS-SERV.PHP">
              Servicios
            </a></li>
            <li class="nav-item dropdown">
            <a class="nav-link text-light blackText" href="NOTICIAS.PHP">
              Noticias
            </a></li>
          <li class="nav-item dropdown">
            <a class="nav-link text-light blackText" href="AGENDA.PHP">
              Citas
            </a></li>
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
    <div class="row container-fluid cms py-5">

        <br><br>
        <div class="row container-fluid cms py-0">
    
        <div class="Nosotros-main-top">
        <h1>Nosostros</h1>
        <br><br>
        <div class="Nosotros-main">
            <div>
                <h4>Quienes somos:</h4>
                <p>La Unidad de Servicios Psicológicos (USP) es una institución docente-asistencial que ofrece atención psicológica a personas de la comunidad mediante terapia individual o grupal. Los servicios generales que ofrece abarcan evaluación, intervención, promoción de la salud y prevención.
                    Los terapeutas que brindan el servicio son estudiantes de pregrado y posgrado que, bajo una supervisión directa y profesional por parte de un psicólogo experto, aportan los recursos intelectuales y profesionales para promover la calidad de vida de los usuarios, contribuyendo así de forma socialmente responsable con la comunidad.</p>
                <h4>Mision</h4>
                <p>Formación teórico-práctica de psicólogos de pregrado y posgrado capaces de responder al desarrollo de la comunidad mediante la atención oportuna y científica de problemáticas de índole psicológico presentes en las diferentes constelaciones del ser humano, basados en la calidad en el servicio y la responsabilidad social.</p>
                <h4>Vision</h4>
                <p>Ser proyectada como una institución rectora en la formación práctica de psicólogos a través de la atención especializada y asistencia a la comunidad nuevoleonesa; todo esto matizado por estándares de calidad y seguridad del paciente.</p>
                <br>
                <div class="panel-group mt30" id="acordeon_contenido" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#acordeon_contenido_" href="#collapse_1137007972" aria-expanded="true" aria-controls="collapseOne">
                      Antecedentes e historia                    </a>
                  </h4>
                </div>
                <div id="collapse_1137007972" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_">
                  <div class="panel-body">
                    <p>El 1 de mayo de 1974 se abrió al público la consulta externa dentro de la Facultad de Psicología: un servicio para niños y adultos con problemáticas psicológicas y/o vocacionales que permitió a nuestros alumnos poner en práctica lo aprendido teóricamente; de este modo, a partir de la generación del 74, las posibilidades de Formación fueron mucho más sólidas y más enraizadas en lo “psicológico”.</p>
<p>Este pequeño edificio en el que empezamos nuestras labores fue visitado por el entonces Presidente de la República, Luis Echeverría Álvarez, quien al realizar una gira de trabajo por la Universidad pasó por nuestra facultad para su formal inauguración.</p>
<p>Al ser testigo de nuestro trabajo y luego de una plática y petición por parte del entonces presidente de la sociedad de alumnos, Jesús Elizondo Rodríguez, autorizó una partida presupuestal para lo que en 1975 sería nuestra flamante Unidad Clínica y de Rehabilitación Psicológica. Ahora Unidad de Servicios Psicológicos.</p>
<p>En el año 1986 fue creado el Departamento de Archivo y Estadística, así como el Departamento de Trabajo Social, lo cual permitió incorporar nuevos reglamentos y documentación de acuerdo con los criterios formales en el sector salud; todo bajo la injerencia de jefes de departamentos y los coordinadores de las áreas de acentuación. Cuatro años después (1990) se incrementó la actividad de vinculación de la Unidad Clínica a ocho centros de práctica externos.</p>
<p>De 1991 a 1997 se generaron nuevos consultorios, se remodelaron las oficinas y se produjeron las cámaras de Gessell.</p>
<p>En 1993, con el apoyo de Club Rotarios y el DIF Nuevo León, se generó el Centro de Prevención, Psicológica en el Desarrollo Infantil, así como el Departamento de Neuropsicología.</p>
<p>En octubre de 2001 se inició la construcción de la Clínica de Violencia, inaugurada el 28 de octubre de 2003, a cargo de la Mtra. Marina Duque Mora.</p>
<p>La Unidad Clínica y de Rehabilitación Psicológica cambió su nombre a la Unidad de Servicios Psicológicos, bajo la gestión del Mtro. Arnoldo Téllez López, y es en ese mismo periodo (2003-2009) que se remodela nuevamente la infraestructura de la Clínica.</p>
<hr>
<p><strong>Personal directivo de la USP a lo largo de la historia.</strong></p>
<p>1974:</p>
<ul>
<li>Adalberto Flores Ramírez.</li>
</ul>
<p>1982 – 1988:</p>
<ul>
<li>José Cruz Rodríguez Alcalá.</li>
<li>Guadalupe Rodríguez Gutiérrez.</li>
<li>María de Guadalupe Villarreal Peña.</li>
<li>Marina Duque Mora.</li>
</ul>
<p>1997:</p>
<ul>
<li>Nora Gámez de Cortés Melo.</li>
</ul>
<p>1998 – 2003:</p>
<ul>
<li>Milady Vargas Comsille.</li>
</ul>
<p>2003 – 2009:</p>
<ul>
<li>Maribel Sáenz Elizondo.</li>
</ul>
<p>2010 a 2015:</p>
<ul>
<li>María Elena Urdiales Ibarra.</li>
</ul>
<p>2016:</p>
<ul>
<li>María del Carmen Hernández Villarreal.</li>
</ul>
                  </div>
                </div>
              </div>
                          <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#acordeon_contenido_" href="#collapse_2097678138" aria-expanded="true" aria-controls="collapseOne">
                      Directorio                    </a>
                  </h4>
                </div>
                <div id="collapse_2097678138" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_">
                  <div class="panel-body">
                    <table class="table">
<tbody>
<tr>
<td width="589">Unidad de Servicios Psicológicos<em><br>
</em>Faculta de Psicología. UANL. Dr. Carlos Canseco 110, esquina con Dr. Eduardo Aguirre Pequeño. Colonia Mitras Centro. Monterrey, N. L. CP. 64460.<br>
Teléfonos: 81-83481064, 81-8348-2724, 81-8348-3866, ext. 301 Servicio de pre consulta en horario de 9:00 a 16:30 horas</td>
</tr>
<tr>
<td width="589">Dr. Guillermo&nbsp;Vanegas Arrambide<br>
Subdirección de Proyectos Educativos y Asistenciales<br>
Conmutador: 304</td>
</tr>
<tr>
<td width="589">Mtra. María del Carmen&nbsp;Hernández Villarreal<br>
Secretaría Técnica Unidad de Servicios Psicológicos<br>
Conmutador: 303</td>
</tr>
<tr>
<td width="589">Recepción de la Clínica, turnos matutino y vespertino<br>
Conmutador: 305<br>
Matutino: Imelda Nohemí Mares González<br>
Vespertino: Tamhara Fernández Almeida</td>
</tr>
<tr>
<td width="589">Lic. Cheryl Krystal Alonso Reyna<br>
Pre consulta<br>
Conmutador: 307</td>
</tr>
<tr>
<td width="589">T.S. Lic. Carla Guadalupe Trejo Amador<br>
Trabajo Social, turnos matutino y vespertino<br>
Conmutador: 309</td>
</tr>
<tr>
<td width="589">Mtra. Herlinda Villarreal García<br>
Coordinación, Archivo y Estadística<br>
Conmutador: 308</td>
</tr>
<tr>
<td width="589">Mtra. Sandra Verónica Meza Cavazos<br>
Departamento de Neuropsicología<br>
Conmutador: 310 y 311</td>
</tr>
<tr>
<td width="589">Mtra. Laura Elena Ibarra Mendoza<br>
Trayectoria Clínica Psicoanalítica<br>
Conmutador: 313 y 314</td>
</tr>
<tr>
<td width="589">Dra. María Petra Segovia&nbsp;Chávez<br>
Extensión Equidad y Género<br>
Conmutador: 321 y 322</td>
</tr>
<tr>
<td width="589">Mtro. Guillermo Rocha González<br>
Departamento de Urgencias</td>
</tr>
<tr>
<td width="589">Mtra. Diana Leticia Jiménez Gaytán<br>
Trayectoria Educativa Constructivista<br>
Conmutador: 306</td>
</tr>
<tr>
<td width="589">Mtro. Enrique García García<br>
Trayectoria Cognitivo Conductual<br>
Conmutador: 315 y 316</td>
</tr>
<tr>
<td width="589">Mtro. Guillermo Rosales Hernández<br>
Departamento de Orientación Vocacional<br>
Conmutador: 317 y 318</td>
</tr>
<tr>
<td width="589">Mtra. Martha Esthela Calderón Parga<br>
Bolsa de Trabajo<br>
Conmutador: 319</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
                  </div>
                </div>
              </div>
                          <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#acordeon_contenido_" href="#collapse_2033437370" aria-expanded="true" aria-controls="collapseOne">
                      Departamentos de la USP                    </a>
                  </h4>
                </div>
                <div id="collapse_2033437370" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_">
                  <div class="panel-body">
                    <p><strong>Recepción</strong></p>
<p>El paciente acude a la Unidad de Servicios Psicológicos (USP) a solicitar una pre consulta.</p>
<p><b>Pre consulta</b></p>
<p>El departamento tiene dos clientes: el paciente que acude a solicitar servicios psicológicos y el terapeuta que necesita que se le asignen casos para su formación terapéutica.</p>
<p>Las pre consultas se realizarán de manera híbrida: en línea y presencial.</p>
<p>Para la pre consulta en línea se mandará un correo el cual debes de solicitar a la facultad con los siguientes datos:</p>
<ul>
<li>Nombre</li>
<li>Edad del paciente</li>
<li>Teléfono celular y teléfono de casa</li>
<li>Correo electrónico</li>
<li>Motivo de consulta</li>
<li>Horarios disponibles</li>
</ul>
<p>Para la pre consulta de manera presencial acudir en el horario de 9:00 a 16:30 horas, reportándose en la recepción de la clínica.</p>
<p><strong>Canalización.</strong></p>
<ul>
<li>En caso de que durante la pre consulta se detecte que el paciente requiere un tipo de atención que no se brinde en la USP se canalizará a la institución correspondiente.</li>
</ul>
<p><strong>Departamento de urgencias.</strong></p>
<ul>
<li>Si durante la pre consulta el o la paciente presenta algún estado que ponga en riesgo su vida o la de otros, llamar al Departamento de Urgencias para remitirles el caso.</li>
<li>Los motivos de urgencias serán aquellos donde se detecten intentos de suicidio, depresión muy grave y/o riesgo homicida.</li>
</ul>
<p><strong>Equidad y género.</strong></p>
<ul>
<li>Si la pre consulta es canalizada por una institución que reporta violencia explícita, el personal de pre consulta remitirá el caso al Departamento de Equidad y Género.</li>
</ul>
<p><strong>Departamento de trabajo social.</strong></p>
<ul>
<li>Una vez realizada la pre consulta se contacta con el departamento para que se le realice el estudio socioeconómico correspondiente.</li>
<li>Es responsabilidad del terapeuta pasar a su paciente al departamento para la realización del estudio socioeconómico y asignar la cuota por cada sesión psicológica.</li>
<li>Es causa de baja inasistencia del paciente a las sesiones psicológicas tres veces consecutivas, por lo tanto, el terapeuta se verá obligado a notificarlo en el mismo departamento.</li>
</ul>
<hr>
<ul>
<li><strong>Sala de espera.</strong></li>
</ul>
<p>Recepción de los pacientes o/u orientación a personas que acuden al sitio en un horario de 8:00 a 20:00 horas.</p>
<ul>
<li><strong>Coordinación general de la USP.</strong></li>
</ul>
<p>Coordina y busca que las funciones de los departamentos funcionen con servicio y calidad, en un recinto laboral propio de la UANL.</p>
<ul>
<li><strong>Trayectoria constructivista.</strong></li>
</ul>
<p>Atención psicológica a menores o adolescentes o adultos que requieren apoyo terapéutico.</p>
<ul>
<li><strong>Trayectoria clínica psicoanalítica.</strong></li>
</ul>
<p>Atención psicológica a menores o adolescentes o adultos que requieran apoyo terapéutico.</p>
<ul>
<li><strong>Trayectoria cognitiva conductual.</strong></li>
</ul>
<p>Atención psicológica a menores o adolescentes o adultos que requieran apoyo terapéutico.</p>
                  </div>
                </div>
              </div>
                          <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#acordeon_contenido_" href="#collapse_1034213555" aria-expanded="true" aria-controls="collapseOne">
                      Reglamento interno de la USP                    </a>
                  </h4>
                </div>
                <div id="collapse_1034213555" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_">
                  <div class="panel-body">
                    <p><strong>Exposición de motivos.</strong></p>
<p>El proyecto de reglamento interno que se presenta está´a fundamentado en el Reglamento Interno de la Facultad de Psicología de la UANL con fecha del 6 de septiembre del 2000; asimismo su sustento legal se encuentra en la base del Reglamento general sobre la disciplina y el buen comportamiento dentro de las áreas y recintos universitarios de la UANL. Y este está estipulado en la Ley Orgánica de la Universidad Autónoma de Nuevo León.</p>
<p>Esta licitación es el resultado de la necesidad de dar regulación a los usuarios y prestatarios (terapeutas y administrativos) del servicio psicológico dentro de las instalaciones de la Unidad de Servicios Psicológicos que permitan la norma del ejercicio profesional al que se ven sometidos los estudiantes de los últimos cuatro semestres de la licenciatura de la Facultad de Psicología y aquellos que ya cursan en el ámbito de posgrado y que tengan que cubrir su praxis clínica en la USP.</p>
<p>De la misma manera se logrará la calidad en el servicio que prestamos a aquella parte de la comunidad nuevoleonesa que acude a la USP a buscar nuestra profesión asistencial.</p>
<h3><strong>Título primero.— Del ejercicio de la práctica profesional.</strong></h3>
<hr>
<p><strong>Artículo 1°.</strong> El alumno aspirante a ingresar a la USP se compromete a asumir, aplicar y hacerse responsable de los acuerdos presentados por el presente reglamento interno.</p>
<p><strong>Artículo 2°.</strong> El alumno aspirante a realizar la práctica o praxis clínica deberá preinscribirse en alguna de las áreas de asignatura para ser programado para entrevistas de selección y evaluación.</p>
<p><strong>Artículo 3°.</strong> Se deberá preinscribir en solo una de las áreas; no podrá registrarse en dos o más.</p>
<p><strong>Artículo 4°.</strong> Se le dirá después de un tiempo establecido si fue aprobado por el departamento solicitado o el área de su interés y se le notificará la fecha y hora para el curso de inducción programado por las diversas coordinaciones e impartido por maestros y supervisores en cada área respectivamente. Se les entregará carta de asignación a propedéutica y tendrán una oportunidad al semestre de hacer correcciones de sus centros de prácticas, cambios, dudas, etc.</p>
<p><strong>Artículo 5°.</strong> Después de haber cubierto sus cursos inductorios, se les asignarán supervisores, horarios y distribución de cubículos. Además, se les notificará de seminarios que deberán cursar en los primeros semestres de práctica clínica.</p>
<p><strong>Artículo 6°.</strong> Asistirá puntualmente a su supervisión con material que así le requiera al supervisor asignado, a saber: expedientes, notas evolutivas, entrevistas, integración del diagnóstico o tratamiento, niveles de intervención, seguimientos, encuestas, pruebas de desarrollo o diagnóstico, etc. Es necesario que esté al tanto de presentar en sus supervisiones sus reportes quincenales y mensuales que les serán entregados por el departamento de archivo y estadística de la USP, y que deberá entregar en los tiempos establecidos por dicho departamento para fines del control de sus expedientes y servicios otorgados. Dicho departamento notificará, en caso de ser requerido, aquellos datos que hicieran falta para el llenado de sus reportes de control y seguimiento.</p>
<p><strong>Artículo 7°.</strong> Es obligación absoluta del terapeuta asistir puntual e higiénicamente presentable, uniformado y con el gafete de identificación a la cita con sus pacientes o clientes, tomando en consideración lo siguiente:</p>
<ul>
<li>El terapeuta se presentará de forma adecuada a la ocasión a sus sesiones de trabajo.</li>
<li>Es necesario que esté aproximadamente 15 minutos antes de la hora de su cita programada con antelación.</li>
<li>Contar con un espacio limpio y en orden en donde se disponga a trabajar.</li>
<li>Poseer el material requerido para trabajar en la sesión tomando en cuenta los objetivos planteados a la ocasión.</li>
<li>Contar con la disposición personal y necesaria para el trabajo con otros que así nos demandan.</li>
</ul>
<p><strong>Artículo 8°.</strong> Los alumnos de séptimo semestre es posible que realicen sus prácticas hacia el interior en la USP propiamente o hacia el exterior en las instituciones con quien celebra acuerdos y convenios la USP y la Facultad de Psicología.</p>
<p><strong>Artículo 9°.</strong> Los alumnos de séptimo semestre deberán acudir al departamento de pre consulta de la USP a conocer los lineamientos necesarios para la asignación de pacientes. Esto se refiere a:</p>
<p>Proporcionar día, hora y cubículo a trabajar para la cita de primera vez; conocer los parámetros de canalización, seguimiento, agenda, calendarización, archivo, estadística, apertura de caso, baja o alta por deserción, etc.</p>
<ul>
<li>No más de tres sesiones para la apertura de expedientes</li>
<li>No más de tres días para el estudio socioeconómico a sus pacientes; aquí es necesario que acompañen al departamento de trabajo social y esperen a que aquí les atienda.</li>
<li>El terapeuta notificará a sus pacientes o cliente de la necesidad de firmar una carta responsiva en el departamento de trabajo social.</li>
<li>Es responsabilidad del terapeuta dar seguimiento y agregar notas evolutivas en sus expedientes, agregar el reporte del caso, impresión diagnóstica y reporte de entrevistas, así como anexar las pruebas, encuestas, dibujos, etc.</li>
<li>Si se sorprendiera que alguno de nuestros pacientes tiene más de 15 minutos esperando en sala de espera, el terapeuta será reportado como inasistente y la recepcionista pasará nota a la coordinación general y está a su vez a la coordinación respectiva para la sanción que recibirá el terapeuta, que será las primeras dos veces de forma verbal, después una amonestación por escrito y finalmente una sanción académica, y de no respetarse tal estatuto se notificará de su suspensión definitiva.</li>
</ul>
<p><strong>Artículo 10°.</strong> El terapeuta contará con tres periodos vacacionales durante el año escolar; asimismo, dispondrá de un tiempo a laborar de 3 a 4 horas de servicio diario, según sea la asignación, de lunes a viernes, a menos que las necesidades del servicio requieran otro proceder.</p>
<p><strong>Artículo 11°.</strong> De hacer caso omiso al siguiente reglamento y no respetar los lineamientos interpuestos en estas ordenanzas, el terapeuta alumno de pre y posgrado se hará acreedor a la no liberación de su práctica y tendrá que volver a repetir dicha materia.</p>
<hr>
<h3><strong>Título</strong> segundo. Del bien inmueble.</h3>
<p><strong>Artículo 12°.</strong> El terapeuta es notificado del uso del bien inmueble y queda en el conocimiento de hacer efectivos los lineamientos del Reglamento Interno de la Facultad de Psicología, en especial el capítulo V, artículo 93, sección I y II; artículos 98,101,102,103, apartado III. Artículo 104, apartado 1 y de las sanciones del 105.</p>
<p><strong>Artículo 13°.</strong> Queda estrictamente prohibido fumar en los pasillos, salas, auditorios, cubículos, consultorios, cámaras de Gesell, salones, estancias, salas de espera, etc., de acuerdo al artículo 9 del Reglamento General sobre la disciplina y el buen comportamiento dentro de las áreas y recintos universitarios.</p>
<p><strong>Artículo 14°.</strong> Se prohíbe la introducción de alimentos a consultorios y cámaras de Gessell; y si por alguna razón se consumen alimentos en otros espacios, es responsabilidad de quien ensucie limpiar inmediatamente en cuanto salga del espacio físico. De no respetar los acuerdos aquí mencionados, la coordinación se verá forzada a prohibir o no prestar los espacios solicitados.</p>
<p><strong>Artículo 15°. </strong>No se permite divulgar ningún papel o documento, póster o fotos sin el consentimiento de la coordinación general; además, no se pegan avisos o invitaciones en paredes o vidrios; se podrá hacer exclusivamente en las zonas señaladas.</p>
<p><strong>Artículo 16°.</strong> &nbsp;No se permite ningún tipo de disturbio físico o cualquier forma de violencia física o verbal ejercida dentro de los recintos universitarios, tal como lo señalan los artículos 10,12 y 18 del Reglamento general de la disciplina y el buen comportamiento dentro de las áreas y recintos universitarios. Se solicita que mantengamos el orden y silencio por aquellos que están recibiendo uno de los servicios o aquellos quienes estén brindándolo.</p>
<p><strong>Artículo 17°.</strong> No se permite el bloqueo de áreas de rampas para personas con discapacidad.</p>
<p><strong>Artículo 18°.</strong> No se permite sentarse en el suelo o las escaleras.</p>
<p><strong>Artículo 19°.</strong> Prohibido el uso de grabadoras con alto volumen o equipos de sonido a menos que se utilicen con fines laborales y siempre y cuando sea en un volumen adecuado.</p>
<p><strong>Artículo 20°.</strong> Las instalaciones permanecerán abiertas en un horario de 8:00 a 21:00 horas, de lunes a viernes. De requerir cualquier otro cambio al presente artículo deberá ser solicitado vía la coordinación general. Si se sorprende a cualquier persona laborando en las instalaciones fuera de horario o de contexto o se desconoce su proceder, se notificará a las instancias adecuadas para el desalojo del edificio.</p>
<p>El presente reglamento fue propuesto con fecha del 2 de octubre de 2004, en Monterrey, Nuevo León, en la Facultad de Psicología de la UANL.</p>
                  </div>
                </div>
              </div>
                          <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#acordeon_contenido_" href="#collapse_1195094668" aria-expanded="true" aria-controls="collapseOne">
                      Servicios de la USP                    </a>
                  </h4>
                </div>
                <div id="collapse_1195094668" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_">
                  <div class="panel-body">
                    <p><strong>Departamento de diagnóstico y evaluación.</strong></p>
                  <ul>
                  <li>Evaluación neuropsicológica.</li>
                  <li>Evaluación psicopedagógica.</li>
                  </ul>
                  <p><strong>Atención de prevención primaria.</strong></p>
                  <ul>
                  <li>Intervención comunitaria.</li>
                  <li>Pláticas psicoeducativas.</li>
                  <li>Talleres y conferencias sobre tópicos específicos.</li>
                  </ul>
                  <hr>
                  <p><strong>Prevención secundaria y de tercer nivel</strong></p>
                  <p>Diagnóstico y tratamiento.</p>
                  <ul>
                  <li>A niños</li>
                  <li>Adolescentes</li>
                  <li>Adultos</li>
                  <li>Grupos</li>
                  <li>Pareja</li>
                  <li>Familia</li>
                  </ul>
                  <p>Servicios convenidos con otras instituciones hacia el exterior que ofrece la USP.</p>
                  <ul>
                  <li>USAER 17</li>
                  <li>USAER 255</li>
                  <li>Casa Monarca</li>
                  <li>Facultad de Ciencias Físico Matemáticas de la UANL</li>
                  <li>Pinturas Thérmicas del Norte</li>
                  <li>Escuela primaria “Profa. Beatriz Idalia Treviño Casso”</li>
                  <li>USAER LXI</li>
                  </ul>
                  <hr>
                  <p><strong>Zonas geográficas receptoras de consulta.</strong></p>
                  <p>La solicitud de consultas que se reciben parte de diversos municipios del área metropolitana y de otras entidades afines.</p>
                  <ul>
                  <li>Monterrey</li>
                  <li>San Nicolás de los Garza</li>
                  <li>Guadalupe</li>
                  <li>Santa Catarina</li>
                  <li>Villa Juárez</li>
                  <li>San Pedro Garza García</li>
                  <li>Apodaca</li>
                  <li>Escobedo</li>
                  <li>Santiago</li>
                  <li>Ciénega de Flores</li>
                  <li>García</li>
                  <li>Salinas Victoria</li>
                  <li>El Carmen</li>
                  <li>Pesquería</li>
                  <li>Zuaza</li>
                  </ul>
                  <p>Y otras ciudades vecinas, como:</p>
                  <ul>
                  <li>Reynosa, Tamaulipas</li>
                  </ul>
                  <p>&nbsp;</p>
                  </div>
                </div>
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