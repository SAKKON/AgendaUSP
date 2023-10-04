<?php
// autorizar.php

// Verificar si se han recibido los parámetros id_paciente, id_psicologo y num_cita
if (isset($_GET['id_paciente']) && isset($_GET['id_psicologo']) && isset($_GET['num_cita'])) {
    $id_paciente = $_GET['id_paciente'];
    $id_psicologo = $_GET['id_psicologo'];
    $num_cita = $_GET['num_cita'];

    $username = "root";
    $password = "";
    $database = "citasfapsi";
    $mysqli = new mysqli("localhost", $username, $password, $database);

    // Verificar si hay un error en la conexión
    if ($mysqli->connect_error) {
        die("Error en la conexión: " . $mysqli->connect_error);
    }

    // Actualizar el campo "id_paciente" en la tabla "horarios" usando el número de cita
     $updateQuery = "UPDATE horarios SET id_psicologo = '$id_psicologo', isdisponible = 'Aprobada' WHERE num_cita = '$num_cita'";
    if ($mysqli->query($updateQuery)) {
		echo  '<script> alert("La autorización se ha guardado correctamente en la base de datos."); window.location = "AGENDA-PSI.php" </script>';
 
    } else {
        echo "Ocurrió un error al guardar la autorización en la base de datos: " . $mysqli->error;
    }

    // Cerrar la conexión
    $mysqli->close();
} else {
    echo "No se recibieron los parámetros necesarios.";
}
?>
