<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'conexion.php';

//Create an instance; passing `true` enables exceptions

session_start();

if (isset($_SESSION['dev'])) {
    $user = $_SESSION['dev'];
    $userID = $_SESSION['id_paciente'];
} else {
    echo "Inicia sesion";
}
if (! isset($_SESSION['dev'])) {
    echo '<script> alert("Favor de iniciar sesion."); </script>';
    header("Location: INICIO-SESION.php");
    
    exit();
}

$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output SMTP::DEBUG_SERVER
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'SMTP.Office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'AgendaUSP@outlook.com';                     //SMTP username
    $mail->Password   = 'Equipo3ProyectoIntegrador2';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $username = "root";
    $password = "";
    $database = "citasfapsi";
    $mysqli = new mysqli("localhost", $username, $password, $database);
    
    $correoQuery = "SELECT correo FROM pacientes WHERE id_paciente = '$userID'";
    $requestmail = mysqli_query($mysqli, $correoQuery);
    $userMail = mysqli_fetch_assoc($requestmail);
    
    $correoPaciente = $userMail['correo'];
    $nombrePaciente = $user;
    
    $mail->setFrom('AgendaUSP@outlook.com', 'AgendaUSP');
    $mail->addAddress($correoPaciente, $nombrePaciente);     //Add a recipient             //Name is optional
    
    
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '¡Cita Programada exitosamente!';
    $mail->Body    = 'Saludos,'.$user.'!<br><br>Tu cita ha sido programada y pagada exitosamente gracias al servicio de pagos en línea de Stripe, ya podrás
                      acudir a tu cita al dia y hora marcada en tu calendario de AgendaUSP. Para más información acude a ventanilla
                      de la Unidad de Servicios Psicológicos de la Facultad de Psicología. <b>¡Te esperamos!</b>
                      <br><br>
                      <b>Agenda USP</b><br><b><i>Unidad de Servicios Psicológicos de la Facultad de Psicología, UANL.</i></b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>