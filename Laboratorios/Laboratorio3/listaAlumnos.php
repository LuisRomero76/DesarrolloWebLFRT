<?php
include("conexion.php");

$sql = "SELECT a.id, a.fotografia, nombres, apellidos, cu, sexo, c.carrera as carrera FROM alumnos a 
LEFT JOIN carreras c on a.codigocarrera = c.codigo";

$resultado = $con->query($sql);
$i = 1;

if ($resultado->num_rows > 0) {
    ?>
    <table border="1">
        <tr>
            <th>Nro</th>
            <th>Fotografia</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Sexo</th>
            <th>Carrera</th>
        </tr>
        <?php
        while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $i++;?></td>
                <td><img src="imagenes/<?php echo $row["fotografia"]; ?>" width="50" height="50"></td>
                <td><?php echo $row["nombres"]; ?></td>
                <td><?php echo $row["apellidos"]; ?></td>
                <td><?php echo $row["cu"]; ?></td>
                <td><?php echo $row["sexo"]; ?></td>
                <td><?php echo $row["carrera"]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
} else {
    echo "0 resultados";
}
?>

<style>
    table {
        border-collapse: collapse;
        text-align: center;
    }

    th {
        background-color: gray;
        border: 1px solid black;
        width: 100px;
        padding: 10px;
    }

</style>