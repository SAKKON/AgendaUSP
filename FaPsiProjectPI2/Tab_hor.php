<html>
 <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    
    <title>Agenda - FaPsi</title>
  </head>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "citasfapsi"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM horarios";


echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th> <font face="Arial">Numero de cita</font> </th> 
          <th> <font face="Arial">ID psicologo</font> </th> 
          <th> <font face="Arial">ID paciente</font> </th> 
          <th> <font face="Arial">Fechas ocupadas</font> </th> 
          <th> <font face="Arial">Disponibilidad</font> </th> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["num_cita"];
        $field2name = $row["id_psicologo"];
        $field3name = $row["id_paciente"];
        $field4name = $row["fechayhoras"];
        $field5name = $row["isdisponible"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>