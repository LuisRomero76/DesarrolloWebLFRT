<?php
$filas = $_GET["fila"];
$columnas = $_GET["columna"];

echo "<table class='tablap' border='1'>";
for ($i=0; $i <= $filas; $i++) {
    echo "<tr>";
    for ($j=0; $j <= $columnas; $j++){
        if ($i == 0 && $j == 0) {
            echo "<td class='tabla'></td>";
        } else if ($i == 0) {
            echo "<td class='tabla'><b>$j</b></td>";
        } elseif ($j == 0) {
            echo "<td class='tabla'><b>$i</b></td>";
        } else {
            echo "<td>".($i*$j)."</td>";
        }
    }
    echo "</tr>\n";
}
echo "</table>";
?>

<style>
    .tablap {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .tabla {
        background-color: grey;
        width: 50px;
    }
</style>
