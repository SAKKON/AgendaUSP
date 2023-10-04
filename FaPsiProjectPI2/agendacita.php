<?php 

include("conexion.php");



if(isset($_POST["submitagenda"])){

$fecha = $_POST["fecha"];
$horas = $_POST["horas"]; 
$nombres = '';
$correo = '';
session_start();
$user = $_SESSION['dev'];
$id_paciente = $_SESSION['id_paciente'];

$fechayhoras = $fecha.', '.$horas;
$disp = 'Pendiente';

$sqlwrite = "INSERT INTO `horarios`(`id_paciente`,`fechayhoras`,`isdisponible`) VALUES ('$id_paciente','$fechayhoras', '$disp')";

 if (mysqli_query($conn, $sqlwrite)) {
        echo  '<script> alert("Datos insertados correctamente en la base de datos."); window.location = "AGENDA.php" </script>';
    } else {
        echo "Error al insertar los datos: " . mysqli_error($conn);
    }


}

?>