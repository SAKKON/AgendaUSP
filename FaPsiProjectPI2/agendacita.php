<?php

include("conexion.php");

if (isset($_POST["submitagenda"])) {

    $fecha = $_POST["fecha"];
    $horas = $_POST["horas"];
    $dia_semana = date('w', strtotime($fecha));
    $dia_semana = intval($dia_semana);
    $fechaInt = preg_replace('[\D]', '', $fecha);

    session_start();
    $user = $_SESSION['dev'];
    $id_paciente = $_SESSION['id_paciente'];

    $sqlwrite = "INSERT INTO horarios_citas (id_paciente, id_hora, id_disponibilidad, int_fecha, id_dia) 
    VALUES ('$id_paciente','$horas', 1, '$fechaInt', '$dia_semana')";

    if (mysqli_query($conn, $sqlwrite)) {
        echo  '<script> alert("Peticion de cita mandada correctamente. Espere a que sea aceptada por un profesional"); window.location = "AGENDA.php" </script>';
    } else {
        echo "Error al insertar los datos: " . mysqli_error($conn);
    }
}
