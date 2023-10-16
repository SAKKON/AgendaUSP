<?php

include("conexion.php");



if (isset($_POST["submitagenda"])) {

    $fecha = $_POST["fecha"];
    $horas = $_POST["horas"];

    session_start();
    $user = $_SESSION['dev'];
    $id_paciente = $_SESSION['id_paciente'];

    $sqlwrite = "INSERT INTO horarios_citas (id_paciente, id_hora, id_disponibilidad, fecha) VALUES ('$id_paciente','$horas', 1, '$fecha')";

    if (mysqli_query($conn, $sqlwrite)) {
        echo  '<script> alert("Peticion de cita mandada correctamente. Espere a que sea aceptada por un profesional"); window.location = "AGENDA.php" </script>';
    } else {
        echo "Error al insertar los datos: " . mysqli_error($conn);
    }
}
