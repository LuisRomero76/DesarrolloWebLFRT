<?php
include("verificar.php");
echo "Correo: ".$_SESSION["correo"]."<br>";
echo "Nivel: ".$_SESSION["nivel"];
?>
<br>
<a href="cerrar.php">Cerrar sesión</a>
<?php
include("conexion.php");
$sql = "SELECT p.id, nombres, apellidos, edad, sexo, o.nombre as ocupacion FROM personas p 
LEFT JOIN ocupaciones o on p.ocupacion_id = o.id";

$resultado = $con->query($sql);
$i=1;

if ($resultado->num_rows > 0) {
    ?>
    <table border="1">
        <tr>
            <th>Nro</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Ocupacion</th>
            <th>Operaciones</th>
        </tr>
        <?php
        while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["nombres"]; ?></td>
                <td><?php echo $row["apellidos"]; ?></td>
                <td><?php echo $row["edad"]; ?></td>
                <td><?php echo $row["sexo"]; ?></td>
                <td><?php echo $row["ocupacion"]; ?></td>
                <td>
                    <?php
                    if ($_SESSION["nivel"]==2) {
                        ?>
                        <a href="form_editar.php?id=<?php echo $row["id"] ?>"><img src="imagenes/edit.png" width="25px"></a>
                        <a href="eliminar.php?id=<?php echo $row["id"] ?>"><img src="imagenes/eliminar.png"  width="25px"></a>
                        <?php
                    }
                    ?>
                </td>
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

if ($_SESSION["nivel"]==1) {
    ?>
    <a href="form_insertar.php">Insertar</a>
    <?php
}
?>

