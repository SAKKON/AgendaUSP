<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "citasfapsi";



$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion con base de datos: ".mysqli_connect_error());
}

if (isset($_POST["submitagenda"])) {

    $fecha = $_POST["fecha"];
    $horas = $_POST["horas"];
    $dia_semana = date('w', strtotime($fecha));
    $dia_semana = intval($dia_semana);
    $fechaInt = preg_replace('[\D]', '', $fecha);
    $id_cita = $_POST["cita"];
    $id_cita = intval($id_cita);
    $especialista = $_POST["especialista"];




    session_start();

    $sqlwrite = "UPDATE horarios_citas 
    SET id_hora = $horas, id_disponibilidad = 1, int_fecha = $fechaInt, id_dia = $dia_semana, id_psicologo = 0
    WHERE id_cita = $id_cita";
    if (mysqli_query($conn, $sqlwrite)) {
        echo  '<script> alert("Cambio de cita mandada correctamente. Espere a que sea aceptada por un profesional fecha '.$fechaInt.' dia '.$dia_semana.'  cita '.$id_cita.' "); window.location = "MIS_CITAS.php" </script>';
    } else {
        echo "Error al insertar los datos: " . mysqli_error($conn);
    }
}
