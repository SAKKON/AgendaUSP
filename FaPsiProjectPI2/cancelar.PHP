
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "citasfapsi";



$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion con base de datos: ".mysqli_connect_error());
}

if (isset($_POST["cancelar"])) {

    $fecha = $_POST["fecha"];
    $horas = $_POST["horas"];
    $dia_semana = date('w', strtotime($fecha));
    $dia_semana = intval($dia_semana);
    $fechaInt = preg_replace('[\D]', '', $fecha);
    $id_cita = $_POST["cita"];
    $id_cita = intval($id_cita);
    $especialista = $_POST["especialista"];




    session_start();
    $id_paciente = 31;

    $sqlwrite = "DELETE FROM horarios_citas WHERE id_cita = $id_cita";
    if (mysqli_query($conn, $sqlwrite)) {
        echo  '<script> alert("Cita eliminada correctamente. "); window.location = "MIS_CITAS.php" </script>';
    } else {
        echo "Error al insertar los datos: " . mysqli_error($conn);
    }
}
