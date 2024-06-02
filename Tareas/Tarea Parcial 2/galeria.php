<?php
include('conexion.php');

$sql = "SELECT imagen FROM libros";

$resultado = $con->query($sql);

echo "<div style='display: flex; flex-direction:column'>";
while ($row = $resultado->fetch_assoc()) {
    ?>
    <a href="javascript:mostrarImagen('<?php echo $row["imagen"]?>')"><img src="imagenes/<?php echo $row["imagen"]?>" width="50px" height="75px"></a>
    <?php
}
echo "</div>";
?>