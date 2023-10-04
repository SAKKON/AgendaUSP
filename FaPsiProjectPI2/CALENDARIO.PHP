<!DOCTYPE html>
<html>
<head>
    <title>Calendario con Fecha Actual</title>
    <style>
        table {
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        
        th {
            background-color: #ccc;
        }
        
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Calendario - <?php echo date('F Y'); ?></h1>
    
    <?php
        // Obtener la fecha actual del sistema
        $fechaActual = date('Y-m-d');
        $diaActual = date('j');
        $mesActual = date('n');
        $anioActual = date('Y');
        
        // Obtener el primer día del mes actual
        $primerDiaMes = date('N', strtotime($anioActual . '-' . $mesActual . '-01'));
        
        // Obtener el número de días del mes actual
        $numDiasMes = date('t', strtotime($anioActual . '-' . $mesActual . '-01'));
        
        // Calcular el número de filas necesarias para el calendario
        $numFilas = ceil(($numDiasMes + $primerDiaMes - 1) / 7);
    ?>
    
    <table>
        <tr>
            <th>Domingo</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
        </tr>
        
        <?php
            $dia = 1;
            for ($i = 0; $i < $numFilas; $i++) {
                echo '<tr>';
                for ($j = 1; $j <= 7; $j++) {
                    if (($i == 0 && $j < $primerDiaMes) || $dia > $numDiasMes) {
                        echo '<td></td>';
                    } else {
                        echo '<td';
                        if ($dia == $diaActual && $mesActual == date('n') && $anioActual == date('Y')) {
                            echo ' style="background-color: #ccc;"';
                        }
                        echo '>' . $dia . '</td>';
                        $dia++;
                    }
                }
                echo '</tr>';
            }
        ?>
        
    </table>
</body>
</html>
