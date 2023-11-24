<?php 

include("conexion.php");


//Login
if (isset($_POST["submit_paciente"])) {
    $correo = $_POST["correo"];
    $verifpass = $_POST["verifpass"];
    $user = $_POST["nombres"];
    $rol = $_POST["rol"];

    $query = "";
    $roleColumn = "";

    if ($rol = "paciente") {


     $query = "SELECT * FROM `pacientes` WHERE correo = '$correo' AND nombres = '$user' AND verifpass = '$verifpass'";
        $roleColumn = "nombres";
		
		
	$id = "SELECT id_paciente FROM pacientes WHERE nombres = '$user'";
$result = mysqli_query($conn, $id);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id_paciente = $row['id_paciente'];
    $correoUser = $row['correo'];
    // Aquí puedes utilizar el ID del paciente como necesites
    echo "ID del paciente: " . $id_paciente;
} else {
    echo "No se encontró el paciente en la base de datos.";
}

    $result = mysqli_query($conn, $query);
    $nr = mysqli_num_rows($result);

    session_start();
		$_SESSION['rol'] = 'paciente';
		$_SESSION['id_paciente'] = $id_paciente;
		$_SESSION['correo'] = $correoUser;
    if ($nr != 0) {
        $_SESSION['dev'] = $_POST[$roleColumn];
		
        echo '<script> alert("Bienvenido a tu cuenta!"); window.location = "AGENDA.php" </script>';
    } else {
        echo '<script> alert("El usuario no existe."); window.location = "INICIO-SESION.php" </script>';
    }
}
}
if (isset($_POST["submit_psicologo"])) {
    $correo = $_POST["correo"];
    $verifpass = $_POST["verifpass"];
    $user = $_POST["nombres"];
    $rol = $_POST["rol"];

    $query = "";
    $roleColumn = "";

	$query = "SELECT * FROM `psicólogos` WHERE correo = '$correo' AND nombres = '$user' AND pass = '$verifpass'";   
     $roleColumn = "nombres";

$id = "SELECT id_psicologo FROM psicólogos WHERE nombres = '$user'";
$result = mysqli_query($conn, $id);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id_psicologo = $row['id_psicologo'];
    // Aquí puedes utilizar el ID del paciente como necesites
    echo "ID del psicologo: " . $id_psicologo;
} else {
    echo "No se encontró el paciente en la base de datos.";
}

    $result = mysqli_query($conn, $query);
    $nr = mysqli_num_rows($result);

    session_start();
		$_SESSION['rol'] = 'psicologo';
		$_SESSION['id_psicologo'] = $id_psicologo;
    if ($nr != 0) {
        $_SESSION['dev'] = $_POST[$roleColumn];
		
        echo '<script> alert("Bienvenido a tu cuenta!"); window.location = "AGENDA-PSI.php" </script>';
    } else {
        echo '<script> alert("El usuario no existe."); window.location = "INICIO-SESION.php" </script>';
    }
}


//Registrar
if(isset($_POST["submitregister"])){

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$creapass = $_POST["creapass"];
$verifpass = $_POST["verifpass"];
$nacim = $_POST["nacim"];
$sqlwrite = "";

$verificar_correo = mysqli_query($conn,"SELECT * FROM `pacientes` WHERE correo = '$correo'");
$sqlwrite = "INSERT INTO `pacientes`(`nombres`, `apellidos`, `correo`, `creapass`, `verifpass`, `nacim`) VALUES ('$nombres', '$apellidos', '$correo', '$creapass','$verifpass', '$nacim')";

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '<script> alert("CORREO YA REGISTRADO, INTENTA CON OTRO CORREO"); window.location = "REGISTRARSE.php" </script>';
    }
    elseif(mysqli_query($conn, $sqlwrite)){
        echo '<script> alert("USUARIO '.$nombres.' REGISTRADO CON EXITO"); window.location = "INICIO-SESION.php" </script>';

    }
 

}

?>