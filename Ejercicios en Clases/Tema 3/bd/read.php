<?php
include("conexion.php");
$sql = "SELECT id, nombres, apellidos, edad, sexo, ocupacion FROM personas";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    ?>
    <table border="1" align="center">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Ocupacion</th>
        </tr>
        <?php
        while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row["nombres"]; ?></td>
                <td><?php echo $row["apellidos"]; ?></td>
                <td><?php echo $row["edad"]; ?></td>
                <td><?php echo $row["sexo"]; ?></td>
                <td><?php echo $row["ocupacion"]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
} else {
    echo "0 resultados";
}
mysqli_close($con);
?>