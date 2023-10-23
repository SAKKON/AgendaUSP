<?php
// autorizar.php

// Verificar si se han recibido los parámetros id_paciente, id_psicologo y num_cita
if (isset($_GET['id_paciente']) && isset($_GET['id_psicologo']) && isset($_GET['num_cita']) && isset($_GET['fecha'])) {
    $id_paciente = $_GET['id_paciente'];
    $id_psicologo = $_GET['id_psicologo'];
    $num_cita = $_GET['num_cita'];
    $fecha = $_GET['fecha'];

    $username = "root";
    $password = "";
    $database = "citasfapsi";
    $mysqli = new mysqli("localhost", $username, $password, $database);

    $selectQuery = "SELECT * FROM horarios_citas  WHERE id_cita = '$num_cita'";

    function getDateString($date) {
        $date = strval($date);
        $dia = substr($date, 0, 2);
        $mes = substr($date, 2, 2);
        $ano = substr($date, 4, 8);
        $newDate = "$dia-$mes-$ano";
        return $newDate;
      }

      function getDayInt($date) {
        $date = strval($date);
        $dia = substr($date, 0, 2);
        $diaInt = intval($dia);
        return $diaInt;
      }

      function getMonthInt($date) {
        $date = strval($date); 
        $mes = substr($date, 2, 2);
        echo $mes;
        $mesInt = intval($mes);
        echo $mesInt;

        return $mesInt;
      }

      function getAnoInt($date) {
        $date = strval($date);
        $ano = substr($date, 4, 8);
        echo $ano;
        $anoInt = intval($ano);
        echo $anoInt;
        return $anoInt;
      }

      function getMonthDays($month) {
        $days30Month = [4,6,9,11];
        $days28Month = 2;
        if ($month == $days28Month ) {
            return 28;
        }
        foreach($days30Month as $daysThisMonth){
            if($month == $daysThisMonth) {
                return 30;
            }
        }
        return 31;
            
        }
      
      
      function calculateNewDate($day, $month, $year) {
        $day = $day + 7;
        $daysMonth = getMonthDays($month);
        if ($day > $daysMonth){
            $day = $day - $daysMonth;
            $month = $month + 1;
            if ($month > 12) {
                $month = 1;
                $year = $year + 1;
            }

        }
        $day = strval($day);
        $month = strval($month);
        $year = strval($year);
        $newDate = "$day$month$year";
        $newDate = intval($newDate);
        return $newDate;
      }

      

      if ($result = $mysqli->query($selectQuery)) {

        while ($row = $result->fetch_assoc()) {
        $field1name = $row["id_paciente"];
        $field2name = $row["id_psicologo"];
        $field3name = $row["id_hora"];
        $field4name = $row["id_disponibilidad"];
        $field5name = $row["int_fecha"];
        $field6name = $row["id_dia"];
        $id_cita = $row["id_cita"];
        $dayInt = getDayInt($fecha);
        $monthInt = getMonthInt($fecha);
        $yearInt = getAnoInt($fecha);
        $newDate = calculateNewDate($dayInt, $monthInt, $yearInt);
        $insertQuery = "INSERT INTO horarios_citas (id_paciente, id_psicologo, id_hora, id_disponibilidad, int_fecha, id_dia)
        VALUES ($field1name, $field2name, $field3name, 3, $newDate, $field6name)";
          
        }
    }    

    // Verificar si hay un error en la conexión
    if ($mysqli->connect_error) {
        die("Error en la conexión: " . $mysqli->connect_error);
    }

    // Actualizar el campo "id_paciente" en la tabla "horarios" usando el número de cita
    if ($mysqli->query($insertQuery)) {
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
