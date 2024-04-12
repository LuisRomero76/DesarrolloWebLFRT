<?php
include("verificar.php");
echo "Correo: ".$_SESSION["correo"]."<br>";
echo "Nivel: ".$_SESSION["nivel"];
?>
<br>
<a href="cerrar.php">Cerrar sesión</a>
<form action="read.php" method="get">
    <label for="filtro">Buscar</label>
    <input type="text" name="filtro">
    <input type="submit" value="Buscar">
</form>

<?php
include("conexion.php");

if (isset($_GET["ordenar"])) {
    $ordenar=$_GET["ordenar"];
}else {
    $ordenar="id";
}

if (isset($_GET["filtro"])) {
    $filtro= $_GET["filtro"];
    $sql = "SELECT p.id, p.fotografia, nombres, apellidos, edad, sexo, o.nombre as ocupacion FROM personas p 
    LEFT JOIN ocupaciones o on p.ocupacion_id=o.id WHERE nombres like '%$filtro%' or apellidos like '%$filtro%' order by $ordenar asc";
}else {
    $sql = "SELECT p.id, p.fotografia, nombres, apellidos, edad, sexo, o.nombre as ocupacion FROM personas p 
    LEFT JOIN ocupaciones o on p.ocupacion_id = o.id order by $ordenar asc";
}

$resultado = $con->query($sql);
$i=1;

if ($resultado->num_rows > 0) {
    ?>
    <table border="1">
        <tr>
            <th>Nro</th>
            <th>Fotografia</th>
            <th><a href="read.php?ordenar=nombres">Nombres</a></th>
            <th><a href="read.php?ordenar=apellidos">Apellidos</a></th>
            <th><a href="read.php?ordenar=edad">Edad</a></th>
            <th><a href="read.php?ordenar=sexo">Sexo</a></th>
            <th><a href="read.php?ordenar=ocupacion">Ocupacion</a></th>
            <th>Operaciones</th>
        </tr>
        <?php
        while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="imagenes/<?php echo $row["fotografia"]; ?>" width="50" height="50"></td>
                <td><?php echo $row["nombres"]; ?></td>
                <td><?php echo $row["apellidos"]; ?></td>
                <td><?php echo $row["edad"]; ?></td>
                <td><?php echo $row["sexo"]; ?></td>
                <td><?php echo $row["ocupacion"]; ?></td>
                <td>
                    <?php
                    if ($_SESSION["nivel"]==1) {
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

