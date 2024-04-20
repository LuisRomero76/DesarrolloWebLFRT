<?php
$mes = $_POST['meses'];
$año = $_POST['anio'];
$tamaño = $_POST['tamanio'];

$num_dias = cal_days_in_month(CAL_GREGORIAN, $mes, $año);
$fecha = $año . '-' . $mes . '-01';
$dia_semana = date('N', strtotime($fecha));

$dias_semana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

echo "<table border='1'>";
echo "<tr>";
for ($i = 0; $i < 7; $i++) {
    echo "<th>".$dias_semana[$i]."</th>";
}
echo "</tr>";

$contador_dias = 1;

while ($contador_dias <= $num_dias) {
    echo "<tr>";
    for ($i = 1; $i <= 7; $i++) {
        echo "<td>";

        if ($contador_dias <= $num_dias && ($i >= $dia_semana || $contador_dias > 1)) {
            echo $contador_dias;
            $contador_dias++;
        }

        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>
