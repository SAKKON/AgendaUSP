<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "citasfapsi";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (! $conn) {
    die("No hay conexion con base de datos: " . mysqli_connect_error());
}

?>